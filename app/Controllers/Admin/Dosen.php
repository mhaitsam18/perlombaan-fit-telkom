<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;


class Dosen extends BaseController
{
    protected $validation;
    public function __construct()
    {
        $this->db = \Config\Database::connect();

        $this->validation = \Config\Services::validation();
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

    public function show($id = null)
    {
        return view('admin/dosen/show', [
            'title' => 'Detail Dosen',
            'page' => 'dosen',
            'dosen' => $this->dosenModel->find($id),
        ]);
    }

    public function create()
    {
        return view('admin/dosen/create', [
            'title' => 'Tambah Data Dosen',
            'validation' => \Config\Services::validation(),
            'error' => \Config\Services::validation(),
            'page' => 'dosen',
        ]);
    }

    public function store()
    {
        $check = $this->validate([
            'email_telkom' => 'required|is_unique[dosen.email_telkom]',
            'nama' => 'required',
            'nama_gelar' => 'required',
            'nip' => 'required|is_unique[dosen.nip]',
            'nidn' => 'required|is_unique[dosen.nidn]',
            'kode' => 'required|is_unique[dosen.kode]',
            'telepon' => 'required',
            'alamat' => 'required',
            'foto' => 'uploaded[foto]|is_image[foto]',
        ]);



        if (!$check) {
            return view('admin/dosen/create', [
                'title' => 'Tambah Data Dosen',
                'validation' => \Config\Services::validation(),
                'page' => 'dosen',
            ]);
            // $validation = \Config\Services::validation();
            // return redirect()->back()->withInput()->with('error', $validation->listErrors());
            // return redirect()->back()->withInput();
        }

        $file = $this->request->getFile('foto');
        $nama_file = $file->getRandomName();
        $file->move('assets/img/dosen', $nama_file);
        $nama_file = 'dosen/' . $nama_file;

        $this->dosenModel->save([
            'prodi_id' => $this->request->getVar('prodi_id'),
            'email_telkom' => $this->request->getVar('email_telkom'),
            'nama' => $this->request->getVar('nama'),
            'nama_gelar' => $this->request->getVar('nama_gelar'),
            'nip' => $this->request->getVar('nip'),
            'nidn' => $this->request->getVar('nidn'),
            'kode' => $this->request->getVar('kode'),
            'telepon' => $this->request->getVar('telepon'),
            'alamat' => $this->request->getVar('alamat'),
            'foto' => $nama_file,
            'kode' => $this->request->getVar('kode')
        ]);

        session()->setFlashdata('success', 'Data dosen berhasil ditambahkan');

        return redirect()->to('/admin/dosen');
    }

    public function edit($id)
    {
        $dosen = $this->dosenModel->find($id);
        return view('admin/dosen/edit', [
            'title' => 'Ubah data Dosen',
            'validation' => $this->validation,
            'page' => 'dosen',
            'dosen' => $dosen,
            // 'user' => $this->db->table('users')->where(['id' => $dosen['user_id']])->get()->getRowArray()
        ]);
    }

    public function update($id = null)
    {
        $check = $this->validate([
            'email_telkom' => 'required|is_unique[dosen.email_telkom,id,{id}]',
            'nama' => 'required',
            'nama_gelar' => 'required',
            'nip' => 'required|numeric|is_unique[dosen.nip,id,{id}]',
            'nidn' => 'required|numeric|is_unique[dosen.nidn,id,{id}]',
            'kode' => 'required|is_unique[dosen.kode,id,{id}]',
            'telepon' => 'required',
            'alamat' => 'required',
            'foto' => 'is_image[foto]',
        ]);
        $validation = \Config\Services::validation();
        // dd($validation);
        if (!$check) {
            // return redirect()->back()->withInput()->with('validation', $validation);
            $dosen = $this->dosenModel->find($this->request->getVar('id'));
            return view('admin/dosen/edit', [
                'title' => 'Ubah data Dosen',
                'validation' => $validation,
                'page' => 'dosen',
                'dosen' => $dosen,
                'user' => $this->db->table('users')->where(['id' => $dosen['user_id']])->get()->getRowArray()
            ]);
        }


        $file = $this->request->getFile('foto');

        if ($file->getError() == 4) {
            $nama_file = $this->request->getVar('fotoLama');
        } else {
            $nama_file = $file->getRandomName();
            $file->move('assets/img/dosen');
            $nama_file = 'dosen/' . $nama_file;
        }


        $this->dosenModel->save([
            'id' => $id,
            'prodi_id' => $this->request->getVar('prodi_id'),
            'email_telkom' => $this->request->getVar('email_telkom'),
            'nama' => $this->request->getVar('nama'),
            'nama_gelar' => $this->request->getVar('nama_gelar'),
            'nip' => $this->request->getVar('nip'),
            'nidn' => $this->request->getVar('nidn'),
            'kode' => $this->request->getVar('kode'),
            'telepon' => $this->request->getVar('telepon'),
            'alamat' => $this->request->getVar('alamat'),
            'foto' => $nama_file,
            'kode' => $this->request->getVar('kode')
        ]);

        session()->setFlashdata('success', 'Data dosen berhasil diubah');

        return redirect()->to('/admin/dosen');
    }

    public function delete($id = null)
    {
        $this->dosenModel->delete($id);
        session()->setFlashdata('success', 'Data dosen berhasil dihapus');
        return redirect()->back();
    }
}
