<?php

namespace App\Models;

use CodeIgniter\Model;

class shoes extends Model
{
    protected $table = 'separu';
    protected $useTimestamps = true;
    protected $allowedFields = ['name', 'price', 'img'];
}
