<?php

namespace App\Models;

use CodeIgniter\Model;

class PendataanLombaModel extends Model
{
    protected $table      = 'pendataan_lomba';

    protected $allowedFields = ['user_id', 'nama_lomba', 'nama_ketua', 'nim', 'nama_pembimbing', 'kelas', 'email', 'sertifikat', 'status'];

    // Dates
    protected $useTimestamps = true;
}
