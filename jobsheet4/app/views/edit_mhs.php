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
include '../classes/database.php';
$db = new database();
?>

<div class="container-fluid mt-3">
<h3>Edit Data Mahasiswa</h3>
<form action="proses_mhs.php?aksi=update" method="post">
<?php
foreach ($db->edit($_GET['id'])as $d)
{
?>
     <table class="table">
            <thead class="table-light">
        <tr>
            <td><b>NIM</b></td>
            <td>
                <input type="hidden" name="id" value ="<?php echo $d ['id']?>">
                <input class="form-control" type = "text" name ="nim" value ="<?php echo $d['nim']?>">
            </td>
        </tr>
        <tr>
            <td><b>Nama</b></td>
            <td>
                <input class="form-control" type = "text" name ="nama" value ="<?php echo $d['nama']?>">
            </td>
        </tr>
        <tr>
            <td><b>Alamat</b></td>
            <td>
                <textarea class="form-control" name="alamat" cols="100" rows ="1"><?php echo $d['alamat']?></textarea>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type = "submit" class="btn btn-primary mt-3 mb-3" value = "Simpan"></td>
        </tr>
        </thead>
        <tbody>
    </table>
<?php
}
?>
</form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>