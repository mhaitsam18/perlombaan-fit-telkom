<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\DosenModel;


class Dosen extends BaseController
{

    private $db;
    private $dosenModel;
    function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->dosenModel = new DosenModel();
    }
    public function index()
    {
        $data_dosen = $this->dosenModel->findAll();
        return view('admin/dosen/index', [
            'title' => 'Data Dosen',
            'page' => 'dosen',
            'data_dosen' => $data_dosen,
        ]);
    }
}
