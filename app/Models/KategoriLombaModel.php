<?php

namespace App\Models;

use CodeIgniter\Model;

class KategoriLombaModel extends Model
{
    protected $table      = 'kategori_lomba';

    protected $allowedFields = ['kategori_indo', 'kategori_inggris', 'slug'];

    // Dates
    protected $useTimestamps = true;
}
