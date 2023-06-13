<?php

namespace App\Models;

use CodeIgniter\Model;

class RekognisiMahasiswaModel extends Model
{
    protected $table      = 'rekognisi_mahasiswa';

    protected $allowedFields = ['rekognisi_id', 'nama_mahasiswa', 'nim', 'kelas'];

    // Dates
    protected $useTimestamps = true;
}
