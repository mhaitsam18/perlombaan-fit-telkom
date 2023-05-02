<?php

namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    protected $table      = 'mahasiswa';

    protected $allowedFields = ['user_id', 'nim', 'kelas', 'prodi_id'];

    // Dates
    protected $useTimestamps = true;
}
