<?php defined('BASEPATH') or exit('No direct script access allowed');

class Supplier_model extends CI_Model
{
    private $_table = "supplier";

    public $id_supplier;
    public $kode_supplier;
    public $nama_supplier;
    public $alamat;
    public $kota;


    public function rules()
    {
        return [
            [
                'field' => 'nama_supplier',
                'label' => 'Nama Supplier',
                'rules' => 'required'
            ],
            [
                'field' => 'alamat',
                'label' => 'Kota Supplier',
                'rules' => 'required'
            ],
            [
                'field' => 'kota',
                'label' => 'Kota Supplier',
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
        return $this->db->get_where($this->_table, ["id_supplier" => $id])->row();
    }


    public function save()
    {
        $post = $this->input->post();
        $this->kode_supplier = $post['kode_supplier'];
        $this->nama_supplier = $post["nama_supplier"];
        $this->alamat = $post["alamat"];
        $this->kota = $post["kota"];
        $this->db->insert($this->_table, $this);
    }




    public function update()
    {
        $post = $this->input->post();
        $this->id_supplier = $post["id"];
        $this->kode_supplier = $post["kode_supplier"];
        $this->nama_supplier = $post["nama_supplier"];
        $this->alamat = $post["alamat"];
        $this->kota = $post["kota"];

        $this->db->update($this->_table, $this, array('id_supplier' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_supplier" => $id));
    }
}
