<?php

namespace App\Controllers\Mahasiswa;

use App\Controllers\BaseController;


class Rekognisi extends BaseController
{
    protected $validation;
    public function __construct()
    {
        $this->db = \Config\Database::connect();

        $this->validation = \Config\Services::validation();
    }
    public function index()
    {
        return view('mahasiswa/rekognisi/index', [
            'title' => 'Input Rekognisi',
            'page' => 'rekognisi',
        ]);
    }
}
