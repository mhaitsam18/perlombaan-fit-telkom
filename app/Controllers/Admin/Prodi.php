<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;


class Prodi extends BaseController
{
    protected $validation;
    public function __construct()
    {
        $this->db = \Config\Database::connect();

        $this->validation = \Config\Services::validation();
    }


    public function index()
    {
        $data_prodi = $this->prodiModel->findAll();
        return view('admin/prodi/index', [
            'title' => 'Data prodi',
            'page' => 'prodi',
            'data_prodi' => $data_prodi,
        ]);
    }

    public function show($id = null)
    {
        return view('admin/prodi/show', [
            'title' => 'Detail prodi',
            'page' => 'prodi',
            'prodi' => $this->prodiModel->find($id),
        ]);
    }

    public function create()
    {
        return view('admin/prodi/create', [
            'title' => 'Tambah Data prodi',
            'validation' => \Config\Services::validation(),
            'error' => \Config\Services::validation(),
            'page' => 'prodi',
        ]);
    }

    public function store()
    {
        $check = $this->validate([
            'kode' => 'required|is_unique[prodi.kode]',
            'singkatan' => 'required|is_unique[prodi.singkatan]',
            'nama' => 'required|is_unique[prodi.nama]',
            'keterangan' => 'required'
        ]);



        if (!$check) {
            return view('admin/prodi/create', [
                'title' => 'Tambah Data prodi',
                'validation' => \Config\Services::validation(),
                'page' => 'prodi',
            ]);
            // $validation = \Config\Services::validation();
            // return redirect()->back()->withInput()->with('error', $validation->listErrors());
            // return redirect()->back()->withInput();
        }

        $this->prodiModel->save([
            'kode' => $this->request->getVar('kode'),
            'singkatan' => $this->request->getVar('singkatan'),
            'nama' => $this->request->getVar('nama'),
            'keterangan' => $this->request->getVar('keterangan')
        ]);

        session()->setFlashdata('success', 'Data prodi berhasil ditambahkan');

        return redirect()->to('/admin/prodi');
    }

    public function edit($id)
    {
        $prodi = $this->prodiModel->find($id);
        return view('admin/prodi/edit', [
            'title' => 'Ubah data prodi',
            'validation' => $this->validation,
            'page' => 'prodi',
            'prodi' => $prodi,
        ]);
    }

    public function update($id = null)
    {
        $check = $this->validate([
            'kode' => 'required|is_unique[prodi.kode,id,{id}]',
            'singkatan' => 'required|is_unique[prodi.singkatan,id,{id}]',
            'nama' => 'required|is_unique[prodi.nama,id,{id}]',
            'keterangan' => 'required',
        ]);
        $validation = \Config\Services::validation();
        // dd($validation);
        if (!$check) {
            // return redirect()->back()->withInput()->with('validation', $validation);
            $prodi = $this->prodiModel->find($this->request->getVar('id'));
            return view('admin/prodi/edit', [
                'title' => 'Ubah data prodi',
                'validation' => $validation,
                'page' => 'prodi',
                'prodi' => $prodi,
            ]);
        }

        $this->prodiModel->save([
            'id' => $id,
            'kode' => $this->request->getVar('kode'),
            'singkatan' => $this->request->getVar('singkatan'),
            'nama' => $this->request->getVar('nama'),
            'keterangan' => $this->request->getVar('keterangan')
        ]);

        session()->setFlashdata('success', 'Data prodi berhasil diubah');

        return redirect()->to('/admin/prodi');
    }

    public function delete($id = null)
    {
        $this->prodiModel->delete($id);
        session()->setFlashdata('success', 'Data prodi berhasil dihapus');
        return redirect()->back();
    }
}
