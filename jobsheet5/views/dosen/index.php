<!DOCTYPE html>
<html lang="en">
<?php
//memanggil class model database
include_once '../../config.php';
include_once '../../controllers/DosenController.php';
require '../../index.php';

// instansiasi class database
$database = new database;
$db = $database->getKoneksi();

$dosenController = new DosenController($db);
$dosen = $dosenController->getAllDosen();
?>
<div class="container-fluid mt-3">
        <h3>Data Dosen</h3>
        <a type="button" class="btn btn-primary mb-3 mt-3" href="tambah_dosen">Tambah Dosen</a>

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
                        <a href="tampil_dsn.php" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></a>
                      </div>';
            }
        }
        ?>

<table class="table">
<thead class="table-light">
    <tr>
        <th>No</th>
        <th>NIDN</th>
        <th>Nama</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Jenis Kelamin</th>
        <th>Agama</th>
        <th>Alamat</th>
        <th>Aksi</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $no = 1;
    foreach ($dosen as $x) {
    ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $x['nidn'] ?></td>
            <td><?php echo $x['nama'] ?></td>
            <td><?php echo $x['tempat_lahir'] ?></td>
            <td><?php echo $x['tanggal_lahir'] ?></td>
            <td><?php echo $x['jenis_kelamin'] ?></td>
            <td><?php echo $x['agama'] ?></td>
            <td><?php echo $x['alamat'] ?></td>
            <td>
                <a class="btn btn-warning" href="edit_dosen/<?php echo $x['id']; ?>">Edit</a>
                <a class="btn btn-danger" href="hapus_dosen/<?php echo $x['id']; ?>" onclick="return confirm('Apakah yakin akan menghapus?')">Hapus</a>
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