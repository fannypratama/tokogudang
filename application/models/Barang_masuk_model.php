<?php defined('BASEPATH') or exit('No direct script access allowed');

class Barang_masuk_model extends CI_Model
{
    private $_table = "data_barang_masuk";

    public $id_barang_masuk;
    public $tanggal;
    public $supplier;
    public $lokasi;
    public $kode_barang;
    public $nama_barang;
    public $satuan;
    public $jumlah;

    public function rules()
    {
        return [
            [
                'field' => 'supplier',
                'label' => 'Supplier',
                'rules' => 'required'
            ],

            [
                'field' => 'kode_barang',
                'label' => 'Kode_barang',
                'rules' => 'numeric'
            ],

            [
                'field' => 'jumlah',
                'label' => 'Jumlah',
                'rules' => 'numeric'
            ]
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_barang_masuk" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_barang_masuk = uniqid();
        $this->tanggal = $post["tanggal"];
        $this->supplier = $post["supplier"];
        $this->lokasi = $post["lokasi"];
        $this->kode_barang = $post["kode_barang"];
        $this->nama_barang = $post["nama_barang"];
        $this->satuan = $post["satuan"];
        $this->jumlah = $post["jumlah"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_barang_masuk = $post["id"];
        $this->tanggal = $post["tanggal"];
        $this->supplier = $post["supplier"];
        $this->lokasi = $post["lokasi"];
        $this->kode_barang = $post["kode_barang"];
        $this->nama_barang = $post["nama_barang"];
        $this->satuan = $post["satuan"];
        $this->jumlah = $post["jumlah"];
        $this->db->update($this->_table, $this, array('id_barang_masuk' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_barang_masuk" => $id));
    }
}
