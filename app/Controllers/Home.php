<?php

namespace App\Controllers;

use App\Models\BiodataModel;
use App\Models\PendidikanModel;
use App\Models\PengalamanModel;
use App\Models\KeahlianModel;
use App\Models\PortofolioModel;

class Home extends BaseController
{
    // ID Biodata utama Anda. 
    protected $id_biodata = 1;

    protected $biodataModel;
    protected $pendidikanModel;
    protected $pengalamanModel;
    protected $keahlianModel;
    protected $portofolioModel;

    public function __construct()
    {
        $this->biodataModel = new BiodataModel();
        $this->pendidikanModel = new PendidikanModel();
        $this->pengalamanModel = new PengalamanModel();
        $this->keahlianModel = new KeahlianModel();
        $this->portofolioModel = new PortofolioModel();
    }

    public function index()
    {
        // Ambil semua data yang dibutuhkan
        $biodata = $this->biodataModel->find($this->id_biodata);
        $pendidikan = $this->pendidikanModel->where('id_biodata', $this->id_biodata)->orderBy('tahun_selesai', 'DESC')->findAll();
        $pengalaman = $this->pengalamanModel->where('id_biodata', $this->id_biodata)->orderBy('tahun_selesai', 'DESC')->findAll();
        $keahlian = $this->keahlianModel->where('id_biodata', $this->id_biodata)->orderBy('level', 'DESC')->findAll();
        $portofolio = $this->portofolioModel->where('id_biodata', $this->id_biodata)->findAll();

        $data = [
            'title' => 'Home',
            'biodata' => $biodata,
            'pendidikan' => $pendidikan,
            'pengalaman' => $pengalaman,
            'keahlian' => $keahlian,
            'portofolio' => $portofolio
        ];

        // Kirim semua data ke satu view
        return view('cv/index', $data);
    }
}