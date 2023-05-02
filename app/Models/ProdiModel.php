<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdiModel extends Model
{
    protected $table      = 'prodi';

    protected $allowedFields = ['user_id', 'kode', 'singkatan', 'user_image', 'nama', 'keterangan'];

    // Dates
    protected $useTimestamps = true;
}
