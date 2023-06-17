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
            'title' => 'Rekognisi',
            'page' => 'rekognisi',
            'validation' => \Config\Services::validation(),
        ]);
    }
    
    public function list()
    {
        return view('mahasiswa/rekognisi/list', [
            'title' => 'List Rekognisi',
            'page' => 'rekognisi',
            'data_rekognisi' => $this->rekognisiModel->where('user_id', user()->id)->get()->result(),
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
        ]);

        if (!$check) {
            return view('mahasiswa/rekognisi/index', [
                'title' => 'Rekognisi',
                'validation' => \Config\Services::validation(),
                'page' => 'rekognisi',
            ]);
            // $validation = \Config\Services::validation();
            // return redirect()->back()->withInput()->with('error', $validation->listErrors());
            // return redirect()->back()->withInput();
        }

        $file = $this->request->getFile('sertifikat');
        $nama_file = $file->getRandomName();
        $file->move('assets/img/rekognisi', $nama_file);
        $nama_file = 'rekognisi/' . $nama_file;

        $this->rekognisiModel->save([
            'user_id' => $this->request->getVar('user_id'),
            'nama_lomba' => $this->request->getVar('nama_lomba'),
            'nama_ketua' => $this->request->getVar('nama_ketua'),
            'nim' => $this->request->getVar('nim'),
            'nama_pembimbing' => $this->request->getVar('nama_pembimbing'),
            'kelas' => $this->request->getVar('kelas'),
            'email' => $this->request->getVar('email'),
            'sertifikat' => $nama_file,
            'status' => 'on process',
        ]);

        session()->setFlashdata('success', 'Data rekognisi berhasil dikirim');

        return redirect()->to('/mahasiswa/rekognisi/list');
    }
}
