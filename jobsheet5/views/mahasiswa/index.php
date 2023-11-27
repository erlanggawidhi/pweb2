<!DOCTYPE html>
<html lang="en">
    <?php
    //memanggil class model database
    include_once '../../config.php';
    include_once '../../controllers/MahasiswaController.php';
    require '../../index.php';

    //instansiasi calss database
    $database = new database;
    $db = $database->getKoneksi();

    $mahasiswaController = new MahasiswaController($db);
    $mahasiswa = $mahasiswaController->getAllMahasiswa()
    ?>
    <div class="container-fluid mt-3">
        <h3>Data Mahasiswa</h3>
        <a type="button" class="btn btn-primary mb-3 mt-3" href="tambah_mahasiswa">Tambah Mahasiswa</a>

        <?php
        if (isset($_GET['pesan'])) {
            $pesan = $_GET['pesan'];
            $alertClass = '';
            $alertText = '';

            if ($pesan == "Data telah dihapus") {
                $alertClass = 'alert-danger';
                $alertText = 'Data berhasil dihapus!';
            } elseif ($pesan == "Data telah ditambah") {
                $alertClass = 'alert-success';
                $alertText = 'Data berhasil ditambah!';
            } elseif ($pesan == "Data telah diedit") {
                $alertClass = 'alert-warning';
                $alertText = 'Data berhasil diedit!';
            }

            if (!empty($alertClass) && !empty($alertText)) {
                echo '<div class="alert ' . $alertClass . ' alert-dismissible">
                        ' . $alertText . '
                        <a href="tampil_mhs.php" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></a>
                      </div>';
            }
        }
        ?>
        
        <table class="table">
            <thead class="table-light">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Program Studi</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($mahasiswa as $x) {
                ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $x['nim'] ?></td>
                        <td><?php echo $x['nama'] ?></td>
                        <td><?php echo $x['jenis_kelamin'] ?></td>
                        <td><?php echo $x['program_studi'] ?></td>                       
                        <td><?php echo $x['alamat'] ?></td>
                        <td>
                            <a type="button" class="btn btn-warning" href="edit/<?php echo $x['id']; ?>">Edit</a>
                            <a type="button" class="btn btn-danger" href="hapus/<?php echo $x['id']; ?>"onclick="return confirm('Apakah Yakin akan Menghapus..?')">Hapus</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</div>
</body>

</html>
