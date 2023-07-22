<?php

namespace App\Controllers\Mahasiswa;

use App\Controllers\BaseController;

use App\Models\DosenModel;

class Rekognisi extends BaseController
{
    protected $validation;
    //ary
    protected $dosenModel;
    //ary
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
        // Ambil data dari DosenModel
        $nama_gelar_list = $this->dosenModel->getNamaGelar();

        return view('mahasiswa/rekognisi/index', [
            'title' => 'Rekognisi',
            'page' => 'rekognisi',
            'validation' => \Config\Services::validation(),
            'nama_gelar_list' => $nama_gelar_list, // Teruskan data ke view
        ]);
    }

    public function list()
    {
        return view('mahasiswa/rekognisi/list', [
            'title' => 'List Rekognisi',
            'page' => 'rekognisi',
            'data_rekognisi' => $this->rekognisiModel->where('user_id', user()->id)->get()->getResult(),
            'rekognisi_mahasiswa' => $this->rekognisiMahasiswaModel
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
            'prestasi' => 'required',
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
            'note' => 'Sedang dalam pemrosesan',
            'prestasi' => $this->request->getVar('prestasi'),
        ]);

        session()->setFlashdata('success', 'Data rekognisi berhasil dikirim');

        return redirect()->to('/mahasiswa/rekognisi/list');
    }

    public function delete($id = null)
    {
        $this->rekognisiModel->delete($id);
        session()->setFlashdata('success', 'Data berhasil dihapus');
        return redirect()->back();
    }

    public function storeAnggota()
    {
        $check = $this->validate([
            'nama_mahasiswa' => 'required',
            'nim' => 'required',
            'kelas' => 'required',
        ]);

        if (!$check) {
            return view('mahasiswa/rekognisi/list', [
                'title' => 'List Rekognisi',
                'validation' => \Config\Services::validation(),
                'page' => 'rekognisi',
            ]);
            // $validation = \Config\Services::validation();
            // return redirect()->back()->withInput()->with('error', $validation->listErrors());
            // return redirect()->back()->withInput();
        }


        $this->rekognisiMahasiswaModel->save([
            'rekognisi_id' => $this->request->getVar('rekognisi_id'),
            'nama_mahasiswa' => $this->request->getVar('nama_mahasiswa'),
            'nim' => $this->request->getVar('nim'),
            'kelas' => $this->request->getVar('kelas'),
        ]);

        session()->setFlashdata('success', 'Anggota Lomba berhasil ditambahkan');

        return redirect()->to('/mahasiswa/rekognisi/list');
    }
    public function print()
    {
    }
}
