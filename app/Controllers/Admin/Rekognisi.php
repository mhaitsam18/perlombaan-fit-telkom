<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;


class Rekognisi extends BaseController
{
    public function index()
    {
        $rekognisi = $this->rekognisiModel->findAll();
        return view('admin/rekognisi/index', [
            'title' => 'Rekognisi',
            'page' => 'rekognisi',
            'data_rekognisi' => $rekognisi,
            'rekognisi_mahasiswa' => $this->rekognisiMahasiswaModel
        ]);
    }
    
    public function create()
    {
    }
}
