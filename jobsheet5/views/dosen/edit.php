<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Dosen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<?php

include_once '../../config.php';
include_once '../../controllers/DosenController.php';

// instansiasi class database
$database = new database();
$db = $database->getKoneksi();

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $dosenController = new DosenController($db);
    $dosenData = $dosenController->getDosenById($id);

    if ($dosenData) {
        if (isset($_POST['submit'])) {
            $nidn = $_POST['nidn'];
            $nama = $_POST['nama'];
            $tempat_lahir = $_POST['tempat_lahir'];
            $tanggal_lahir = $_POST['tanggal_lahir'];
            $jenis_kelamin = $_POST['jenis_kelamin'];
            $agama = $_POST['agama'];
            $alamat = $_POST['alamat'];

            $result = $dosenController->updateDosen($id, $nidn, $nama, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $agama, $alamat);

            if ($result) {
                header("location:/pweb2/jobsheet5/dosen");
            } else {
                header("location:/pweb2/jobsheet5/edit");
            }
        }
    } else {
        echo "Dosen tidak ditemukan";
    }
}
?>

<?php
if ($dosenData){
    ?>
    <div class="container-fluid mt-3">
        <h3>Edit Data Dosen</h3>
        <form action="" method="post">
            <?php
            foreach ($dosenData as $d) {
                ?>
                <table class="table">
                    <thead class="table-light">
                        <tr>
                            <td><b>NIDN</b></td>
                            <td>
                                <input type="hidden" name="id" value="<?php echo $d['id'] ?>">
                                <input class="form-control" type="text" name="nidn" value="<?php echo $d['nidn'] ?>">
                            </td>   
                        </tr>
                        <tr>
                            <td><b>Nama</b></td>
                            <td>
                                <input class="form-control" type="text" name="nama" value="<?php echo $d['nama'] ?>">
                            </td>
                        </tr>  
                        <tr>
                            <td><b>Tempat Lahir</b></td>
                            <td>
                                <input class="form-control" type="text" name="tempat_lahir" value="<?php echo $d['tempat_lahir'] ?>">
                            </td>
                        </tr> 
                        <tr>
                            <td><b>Tanggal Lahir</b></td>
                            <td>
                                <input type="date" name="tanggal_lahir" value="<?php echo $d['tanggal_lahir'] ?>">
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
                            <td><b>Agama</b></td>
                            <td>
                                <select name="agama" id="" class="form-control">
                                    <option <?php if ($d['agama'] == 'Islam') echo 'selected' ?> value="Islam">Islam</option>
                                    <option <?php if ($d['agama'] == 'Kristen') echo 'selected' ?> value="Kristen">Kristen</option>
                                    <option <?php if ($d['agama'] == 'Budha') echo 'selected' ?> value="Budha">Budha</option>
                                    <option <?php if ($d['agama'] == 'Hindu') echo 'selected' ?> value="Hindu">Hindu</option>
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