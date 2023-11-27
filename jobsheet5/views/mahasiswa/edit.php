<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <?php

    include_once '../../config.php';
    include_once '../../controllers/MahasiswaController.php';

    $database = new database();
    $db = $database->getKoneksi();

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $mahasiswaController = new MahasiswaController($db);
        $mahasiswaData = $mahasiswaController->getMahasiswaById($id);

        if ($mahasiswaData) {
            if (isset($_POST['submit'])) {
                $nim = $_POST['nim'];
                $nama = $_POST['nama'];
                $jenis_kelamin = $_POST['jenis_kelamin'];
                $program_studi = $_POST['program_studi'];
                $alamat = $_POST['alamat'];

                $result = $mahasiswaController->updateMahasiswa($id, $nim, $nama, $jenis_kelamin, $program_studi, $alamat);

                if ($result) {
                    header("location:/pweb2/jobsheet5/mahasiswa");
                } else {
                    header("location:/pweb2/jobsheet5/edit");
                }
            }
        } else {
            echo "Mahasiswa tidak Ditemukan";
        }
    }

    ?>

    <?php
    if ($mahasiswaData) {
    ?>
        <div class="container-fluid mt-3">
            <h3>Edit Data Mahasiswa</h3>
            <form action="" method="post">
                <?php
                foreach ($mahasiswaData as $d) {
                ?>
                    <table class="table">
                        <thead class="table-light">
                            <tr>
                                <td><b>NIM</b></td>
                                <td>
                                    <input type="hidden" name="id" value="<?php echo $d['id'] ?>">
                                    <input class="form-control" type="text" name="nim" value="<?php echo $d['nim'] ?>">
                                </td>
                            </tr>
                            <tr>
                                <td><b>Nama</b></td>
                                <td>
                                    <input class="form-control" type="text" name="nama" value="<?php echo $d['nama'] ?>">
                                </td>
                            </tr>
                            <tr>
                                <td><b>Jenis Kelamin</b></td>
                                <td>
                                    <select name="jenis_kelamin" id="" class="form-control">
                                        <option <?php if ($d['jenis_kelamin'] == 'Laki-Laki') echo 'selected' ?> value="Laki-Laki">Laki-Laki</option>
                                        <option <?php if ($d['jenis_kelamin'] == 'Perempuan') echo 'selected' ?> value="Perempuan">Perempuan</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td><b>Program Studi</b></td>
                                <td>
                                    <select name="program_studi" id="" class="form-control">
                                        <option <?php if ($d['program_studi'] == 'Teknik Informatika') echo 'selected' ?> value="Teknik Informatika">Teknik Informatika</option>
                                        <option <?php if ($d['program_studi'] == 'Rekayasa Keamanan dan Siber') echo 'selected' ?> value="Rekayasa Keamanan dan Siber">Rekayasa Keamanan dan Siber</option>
                                        <option <?php if ($d['program_studi'] == 'Teknologi Rekayasa Multimedia') echo 'selected' ?> value="Teknologi Rekayasa Multimedia">Teknologi Rekayasa Multimedia</option>
                                        <option <?php if ($d['program_studi'] == 'Akuntansi Lembaga Keuangan Syariah') echo 'selected' ?> value="Akuntansi Lembaga Keuangan Syariah">Akuntansi Lembaga Keuangan Syariah</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td><b>Alamat</b></td>
                                <td>
                                    <textarea class="form-control" name="alamat" cols="100" rows="1"><?php echo $d['alamat'] ?></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input type="submit" name="submit" class="btn btn-primary mt-3 mb-3" value="Simpan"></td>
                            </tr>
                        </thead>
                        <tbody>
                    </table>
                <?php
                }
            }
            ?>
            </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>