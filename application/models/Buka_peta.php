
<?php
class Buka_peta extends CI_Model
{
 public function frd($tablename, $args,$field)
    {
        if ($args != NULL)
        {
            $this->db->where([$field => $args]);
            $query = $this->db->get($tablename);
        }
        else
        {
            $query = $this->db->get($tablename);
        }

        if ($query->num_rows() > 0)
        {
            return $query->result();
        }
        else
        {
            return NULL;
        }
    }
    public function titik_pju($args,$field,$tablename){
        $bendung =$this->frd($tablename,$args,$field);
		$ben = '';
        if ($bendung != null) {
            foreach($bendung as $b) {
                $koor = $b->LONG.','.$b->LAT;
                $ordi = number_format($b->LAT,5).', '.number_format($b->LONG,5);
                $ben = $ben.'{
                    "type": "Feature","properties": {"Kode":"'.$b->Kode.'","Nama Ruas":"'.$b->Nama_Ruas.'","Koordinat":"'.$ordi.'","Foto":"'.$b->Dokumentasi.'","show_on_map": true},
                    "geometry": {"type": "Point","coordinates": ['.$koor.'] }
                },';
            }
        }else{
            $ben = NULL;
        }
        return $ben;
    }

    public function titik_meteran($args,$field,$tablename){
        $bendung =$this->frd($tablename,$args,$field);
		$ben = '';
        if ($bendung != null) {
            foreach($bendung as $b) {
                $koor = $b->Long.','.$b->Lat;
                $ordi = number_format((float)$b->Long,5).','.number_format((float)$b->Lat,5);
                $ben = $ben.'{
                    "type": "Feature","properties": {"Kode":"'.$b->Kode_Meteran.'","Koordinat":"'.$ordi.'","Foto1":"'.$b->Dokumentasi1.'","Foto2":"'.$b->Dokumentasi2.'","show_on_map": true},
                    "geometry": {"type": "Point","coordinates": ['.$koor.'] }
                },';
            }
        }else{
            $ben = NULL;
        }
        return $ben;
    }

}



