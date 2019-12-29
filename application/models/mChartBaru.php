<?php defined('BASEPATH') or exit('No direct script access allowed');

class mChartBaru extends CI_Model
{

    public function get_data()
    {
        $this->db->select('stok, kode_mbarang');
        $result = $this->db->get('dbarang');
        return $result;
    }
}
                        
/* End of file chartBaru.php */
