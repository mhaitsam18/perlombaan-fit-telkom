<?php

namespace App\Controllers\Mahasiswa;

use App\Controllers\BaseController;


class PendataanLomba extends BaseController
{
    public function index()
    {
        return view('mahasiswa/pendataan-lomba/index', [
            'title' => 'Pendataan Lomba',
            'page' => 'pendataan-lomba',
        ]);
    }
}
