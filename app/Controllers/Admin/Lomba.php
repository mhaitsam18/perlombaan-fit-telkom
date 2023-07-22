<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;


class Lomba extends BaseController
{
    protected $validation;
    public function __construct()
    {
        $this->db = \Config\Database::connect();

        $this->validation = \Config\Services::validation();
    }


    public function index()
    {
        $data_lomba = $this->lombaModel->findAll();
        return view('admin/lomba/index', [
            'title' => 'Data lomba',
            'page' => 'lomba',
            'data_lomba' => $data_lomba,
        ]);
    }

    public function show($id = null)
    {
        return view('admin/lomba/show', [
            'title' => 'Detail lomba',
            'page' => 'lomba',
            'lomba' => $this->lombaModel->find($id),
        ]);
    }

    public function create()
    {
        return view('admin/lomba/create', [
            'title' => 'Tambah Data lomba',
            'validation' => \Config\Services::validation(),
            'error' => \Config\Services::validation(),
            'page' => 'lomba',
        ]);
    }
    public function store()
    {
        $check = $this->validate([
            'Title' => 'required',
            'link' => 'required',
            'teks' => 'required',
            'slug' => 'required|is_unique[lomba.slug]',
            'Penyelenggara' => 'required',
            'Deadline' => 'required',
            // 'counting_day' => 'required',
            'poster' => 'uploaded[poster]|is_image[poster]',
            // 'output' => 'required',
        ]);



        if (!$check) {
            return view('admin/lomba/create', [
                'title' => 'Tambah Data lomba',
                'validation' => \Config\Services::validation(),
                'page' => 'lomba',
            ]);
        }

        $file = $this->request->getFile('poster');
        $nama_file = $file->getRandomName();
        $file->move('assets/img/lomba', $nama_file);
        $nama_file = 'lomba/' . $nama_file;

        // $slug = url_title($this->request->getVar('Title'), "-", true);
        $this->lombaModel->save([
            'Title' => $this->request->getVar('Title'),
            'cabang_lomba' => $this->request->getVar('cabang_lomba'),
            'link' => $this->request->getVar('link'),
            'teks' => $this->request->getVar('teks'),
            // 'slug' => $slug,
            'slug' => $this->request->getVar('slug'),
            'Penyelenggara' => $this->request->getVar('Penyelenggara'),
            'Deadline' => $this->request->getVar('Deadline'),
            'counting_day' => $this->request->getVar('counting_day'),
            'poster' => $nama_file,
            'kategori_lomba_id' => '1',
            'output' => $this->request->getVar('output'),
        ]);

        session()->setFlashdata('success', 'Data lomba berhasil ditambahkan');

        return redirect()->to('/admin/lomba');
    }

    //ary
    public function nonaktifkan($id)
    {
        // Logika untuk nonaktifkan lomba
        // Misalnya, mengubah nilai kolom "kategori_lomba_id" menjadi 0 pada lomba yang sudah ada

        // Contoh kode:
        $lombaModel = new \App\Models\LombaModel();
        $lomba = $lombaModel->find($id);

        if ($lomba) {
            $lomba['kategori_lomba_id'] = 0;
            $lombaModel->save($lomba);

            // Hapus data dari lomba yang aktif
            $lombaModel->delete($id);

            // Tambahkan data ke lomba yang sudah tidak aktif
            $lombaNonaktifModel = new \App\Models\LombaModel();
            $lombaNonaktifModel->insert($lomba);

            // Redirect atau tampilkan pesan sukses
            session()->setFlashdata('success', 'Lomba berhasil dinonaktifkan.');
        } else {
            // Redirect atau tampilkan pesan error jika lomba tidak ditemukan
            session()->setFlashdata('error', 'Lomba tidak ditemukan.');
        }

        return redirect()->to('/admin/lomba');
    }

    public function aktifkan($id)
    {
        // Logika untuk mengaktifkan kembali lomba yang sudah tidak aktif
        // Misalnya, mengubah nilai kolom "kategori_lomba_id" menjadi 1 pada lomba yang sudah tidak aktif

        // Contoh kode:
        $lombaAktifModel = new \App\Models\LombaModel();
        $lomba = $lombaAktifModel->find($id);

        if ($lomba) {
            $lomba['kategori_lomba_id'] = 1;
            $lombaAktifModel->save($lomba);

            // Hapus data dari lomba yang sudah tidak aktif
            $lombaAktifModel->delete($id);

            // Tambahkan data ke lomba yang aktif
            $lombaModel = new \App\Models\LombaModel();
            $lombaModel->insert($lomba);

            // Redirect atau tampilkan pesan sukses
            session()->setFlashdata('success', 'Lomba berhasil diaktifkan kembali.');
        } else {
            // Redirect atau tampilkan pesan error jika lomba tidak ditemukan
            session()->setFlashdata('error', 'Lomba tidak ditemukan.');
        }

        return redirect()->to('/admin/lomba');
    }





    //ary

    public function edit($id)
    {
        $lomba = $this->lombaModel->find($id);
        return view('admin/lomba/edit', [
            'title' => 'Ubah data lomba',
            'validation' => $this->validation,
            'page' => 'lomba',
            'lomba' => $lomba
        ]);
    }

    public function update($id = null)
    {
        $check = $this->validate([
            'Title' => 'required',
            'link' => 'required',
            'teks' => 'required',
            'slug' => 'required|is_unique[lomba.slug,id,{id}]',
            'Penyelenggara' => 'required',
            'Deadline' => 'required',
            // 'counting_day' => 'required',
            'poster' => 'is_image[poster]',
            // 'output' => 'required',
        ]);
        $validation = \Config\Services::validation();
        if (!$check) {
            $lomba = $this->lombaModel->find($this->request->getVar('id'));
            return view('admin/lomba/edit', [
                'title' => 'Ubah data lomba',
                'validation' => $validation,
                'page' => 'lomba',
                'lomba' => $lomba,
            ]);
        }


        $file = $this->request->getFile('poster');

        if ($file->getError() == 4) {
            $nama_file = $this->request->getVar('posterLama');
        } else {
            $nama_file = $file->getRandomName();
            $file->move('assets/img/lomba');
            $nama_file = 'lomba/' . $nama_file;
        }

        $this->lombaModel->save([
            'id' => $id,
            'Title' => $this->request->getVar('Title'),
            'link' => $this->request->getVar('link'),
            'teks' => $this->request->getVar('teks'),
            'slug' => $this->request->getVar('slug'),
            'Penyelenggara' => $this->request->getVar('Penyelenggara'),
            'Deadline' => $this->request->getVar('Deadline'),
            // 'counting_day' => $this->request->getVar('counting_day'),
            'poster' => $nama_file,
            // 'output' => $this->request->getVar('output'),
        ]);

        session()->setFlashdata('success', 'Data lomba berhasil diubah');

        return redirect()->to('/admin/lomba');
    }

    public function delete($id = null)
    {
        $this->lombaModel->delete($id);
        session()->setFlashdata('success', 'Data lomba berhasil dihapus');
        return redirect()->back();
    }
}
