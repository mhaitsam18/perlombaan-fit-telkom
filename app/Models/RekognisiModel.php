<?php

namespace App\Models;

use CodeIgniter\Model;

class RekognisiModel extends Model
{
    protected $table      = 'rekognisi';

    protected $allowedFields = [];

    // Dates
    protected $useTimestamps = true;
}
