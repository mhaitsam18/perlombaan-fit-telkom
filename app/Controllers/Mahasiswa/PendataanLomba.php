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
            'validation' => \Config\Services::validation(),
        ]);
    }
    
    public function list()
    {
        return view('mahasiswa/pendataan-lomba/list', [
            'title' => 'List Pendataan Lomba',
            'page' => 'pendataan-lomba',
            'data_pendataan_lomba' => $this->pendataanLombaModel->where('user_id', user()->id)->get()->getResult(),
        ]);
    }
    
    public function store()
    {
        $check = $this->validate([
            'nama_lomba' => 'required',
            'nama_ketua' => 'required',
            'nim' => 'required',
            'kelas' => 'required',
            'email' => 'required',
            'sertifikat' => 'uploaded[sertifikat]',
            'status' => 'required',
        ]);
        
        // echo $this->request->getVar('nama_lomba');
        // die();



        if (!$check) {
            return view('mahasiswa/pendataan-lomba/index', [
                'title' => 'Pendataan Lomba',
                'validation' => \Config\Services::validation(),
                'page' => 'pendataan-lomba',
            ]);
            // $validation = \Config\Services::validation();
            // return redirect()->back()->withInput()->with('error', $validation->listErrors());
            // return redirect()->back()->withInput();
        }

        $file = $this->request->getFile('sertifikat');
        $nama_file = $file->getRandomName();

        $file->move('assets/img/pendataan-lomba', $nama_file);
        $nama_file = 'pendataan-lomba/' . $nama_file;

        $this->pendataanLombaModel->save([
            'user_id' => $this->request->getVar('user_id'),
            'nama_lomba' => $this->request->getVar('nama_lomba'),
            'nama_ketua' => $this->request->getVar('nama_ketua'),
            'nim' => $this->request->getVar('nim'),
            'nama_pembimbing' => $this->request->getVar('nama_pembimbing'),
            'kelas' => $this->request->getVar('kelas'),
            'email' => $this->request->getVar('email'),
            'sertifikat' => $nama_file,
            'status' => $this->request->getVar('status'),
        ]);

        session()->setFlashdata('success', 'Pendataan Lomba berhasil dikirim');

        return redirect()->to('/mahasiswa/pendataan-lomba/list');
    }
}
