<?php
// Kelas induk Manusia
class Manusia {
    protected $nama; // Variabel protected, dapat diakses oleh kelas anak
    private $umur;   // Variabel private, hanya dapat diakses oleh kelas ini sendiri

    // Konstruktor untuk mengatur nama dan umur manusia
    public function __construct($nama, $umur) 
    {
        $this->nama = $nama;
        $this->umur = $umur;
    }

    // Fungsi untuk menampilkan informasi manusia
    public function getInfo() 
    {
        return "Nama: " . $this->nama . ", Umur : " . $this->umur . " tahun";
    }
}

// Kelas turunan Mahasiswa
class Mahasiswa extends Manusia 
{
    protected $nim; // Variabel protected, dapat diakses oleh kelas turunan

    public function __construct($nama, $umur, $nim) {
        parent::__construct($nama, $umur); // Memanggil konstruktor kelas induk menggunakan parent
        $this->nim = $nim;
    }

    public function getInfo() 
    {
        return parent::getInfo() . ", NIM : " . $this->nim;
    }
}

// Membuat objek mahasiswa
$mahasiswa = new Mahasiswa("Erlangga", 21, "220302033");

// Menampilkan informasi mahasiswa menggunakan fungsi getInfo()
echo $mahasiswa->getInfo();
?>
