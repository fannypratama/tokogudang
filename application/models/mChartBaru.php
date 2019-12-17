<?php defined('BASEPATH') or exit('No direct script access allowed');

class mChartBaru extends CI_Model
{

    public function get_data()
    {
        $this->db->select('barang_masuk, barang_keluar, bulan');
        $result = $this->db->get('chart');
        return $result;
    }
}
                        
/* End of file chartBaru.php */
