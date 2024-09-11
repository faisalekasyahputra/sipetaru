<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Peta extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Buka_peta');
        date_default_timezone_set('Asia/Jakarta');
    }
    public function index()
    {
        $datacontent['title'] = "PJU Kabupaten Kotawaringin Barat";
        $data['content'] = $this->load->view('main', $datacontent, TRUE);
        $this->load->view('index', $data);
    }
    public function peta($peta)
    {
        if ($peta == 1) {
            $jns = 'Peta Dasar';
        } elseif ($peta == 2) {
            $jns = 'Peta Tematik';
        } elseif ($peta == 3) {
            $jns = 'Peta Rencana';
        } elseif ($peta == 4) {
            $jns = 'Pola Ruang';
        }
        $datacontent['peta'] = $this->Buka_peta->frd('mp_layer', $peta, 'Kelompok', null, null);
        $datacontent['title'] = "Peta";
        $datacontent['jns'] = $jns;
        $data['content'] = $this->load->view('peta/peta', $datacontent, TRUE);
        $this->load->view('petalayout', $data);
    }
    public function masuk()
    {
        $datacontent['title'] = "Masuk Admin";
        $data['content'] = $this->load->view('login/login', $datacontent, TRUE);
        $this->load->view('index', $data);
    }

    public function data_pju()
    {
        $datacontent['title'] = "Data PJU";
        $data['content'] = $this->load->view('pju', $datacontent, TRUE);
        $data['pju'] = $this->Buka_peta->frd('tb_pju', NULL, NULL);
        $this->load->view('pju', $data);
    }
    public function detail($id)
    {
        $datacontent['title'] = "Detail";
        $data['pju'] = $this->Buka_peta->frd('tb_pju', $id, 'Kode');
        $data['peta'] = $this->Buka_peta->titik_pju($id, 'Kode', 'tb_pju');
        $data['content'] = $this->load->view('detail', $datacontent, TRUE);

        $this->load->view('detail', $data);
    }

    public function statistik()
    {
        $datacontent['title'] = "Statistik";
        $data['content'] = $this->load->view('statistik/stat', $datacontent, TRUE);
        $this->load->view('index', $data);
    }
}
