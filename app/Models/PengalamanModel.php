<?php

namespace App\Models;

use CodeIgniter\Model;

class PengalamanModel extends Model
{
    protected $table = 'pengalaman';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id_biodata', 'posisi', 'nama_perusahaan', 'tipe', 'tahun_mulai', 'tahun_selesai', 'deskripsi'];
}