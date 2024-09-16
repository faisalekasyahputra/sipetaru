<?php
ob_start();
defined('BASEPATH') or exit('No direct script access allowed');

class Configur extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Buka_peta');
        date_default_timezone_set('Asia/Jakarta');
    }
    public function index()
    {
        $table = 'jaringan_transportasi';
        $file = $table . '.geojson';
        $filename = base_url() . 'assets/geojson/Peta_Dasar/Administrasi/' . $file;
        $data = file_get_contents($filename); //data read from json file
        $json1 = json_decode($data, TRUE);

        $this->konversi($json1, $table);
    }
    public function index1()
    {
        $table = 'transportasi_pt';
        $file = $table . '.geojson';
        $filename = base_url() . 'assets/geojson/Peta_Dasar/Administrasi/' . $file;
        $data = file_get_contents($filename); //data read from json file
        $json1 = json_decode($data, TRUE);
        foreach ($json1['features'] as $json) {
            $geo = $json['geometry']['coordinates'];
            foreach ($geo as $ge) {
                foreach ($ge as $g) {
                    foreach ($g as $g1) {
                        $hasil1 = [$g1[0]];
                        $hasil2 = [$g1[1]];


                        $has = array($hasil1[0], $hasil2[0], 0.0);
                    }
                }
            }
        }
        //$this->konversi($json1, $table);
    }
    public function konversi($json1, $table)
    {

        $f = $json1['features'][0]['properties'];
        $d_sql = "";
        $arr = array();
        foreach ($f as $key => $val) {
            if ($key != 'Id') {
                $d_sql = $d_sql . "," . $key . " VARCHAR(255) NULL";
            }
            $arr1 = array($key);
            $arr = array_merge($arr, $arr1);
        }
        $this->buat_tabel($d_sql, $json1, $table);
    }
    public function buat_tabel($d_sql, $json1, $table)
    {
        $sql = "CREATE TABLE " . $table . " (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY" . $d_sql . ", Koordinat LONGTEXT NULL)";
        $this->db->query($sql);
        $this->impor($json1, $table);
    }

    public function impor($json1, $table)
    {
        foreach ($json1['features'] as $json) {
            $va = $json['properties'];
            $vg = array('Koordinat' => json_encode($json['geometry']['coordinates']));
            $arr = array();
            foreach ($va as $k => $v) {
                $arr1 = array($k => $v);
                $arr = array_merge($arr, $arr1);
            }
            $arr = array_merge($arr, $vg);
            $this->Buka_peta->insert_data($table, $arr);
        }
        echo "done";
    }



    public function buat_json()
    {
        $string = "layer:pola_ruang";

        // Memecah string menjadi array
        $array = explode(',', $string);
        $obj = new stdClass();

        foreach ($array as $item) {
            list($key, $value) = explode(':', $item);
            $obj->$key = $value;
        }

        // Output: peta0
        echo $obj->layer;
    }

    public function coba_json()
    {



        $sp = $this->Buka_peta->frd('saluran_pembuang', '1', 'id', null, null);
        $desa = $sp[0]->Desa;
        $kecamatan = $sp[0]->Kecamatan;
        $kemantren = $sp[0]->Kemantren;
        $uptd = $sp[0]->UPTD;
        $des = $sp[0]->geojson;
        $trim = trim($des);
        $jml = strlen($trim);
        $des = substr(trim($trim), 0, $jml - 1);
        $json = json_decode($des, true);
        $hasil1 = array("desa_peta" => $json);
        echo json_encode($hasil1);

        echo '<br>-----------------------------------------------------------------------------------<br>';

        $kec = $this->Buka_peta->frd('kecamatan', '1', 'id', null, null);
        $peta_ne = array();
        foreach ($kec as $h) {
            $map_nya = array();
            foreach ($h as $key => $val) {
                if ($key != 'Koordinat') {
                    $map = array($key => $val);
                    $map_nya = array_merge($map_nya, $map);
                }
            }

            $geo = array('type' => 'MultiPolygon', "coordinates" => $h->Koordinat);
            $peta = array('type' => 'Feature', "properties" => $map_nya, "geometry" => $geo);
            array_push($peta_ne, $peta);
        }


        $hasil2 = array("desa_peta" => $peta);
        echo json_encode($hasil2);
    }
}
