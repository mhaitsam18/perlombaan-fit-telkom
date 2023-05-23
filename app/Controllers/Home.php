<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('home/index', [
            'title' => 'Beranda',
            'page' => 'beranda'
        ]);
    }
    public function perlombaan()
    {
        $data_lomba = $this->lombaModel->findAll();
        $data_kategori_lomba = $this->kategoriLombaModel->findAll();
        return view('home/perlombaan', [
            'title' => 'Perlombaan',
            'page' => 'perlombaan',
            'data_lomba' => $data_lomba,
            'data_kategori_lomba' => $data_kategori_lomba,
        ]);
    }
    public function tentang_kami()
    {
        return view('home/tentang-kami', [
            'title' => 'Tentang Kami',
            'page' => 'tentang-kami'
        ]);
    }
    public function faq()
    {
        return view('home/faq', [
            'title' => 'F A Q',
            'page' => 'faq'
        ]);
    }
    public function kontak_kami()
    {
        return view('home/kontak-kami', [
            'title' => 'Kontak Kami',
            'page' => 'kontak-kami'
        ]);
    }
    public function informasi_dosen()
    {
        return view('home/informasi-dosen', [
            'title' => 'Informasi Dosen',
            'page' => 'informasi-dosen'
        ]);
    }
    public function validasi_lomba()
    {
        return view('home/validasi-lomba', [
            'title' => 'Validasi Lomba',
            'page' => 'validasi-lomba'
        ]);
    }
}
