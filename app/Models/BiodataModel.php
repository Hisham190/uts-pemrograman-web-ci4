<?php

namespace App\Models;

use CodeIgniter\Model;

class BiodataModel extends Model
{
    protected $table = 'biodata';
    protected $primaryKey = 'id';
    protected $returnType = 'object'; 
    protected $allowedFields = ['nama_lengkap', 'foto', 'jabatan_singkat', 'ringkasan_profil', 'email', 'no_hp', 'alamat', 'linkedin', 'github', 'instagram'];
}