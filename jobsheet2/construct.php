<h2>Construct dan Destruct</h2>
<?php
//membuat class
class dosen
{
    //menuliskan property
    var $nidn;
    var $nama;
    var $prodi;

    function __construct()
    {
        echo "Saya adalah Dosen Teknik Informatika";
        echo "<br>";
    }

    function __destruct()
    {
        echo "Politeknik Negeri Cilacap";
    }

    //method untuk menampilkan nama
    function tampil_nidn()
    {
        return "220302033";
    }

    //method untuk menampilkan nama
    function tampil_nama()
    {
        return "Nama saya Erlangga Widhi Pramono";
    }

    function tampil_mahasiswa()
    {
        return "Tidak akan menjadi joki atau menggunakan jasa joki sampai lulus kuliah";
    }

    //method untuk menampilkan prodi
    function tampil_prodi()
    {
        return "D3 Teknik Informatika";
    }
}

//membuat objek nama_dosen
$nama_dosen = new dosen();

//menampilkan objek ke layar

echo $nama_dosen->tampil_nama() . "<br>";
echo $nama_dosen->tampil_mahasiswa() . "<br>";
