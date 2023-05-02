<?php

namespace App\Controllers;

use App\Controllers\BaseController;



class User extends BaseController
{


    public function index()
    {
        if (in_groups('admin')) {
            return redirect()->to(route_to('admin-index'));
        }
        if (in_groups('user')) {
            return redirect()->to(route_to('home-beranda'));
        }
        if (in_groups('guest')) {
            return redirect()->to(route_to('home-beranda'));
        }
        if (in_groups('dosen')) {
            return redirect()->to(route_to('admin-index'));
        }
        if (in_groups('prodi')) {
            return redirect()->to(route_to('admin-index'));
        }
        if (in_groups('mahasiswa')) {
            return redirect()->to(route_to('home-beranda'));
        }
        return view('home/index', [
            'title' => 'Beranda',
            'page' => 'beranda'
        ]);
    }

    public function admin()
    {
        return view('admin/index', [
            'title' => 'Dashboard Admin',
            'page' => 'Dashboard',
        ]);
    }
}
