<?php

namespace App\Models;

use CodeIgniter\Model;

class PortofolioModel extends Model
{
    protected $table = 'portofolio';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id_biodata', 'nama_proyek', 'link_proyek', 'gambar_proyek', 'deskripsi'];
}