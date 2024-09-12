
<?php
class Buka_peta extends CI_Model
{
    public function frd($tablename, $args, $field, $field_order, $order)
    {
        if ($args != NULL) {
            $this->db->where([$field => $args]);
        }
        if ($order != null) {
            $this->db->order_by($field_order, $order);
        }
        $query = $this->db->get($tablename);
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return NULL;
        }
    }
    public function insert_data($tablename, $arg1)
    {
        $this->db->insert($tablename, $arg1);
        if ($this->db->affected_rows() > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
    public function peta($table, $arg, $field, $tipe)
    {
        $hasil = $this->frd($table, $arg, $field, null, null);
        $utama = "";
        $myObj = new stdClass();
        $myawal = new stdClass();
        $mygeo = new stdClass();
        $mygeo->type = $tipe;
        if ($hasil != NULL) {
            foreach ($hasil as $has) {
                foreach ($has as $key => $val) {
                    if ($key != 'Koordinat') {
                        $myObj->$key = $val;
                    }
                }
                $mygeo->coordinates = json_decode($has->Koordinat, TRUE);
                $myawal->type = "Feature";
                $myawal->properties = $myObj;
                $myawal->geometry = $mygeo;
                $utama = $utama . json_encode($myawal) . ',';
            }
        } else {
            $utama = NULL;
        }
        return $utama;
    }
}
