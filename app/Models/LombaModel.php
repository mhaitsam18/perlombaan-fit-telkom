<?php

namespace App\Models;

use CodeIgniter\Model;

class LombaModel extends Model
{
    protected $table      = 'lomba';

    protected $allowedFields = ['kategori_lomba_id', 'poster', 'title', 'cabang_lomba', 'link', 'teks', 'slug', 'excerpt', 'Penyelenggara', 'Deadline', 'counting_day', 'output'];

    // Dates
    protected $useTimestamps = true;
}
