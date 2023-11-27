<?php
include_once '../../config.php';
include_once '../../controllers/DosenController.php';

$database = new database();
$db = $database->getKoneksi();

if (isset($_POST['submit']))
{
    $nidn = $_POST['nidn'];
    $nama = $_POST['nama'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $alamat = $_POST['alamat'];

    $dosenController = new DosenController($db);
    $result = $dosenController->createDosen($nidn, $nama, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $agama, $alamat);

    if($result) 
    {
        header("location:dosen");
    } 
    else 
    {
        header("location:tambah.php");
    }
}