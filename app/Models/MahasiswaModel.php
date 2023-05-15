<?php

namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    protected $table      = 'mahasiswa';

    protected $allowedFields = ['user_id', 'nama', 'nim', 'kelas', 'email_telkom', 'prodi_id'];

    // Dates
    protected $useTimestamps = true;
}
