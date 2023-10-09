<h2>Class, Object, Property dan Method</h2>
<h4>class mahasiswa</h4>
<?php
//membuat class
class mahasiswa
{
    //menuliskan property
    var $nim;
    var $nama;
    var $alamat;

    //method untuk menampilkan nama
    function tampil_nim()
    {
        return "220302033 </br>";
    }

    //method untuk menampilkan nama
    function tampil_nama()
    {
        return "Nama saya Erlangga Widhi Pramono </br>";
    }

    //method untuk menampilkan prodi
    function tampil_alamat()
    {
        return "Jl. Pisang No.18 </br>";
    }
}

//membuat objek nidn_dosen
$nim_mahasiswa = new mahasiswa();

//membuat objek nama_dosen
$nama_mahasiswa = new mahasiswa();

//membuat objek prodi_dosen
$prodi_mahasiswa = new mahasiswa();

//menampilkan objek ke layar
echo $nim_mahasiswa->tampil_nim();
echo $nama_mahasiswa->tampil_nama();
echo $prodi_mahasiswa->tampil_alamat();
?>

<h4>class dosen</h4>
<?php
class dosen
{
    //menuliskan property
    var $nidn;
    var $nama;
    var $prodi;

    //method untuk menampilkan nama
    function tampil_nidn()
    {
        return "220302033 </br>";
    }

    //method untuk menampilkan nama
    function tampil_nama()
    {
        return "Nama saya Erlangga Widhi Pramono </br>";
    }

    //method untuk menampilkan prodi
    function tampil_prodi()
    {
        return "D3 TEKNIK INFORMATIKA </br>";
    }
}

//membuat objek nidn_dosen
$nidn_dosen = new dosen();

//membuat objek nama_dosen
$nama_dosen = new dosen();

//membuat objek prodi_dosen
$prodi_dosen = new dosen();

//menampilkan objek ke layar
echo $nidn_dosen->tampil_nidn();
echo $nama_dosen->tampil_nama();
echo $prodi_dosen->tampil_prodi();