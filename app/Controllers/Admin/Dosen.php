<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;


class Dosen extends BaseController
{
    private $db;
    public function __construct()
    {
        $this->db      = \Config\Database::connect();
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
            'dosen' => $this->dosenModel->join('users', 'users.id = dosen.user_id')->where(['dosen.id' => $id])->first(),
        ]);
    }

    public function create()
    {
        return view('admin/dosen/create', [
            'title' => 'Tambah Data Dosen',
            'validation' => \Config\Services::validation(),
            'page' => 'dosen',
        ]);
    }

    public function store()
    {
        $check = $this->validate([
            'kode' => 'required|is_unique[dosen.kode]'
        ]);

        if (!$check) {
            $validation = \Config\Services::validation();

            return redirect()->back()->withInput()->with('validation', $validation);
        }


        $this->dosenModel->save([
            'kode' => $this->request->getVar('kode')
        ]);

        session()->setFlashdata('success', 'Data dosen berhasil ditambahkan');

        return redirect()->to('/admin/dosen');
    }

    public function edit($id)
    {
        $dosen = $this->dosenModel->where(['dosen.id' => $id])->first();
        return view('admin/dosen/edit', [
            'title' => 'Ubah data Dosen',
            'validation' => \Config\Services::validation(),
            'page' => 'dosen',
            'dosen' => $dosen,
            'user' => $this->db->table('users')->where(['id' => $dosen['user_id']])->get()->getRowArray()
        ]);
    }

    public function update($id = null)
    {
        $check = $this->validate([
            'email_telkom' => 'required|is_unique[dosen.email_telkom,id,{$id}]',
            'nama' => 'required',
            'nama_gelar' => 'required',
            'nip' => 'required|is_unique[dosen.nip,id,{$id}]',
            'nidn' => 'required|is_unique[dosen.nidn,id,{$id}]',
            'kode' => 'required|is_unique[dosen.kode,id,{$id}]',
            'telepon' => 'required',
            'alamat' => 'required',
            // 'foto' => 'required',
            'kode' => 'required',
        ]);

        $validation = \Config\Services::validation();
        dd($validation);
        if (!$check) {
            return redirect()->back()->withInput()->with('validation', $validation);
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
            'foto' => $this->request->getVar('foto'),
            'kode' => $this->request->getVar('kode')
        ]);

        session()->setFlashdata('success', 'Data dosen berhasil ditambahkan');

        return redirect()->to('/admin/dosen');
    }

    public function delete($id = null)
    {
        $this->dosenModel->delete($id);
        session()->setFlashdata('success', 'Data dosen berhasil dihapus');
        return redirect()->back();
    }
}
