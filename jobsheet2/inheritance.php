<h2>Inheritance</h2>
<?php
//membuat super class manusia
class manusia
{
    public $nama_saya;

    function panggil_nama($saya)//method
    {
        $this->nama_saya=$saya;
    }
}

//class turunan atau sub class dari class manusia
class mahasiswa extends manusia
{
    public $nama_mahasiswa;

    function panggil_mahasiswa($mahasiswa)
    {
        $this->nama_mahasiswa=$mahasiswa;
    }
}

//intansiasi class mahasiswa
$informatika=new mahasiswa();

$informatika->panggil_nama("Erlangga Widhi");
$informatika->panggil_mahasiswa("Pramono");

//tampilkan isi property
echo "Nama Depan saya : " . $informatika->nama_saya. "</br>";
echo "Nama Belakang saya : " . $informatika->nama_mahasiswa;