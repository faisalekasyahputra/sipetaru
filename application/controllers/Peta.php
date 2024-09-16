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
        $datacontent['kecamatan'] = $this->Buka_peta->peta('kontur', NULL, NULL, "MultiLineString");
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

    public function tampil($id)
    {
        $geo = $this->Buka_peta->frd('mp_geojson', $id, 'id', null, null);
        $tabel = $geo[0]->Variabel;
        $tipe = $geo[0]->Tipe;
        $kec = $this->Buka_peta->frd($tabel, null, null, null, null);
        $o = array();
        foreach ($kec as $h) {
            $map_nya = array();
            foreach ($h as $key => $val) {
                if ($key != 'Koordinat') {
                    $map = array($key => $val);
                    $map_nya = array_merge($map_nya, $map);
                }
            }

            $geom = array("type" => $tipe, "coordinates" => json_decode($h->Koordinat));
            $has  = array("type" => "Feature", "properties" => $map_nya, "geometry" => $geom);
            array_push($o, $has);
        }

        echo json_encode($o);
    }




    public function tampil1($id)
    {
        $geo = $this->Buka_peta->frd('mp_geojson', $id, 'id', null, null);
        $tabel = $geo[0]->Variabel;
        $tipe = $geo[0]->Tipe;
        $kec = $this->Buka_peta->frd($tabel, '1', 'id', null, null);
        $h = array();
        $pro = array("name" => "Coors Field");
        $geo = array("type" => "Point", "coordinates" => [111.0374407, -6.753482]);

        $pro1 = array("name" => "Coors Field222");
        $geo1 = array("type" => "Point", "coordinates" => [111.0421691, -6.7517479]);

        $has  = array("type" => "Feature", "properties" => $pro, "geometry" => $geo);
        $has1 = array("type" => "Feature", "properties" => $pro1, "geometry" => $geo1);
        array_push($h, $has);
        array_push($h, $has1);
        echo json_encode($h);
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
