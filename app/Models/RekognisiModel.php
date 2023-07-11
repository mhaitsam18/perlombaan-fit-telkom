<?php

namespace App\Models;

use CodeIgniter\Model;

class RekognisiModel extends Model
{
    protected $table      = 'rekognisi';

    protected $allowedFields = ['user_id', 'nama_lomba', 'nama_ketua', 'nim', 'nama_pembimbing', 'kelas', 'email', 'sertifikat', 'status', 'prestasi', 'note'];

    // Dates
    protected $useTimestamps = true;
}
