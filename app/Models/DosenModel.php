<?php

namespace App\Models;

use CodeIgniter\Model;

class DosenModel extends Model
{
    protected $table      = 'dosen';

    protected $allowedFields = ['user_id', 'prodi_id', 'email_telkom', 'nama', 'nama_gelar', 'nip', 'nidn', 'kode', 'telepon', 'alamat', 'foto'];

    // Dates
    protected $useTimestamps = true;
}
