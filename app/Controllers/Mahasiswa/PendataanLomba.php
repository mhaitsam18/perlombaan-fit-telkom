<?php

namespace App\Controllers\Mahasiswa;

use App\Controllers\BaseController;

use App\Models\DosenModel;

class PendataanLomba extends BaseController
{
    protected $validation;
    //ary
    protected $dosenModel;

    public function __construct()
    {
        $this->db = \Config\Database::connect();

        $this->validation = \Config\Services::validation();
        $this->dosenModel = new DosenModel();
        if (!logged_in()) {
            return redirect()->to('/login');
        }
    }
    public function index()
    {
        $nama_gelar_list = $this->dosenModel->getNamaGelar();
        return view('mahasiswa/pendataan-lomba/index', [
            'title' => 'Pendataan Lomba',
            'page' => 'pendataan-lomba',
            'validation' => \Config\Services::validation(),
            'nama_gelar_list' => $nama_gelar_list,
        ]);
    }

    public function list()
    {
        return view('mahasiswa/pendataan-lomba/list', [
            'title' => 'List Pendataan Lomba',
            'page' => 'pendataan-lomba',
            'data_pendataan_lomba' => $this->pendataanLombaModel->where('user_id', user()->id)->get()->getResult(),
            'pendataan_lomba_mahasiswa' => $this->pendataanLombaMahasiswaModel,
            'validation' => \Config\Services::validation(),
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

    public function storeAnggota()
    {
        $check = $this->validate([
            'nama_mahasiswa' => 'required',
            'nim' => 'required',
            'kelas' => 'required',
        ]);

        if (!$check) {
            return view('mahasiswa/pendataan-lomba/list', [
                'title' => 'List Pendataan Lomba',
                'validation' => \Config\Services::validation(),
                'page' => 'pendataan-lomba',
            ]);
            // $validation = \Config\Services::validation();
            // return redirect()->back()->withInput()->with('error', $validation->listErrors());
            // return redirect()->back()->withInput();
        }


        $this->pendataanLombaMahasiswaModel->save([
            'pendataan_lomba_id' => $this->request->getVar('pendataan_lomba_id'),
            'nama_mahasiswa' => $this->request->getVar('nama_mahasiswa'),
            'nim' => $this->request->getVar('nim'),
            'kelas' => $this->request->getVar('kelas'),
        ]);

        session()->setFlashdata('success', 'Anggota Lomba berhasil ditambahkan');

        return redirect()->to('/mahasiswa/pendataan-lomba/list');
    }

    public function delete($id = null)
    {
        $this->pendataanLombaModel->delete($id);
        session()->setFlashdata('success', 'Data berhasil dihapus');
        return redirect()->back();
    }


    public function updateStatus()
    {
        $check = $this->validate([
            'status' => 'required',
        ]);

        if (!$check) {
            return view('mahasiswa/pendataan-lomba/list', [
                'title' => 'List Pendataan Lomba',
                'validation' => \Config\Services::validation(),
                'page' => 'pendataan-lomba',
            ]);
            // $validation = \Config\Services::validation();
            // return redirect()->back()->withInput()->with('error', $validation->listErrors());
            // return redirect()->back()->withInput();
        }


        $this->pendataanLombaModel->save([
            'id' => $this->request->getVar('id'),
            'status' => $this->request->getVar('status'),
        ]);

        session()->setFlashdata('success', 'Status Lomba berhasil diperbarui');

        return redirect()->to('/mahasiswa/pendataan-lomba/list');
    }

    public function print()
    {
        # code...
    }
}
