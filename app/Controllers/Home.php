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
        // $data_lomba = $this->lombaModel->select('lomba.*, kategori_indo')->join('kategori_lomba', 'kategori_lomba.id=lomba.kategori_lomba_id')->paginate(8, 'lomba');
        $data_lomba = $this->lombaModel
            ->select('lomba.*, kategori_indo')
            ->join('kategori_lomba', 'kategori_lomba.id=lomba.kategori_lomba_id')
            ->orderBy('lomba.id', 'desc')
            ->paginate(10, 'lomba');
        $data_kategori_lomba = $this->kategoriLombaModel->findAll();
        return view('home/perlombaan', [
            'title' => 'Perlombaan',
            'page' => 'perlombaan',
            'pager' => $this->lombaModel->pager,
            'data_lomba' => $data_lomba,
            'data_kategori_lomba' => $data_kategori_lomba,
        ]);
    }
    public function detail_perlombaan($slug)
    {
        $lomba = $this->lombaModel->where('slug', $slug)->first();
        return view('home/detail-perlombaan', [
            'title' => 'Detail Perlombaan',
            'page' => 'perlombaan',
            'lomba' => $lomba,
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
            'page' => 'informasi-dosen',
            'data_dosen' => $this->dosenModel->findAll()
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
