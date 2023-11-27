<?php

class Mahasiswa
{
    private $koneksi;

    public function __construct($db)
    {
        $this->koneksi=$db;
    }

    public function getAllMahasiswa()
    {
        $querry = "SELECT * FROM Mahasiswa";
        $result = mysqli_query($this->koneksi, $querry);
        return $result;
    }

    public function createMahasiswa($nim, $nama, $jenis_kelamin, $program_studi, $alamat)
    {
        $querry = "INSERT INTO mahasiswa (nim, nama, jenis_kelamin, program_studi, alamat) 
        VALUES ('$nim', '$nama', '$jenis_kelamin', '$program_studi', '$alamat')";
        $result = mysqli_query($this->koneksi, $querry);
        if ($result)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function getAllMahasiswaById($id)
    {
        $querry = "SELECT * FROM mahasiswa where id = $id";
        $result = mysqli_query($this->koneksi, $querry);
        return mysqli_fetch_assoc($result);
    }

    public function getMahasiswaById($id) //edit
    {
        $query = "SELECT * FROM mahasiswa where id=$id";
        $result = mysqli_query($this->koneksi, $query);
        return $result;
    }

    public function updateMahasiswa ($id, $nim, $nama, $jenis_kelamin, $program_studi, $alamat)
    {
        $querry = "UPDATE mahasiswa set nim='$nim', nama='$nama', jenis_kelamin='$jenis_kelamin', 
        program_studi='$program_studi', alamat='$alamat' where id='$id'";
        $result = mysqli_query($this->koneksi, $querry);
        if ($result)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function deleteMahasiswa($id)
    {
        $querry = "DELETE FROM mahasiswa WHERE id = $id";
        $result = mysqli_query ($this->koneksi, $querry);
        if ($result)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}