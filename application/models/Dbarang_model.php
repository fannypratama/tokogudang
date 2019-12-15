<?php defined('BASEPATH') or exit('No direct script access allowed');

class Dbarang_model extends CI_Model
{
    private $_table = "dbarang";

    public $id_dbarang;
    public $kode_mbarang;
    public $kode_supplier;
    public $stok;
    public $status;



    public function rules()
    {
        return [
            [
                'field' => 'stok',
                'label' => 'Stok',
                'rules' => 'required'
            ]


        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_dbarang" => $id])->row();
    }
    public function getByKode($id)
    {
        return $this->db->get_where($this->_table, ["kode_mbarang" => $id])->row();
    }
    public function getDbarang()
    {
        $this->db->select('*');
        $this->db->from('dbarang');
        $this->db->join('mbarang', 'dbarang.kode_mbarang=mbarang.kode_mbarang');
        $this->db->join('supplier', 'dbarang.kode_supplier=supplier.kode_supplier');

        $query = $this->db->get();
        return $query->result();
    }

// public function getKodebarang($kode_mbarang)
//     {
//         return $this->db->get_where('transaksi', array["kode_mbarang" => $kode_mbarang])->row();
//         // $this->db->get_where('transaksi', array('kode_mbarang' => $databarang->kode_mbarang))->row()->qty;

//     }


    public function save()
    {
        $post = $this->input->post();
        $this->kode_mbarang = $post['kode_mbarang'];
        $this->kode_supplier = $post["kode_supplier"];
        $this->stok = $post["stok"];
        $this->status = $post["status"];

        $this->db->insert($this->_table, $this);
    }




    public function update()
    {
        $post = $this->input->post();
        $this->id_dbarang = $post["id"];
        $this->kode_mbarang = $post['kode_mbarang'];
        $this->kode_supplier = $post["kode_supplier"];
        $this->stok = $post["stok"];
        $this->status = $post["status"];

        $this->db->update($this->_table, $this, array('id_dbarang' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_dbarang" => $id));
    }
}
