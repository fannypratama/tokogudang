<?php defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi_model extends CI_Model
{
    private $_table = "transaksi";

    public $id_transaksi;
    public $date_create;
    public $tanggal_transaksi;
    public $no_transaksi;
    public $qty;
    public $kode_mbarang;
    public $kode_supplier;
    public $status;


    public function rules()
    {
        return [
            [
                'field' => 'qty',
                'label' => 'qty',
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
        return $this->db->get_where($this->_table, ["id_transaksi" => $id])->row();
    }


    public function save()
    {
        $post = $this->input->post();
        $this->date_create = date("Y-m-d H:i:s");
        $this->tanggal_transaksi = $post['tanggal_transaksi'];
        $this->no_transaksi = $post["no_transaksi"];
        $this->qty = $post["qty"];
        $this->kode_mbarang = $post["kode_mbarang"];
        $this->kode_supplier = $post["kode_supplier"];
        $this->status = $post["status"];
        $this->db->insert($this->_table, $this);
    }

// function transaksi untuk melakukan transaksi pengambilan dan pemasukan barang
    public function transaksi()
    {
        $post = $this->input->post();
        //variabel array untuk mengambil nilai dari inputan ui,
        $data['nama'] => $post['nama_barang'];
        $data['nilai'] => $this->nilai => $post['nilai'];
        //------------------------------------//
        // variabel chekign untuk mengabil data yang seusai dengan nama  
        $cheking = $this->db->get_where($this->_table, ["nama_barang"] => $data['nama'])->row();
        // ngecek data dari tabel ts apakah ada apa tidak! kalau ada langsung eksekusi yang ada di dalam if! 
        if ($cheking) {
            // untuk memasukan barang yang sudah ada, dalam penjumlahan!
            if ($this->uri->segment(2) == "masuk") {
                $jumlah = $cheking + $data['nilai'];   
                $nilai = $this->niali => $jumlah;                   
                $this->db->update($this->_table, $jumlah, ['nama_barang' => $data['nama']]);
            // untuk memasukan barang yang sudah ada, dalam pengurangan!
            }else if ($this->uri->segment(2) == "tarik") {
                $jumlah = $cheking - $data['nilai'];
                $nilai = $this->niali => $jumlah;              
                $this->db->update($this->_table, $nilai, ['nama_barang' => $data['nama']]);
            }
            // komdisi yang di dalam else di lakukan jika nama yang di cari tidak ada!
        }else{
            $this->db->insert($this->_table, $data);
        }
    }

    public function update()
    {
        $post = $this->input->post();
        $this->date_create = time();
        $this->tanggal_transaksi = $post['tanggal_transaksi'];
        $this->no_transaksi = $post["no_transaksi"];
        $this->qty = $post["qty"];
        $this->kode_mbarang = $post["kode_mbarang"];
        $this->kode_supplier = $post["kode_supplier"];
        $this->status = $post["status"];

        $this->db->update($this->_table, $this, array('id_transaksi' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_transaksi" => $id));
    }
}
