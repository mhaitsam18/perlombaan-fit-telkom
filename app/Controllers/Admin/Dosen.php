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
        session();
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
            'user' => $this->db->table('users')->where(['id' => $dosen['user_id']])->get()
        ]);
    }

    public function update($id = null)
    {
        $check = $this->validate([
            'kode' => 'required|is_unique[dosen.kode,id,{$id}]'
        ]);

        if (!$check) {
            $validation = \Config\Services::validation();

            return redirect()->back()->withInput()->with('validation', $validation);
        }


        $this->dosenModel->save([
            'id' => $id,
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
