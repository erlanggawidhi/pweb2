<?php

include_once '../../models/dosen.php';

class DosenController
{
    private $model;

    public function __construct($db)
    {
        $this->model = new Dosen($db);
    }

    public function getAllDosen()
    {
        return $this->model->getAllDosen();
    }

    public function createDosen($nidn, $nama, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $agama, $alamat)
    {
        return $this->model->createDosen($nidn, $nama, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $agama, $alamat);
    }

    public function getDosenById($id)
    {
        return $this->model->getDosenById($id);
    }

    public function updateDosen($id, $nidn, $nama, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $agama, $alamat)
    {
        return $this->model->updateDosen($id, $nidn, $nama, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $agama, $alamat);
    }

    public function deleteDosen($id)
    {
        return $this->model->deleteDosen($id);
    }
}