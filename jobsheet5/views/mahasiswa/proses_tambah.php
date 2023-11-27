<?php
include_once '../../config.php';
include_once '../../controllers/MahasiswaController.php';

$database = new database();
$db = $database->getKoneksi();

if(isset($_POST['submit']))
{
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $program_studi = $_POST['program_studi'];
    $alamat = $_POST['alamat'];

    $mahasiswaController = new MahasiswaController($db);
    $result = $mahasiswaController->createMahasiswa($nim, $nama, $jenis_kelamin, $program_studi, $alamat);

    if ($result)
    {
        header ("location:mahasiswa");
    }
    else
    {
        header ("location:tambah.php");
    }
    
}