<?php

namespace App\Models;

use CodeIgniter\Model;

class LombaModel extends Model
{
    protected $table      = 'lomba';

    protected $allowedFields = ['poster', 'title', 'link', 'teks', 'slug', 'Penyelenggara', 'Deadline', 'counting_day', 'output'];

    // Dates
    protected $useTimestamps = true;
}
