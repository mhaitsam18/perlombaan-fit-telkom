<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;


class PendataanLomba extends BaseController
{
    public function index()
    {
        $pendataan_lomba = $this->pendataanLombaModel->findAll();
        return view('admin/pendataan-lomba/index', [
            'title' => 'Pendataan Lomba',
            'page' => 'pendataan-lomba',
            'data_pendataan_lomba' => $pendataan_lomba,
            'pendataan_lomba_mahasiswa' => $this->pendataanLombaMahasiswaModel
        ]);
    }

    public function create()
    {
    }

    public function delete($id = null)
    {
        $this->pendataanLombaModel->delete($id);
        session()->setFlashdata('success', 'Data berhasil dihapus');
        return redirect()->back();
    }
}
