<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;


class Mahasiswa extends BaseController
{
    protected $validation;
    public function __construct()
    {
        $this->db = \Config\Database::connect();

        $this->validation = \Config\Services::validation();
    }


    public function index()
    {
        $data_mahasiswa = $this->mahasiswaModel->findAll();
        return view('admin/mahasiswa/index', [
            'title' => 'Data Mahasiswa',
            'page' => 'mahasiswa',
            'data_mahasiswa' => $data_mahasiswa,
        ]);
    }

    public function show($id = null)
    {
        return view('admin/mahasiswa/show', [
            'title' => 'Detail Mahasiswa',
            'page' => 'mahasiswa',
            'mahasiswa' => $this->mahasiswaModel->find($id),
        ]);
    }

    public function create()
    {
        return view('admin/mahasiswa/create', [
            'title' => 'Tambah Data Mahasiswa',
            'validation' => \Config\Services::validation(),
            'error' => \Config\Services::validation(),
            'page' => 'mahasiswa',
        ]);
    }

    public function store()
    {
        $check = $this->validate([
            'email_telkom' => 'required|is_unique[mahasiswa.email_telkom]',
            'nama' => 'required',
            'nim' => 'required|numeric|is_unique[mahasiswa.nim]',
            'kelas' => 'required',
            'foto' => 'uploaded[foto]|is_image[foto]',
        ]);



        if (!$check) {
            return view('admin/mahasiswa/create', [
                'title' => 'Tambah Data Mahasiswa',
                'validation' => \Config\Services::validation(),
                'page' => 'mahasiswa',
            ]);
            // $validation = \Config\Services::validation();
            // return redirect()->back()->withInput()->with('error', $validation->listErrors());
            // return redirect()->back()->withInput();
        }

        $file = $this->request->getFile('foto');
        $nama_file = $file->getRandomName();
        $file->move('assets/img/mahasiswa');
        $nama_file = 'mahasiswa/' . $nama_file;





        $this->mahasiswaModel->save([
            'email_telkom' => $this->request->getVar('email_telkom'),
            'nama' => $this->request->getVar('nama'),
            'nim' => $this->request->getVar('nim'),
            'kelas' => $this->request->getVar('kelas'),
            'foto' => $nama_file,
            'prodi_id' => $this->request->getVar('prodi_id'),
        ]);

        session()->setFlashdata('success', 'Data mahasiswa berhasil ditambahkan');

        return redirect()->to('/admin/mahasiswa');
    }

    public function edit($id)
    {
        $mahasiswa = $this->mahasiswaModel->find($id);
        return view('admin/mahasiswa/edit', [
            'title' => 'Ubah data Mahasiswa',
            'validation' => $this->validation,
            'page' => 'mahasiswa',
            'mahasiswa' => $mahasiswa,
            'user' => $this->db->table('users')->where(['id' => $mahasiswa['user_id']])->get()->getRowArray()
        ]);
    }

    public function update($id = null)
    {
        $check = $this->validate([
            'email_telkom' => 'required|is_unique[mahasiswa.email_telkom,id,{id}]',
            'nama' => 'required',
            'nim' => 'required|numeric|is_unique[mahasiswa.nim,id,{id}]',
            'kelas' => 'required',
            'foto' => 'is_image[foto]',
        ]);
        $validation = \Config\Services::validation();
        // dd($validation);
        if (!$check) {
            // return redirect()->back()->withInput()->with('validation', $validation);
            $mahasiswa = $this->mahasiswaModel->find($this->request->getVar('id'));
            return view('admin/mahasiswa/edit', [
                'title' => 'Ubah data mahasiswa',
                'validation' => $validation,
                'page' => 'mahasiswa',
                'mahasiswa' => $mahasiswa,
                'user' => $this->db->table('users')->where(['id' => $mahasiswa['user_id']])->get()->getRowArray()
            ]);
        }


        $file = $this->request->getFile('foto');

        if ($file->getError() == 4) {
            $nama_file = $this->request->getVar('fotoLama');
        } else {
            $nama_file = $file->getRandomName();
            $file->move('assets/img/mahasiswa');
            $nama_file = 'mahasiswa/' . $nama_file;
        }


        $this->mahasiswaModel->save([
            'id' => $id,
            'prodi_id' => $this->request->getVar('prodi_id'),
            'email_telkom' => $this->request->getVar('email_telkom'),
            'nama' => $this->request->getVar('nama'),
            'nim' => $this->request->getVar('nim'),
            'kelas' => $this->request->getVar('kelas'),
            'foto' => $nama_file,
        ]);

        session()->setFlashdata('success', 'Data mahasiswa berhasil diubah');

        return redirect()->to('/admin/mahasiswa');
    }

    public function delete($id = null)
    {
        $this->mahasiswaModel->delete($id);
        session()->setFlashdata('success', 'Data mahasiswa berhasil dihapus');
        return redirect()->back();
    }
}
