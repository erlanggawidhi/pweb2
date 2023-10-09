<h2>Enkapsulasi</h2>
<?php
//membuat class mahasiswa
class mahasiswa
{
    public $nama;//property public
    private $nim = "220302033";//property protected

    public function tampilkan_nama()//public method
    {
        return "Nama saya Erlangga Widhi Pramono </br>";//nilai kembalian
    }

    function tampilkan_nim()//protected method
    {
        return "NIM saya " . $this->nim;
    }
}

$mahasiswa = new mahasiswa();//intansiasi objek mahasiswa kedalam variabel $mahasiswa
$nim = new mahasiswa();//intansiasi objek nim kedalam variabel $mahasiswa


echo $mahasiswa->tampilkan_nama();//memanggil method tampilkan_nama
echo $nim->tampilkan_nim();//memanggil method tampilan_nim