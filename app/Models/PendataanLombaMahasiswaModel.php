<?php

namespace App\Models;

use CodeIgniter\Model;

class PendataanLombaMahasiswaModel extends Model
{
    protected $table      = 'pendataan_lomba_mahasiswa';

    protected $allowedFields = ['pendataan_lomba_id', 'nama_mahasiswa', 'nim', 'kelas'];

    // Dates
    protected $useTimestamps = true;
}
