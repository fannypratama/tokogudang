<?php    
class Mread extends CI_Model{
    function report(){
        $query = $this->db->query("SELECT SUM(qty) 	AS nilai,kode_mbarang FROM 'transaksi' ");
         
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
}