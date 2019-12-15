<?php defined('BASEPATH') or exit('No direct script access allowed');

class detail_model extends CI_Model
{
    private $_table = "detail";

	public $id_detail;   
    public $item;
    public $qty;
    public $satuan;
    
     public function rules()
    {
        return [
            [
                'field' => 'id_detail',
                'label' => 'id_detail',
                'rules' => 'required'
            ]
            // [
            //     'kode_mbarang',
            //     'Kode Mbarang',
            //     'required|trim|is_unique[transaksi.kode_mbarang]',

            // ]


        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_data" => $id])->result();
    }
      public function delete($id)
    {
        $this->_delete($id);
        return $this->db->delete($this->_table, array("id_data" => $id));
    }



    
}    
