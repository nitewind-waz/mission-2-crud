<?php

namespace App\Models;
use CodeIgniter\Model;

class BiodataMahasiswa extends Model
{
    protected $table = 'biodata';
    protected $primaryKey = 'nim';
    protected $allowedFields = ['nim','nama_lengkap', 'jenis_kelamin', 'tanggal_lahir'];

}