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
        $table = 'kecamatan';
        $file = $table . '.geojson';
        $filename = base_url() . 'assets/geojson/Peta_Dasar/Administrasi/' . $file;
        $data = file_get_contents($filename); //data read from json file
        $json1 = json_decode($data, TRUE);

        $this->konversi($json1, $table);
    }
    public function konversi($json1, $table)
    {

        $f = $json1['features'][0]['properties'];
        $d_sql = "";
        $arr = array();
        foreach ($f as $key => $val) {
            $d_sql = $d_sql . "," . $key . " VARCHAR(255) NULL";
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
        $myObj = new stdClass();
        $myObj->type = "Feature";
        $myJSON = json_encode($myObj);
        echo $myJSON;
    }
}
