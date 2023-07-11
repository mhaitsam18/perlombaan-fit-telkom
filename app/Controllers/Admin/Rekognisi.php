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
            'rekognisi_mahasiswa' => $this->rekognisiMahasiswaModel,
            'validation' => \Config\Services::validation(),
        ]);
    }

    public function create()
    {
    }

    public function updateStatus()
    {
        $check = $this->validate([
            'status' => 'required',
            'note' => 'required'
        ]);
        $validation = \Config\Services::validation();
        if (!$check) {
            $rekognisi = $this->rekognisiModel->findAll();
            return view('admin/rekognisi/index', [
                'title' => 'Rekognisi',
                'page' => 'rekognisi',
                'data_rekognisi' => $rekognisi,
                'rekognisi_mahasiswa' => $this->rekognisiMahasiswaModel,
                'validation' => \Config\Services::validation(),
            ]);
        }
        $this->rekognisiModel->save([
            'id' => $this->request->getVar('id'),
            'status' => $this->request->getVar('status'),
            'note' => $this->request->getVar('note'),
        ]);

        session()->setFlashdata('success', 'Status Rekognisi berhasil diperbarui');

        return redirect()->to('/admin/rekognisi');
    }
    public function delete($id = null)
    {
        $this->rekognisiModel->delete($id);
        session()->setFlashdata('success', 'Data berhasil dihapus');
        return redirect()->back();
    }
}
