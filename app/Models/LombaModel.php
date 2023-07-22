<?php

namespace App\Models;

use CodeIgniter\Model;
use Tatter\Relations\Traits\ModelTrait;


class LombaModel extends Model
{
    protected $table      = 'lomba';

    protected $allowedFields = ['kategori_lomba_id', 'poster', 'Title', 'cabang_lomba', 'link', 'teks', 'slug', 'excerpt', 'Penyelenggara', 'Deadline', 'counting_day', 'output'];

    // Dates
    protected $useTimestamps = true;

    public function getKategoriLomba($kategori_lomba_id)
    {
        $kategoriLombaModel = new KategoriLombaModel();
        return $kategoriLombaModel->find($kategori_lomba_id);
    }

    public function getJoinKategoriLomba()
    {
        // return $this->join('f')->all();
    }

    //ary
    public function getLombaAktif()
    {
        return $this->where('kategori_lomba_id', '>', 0)->findAll();
    }

    public function getLombaTidakAktif()
    {
        return $this->where('kategori_lomba_id', 0)->findAll();
    }
    //ary
}
