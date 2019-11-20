<?php defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi_model extends CI_Model
{
    private $_table = "ts";

    public $id_ts;
    public $nama_barang;
    public $nilai;
   




    public function rules()
    {
        return [
            [
                'field' => 'nilai',
                'label' => 'Nilai',
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
        return $this->db->get_where($this->_table, ["id_ts" => $id])->row();
    }



    public function save()
    {
        $post = $this->input->post();
        $this->nama_barang = $post['nama_barang'];
        $transaksi = $this->db->get_where($this->_table, ['nama_barang' => $this->nama_barang])->result();
        if ($transaksi == null) {
            $this->nilai = $post['nilai'];
            $this->nama_barang = $post['nama_barang'];
            $this->db->insert($this->_table, $this);
        } else {
            var_dump($transaksi->nilai);
            // $angka = 
            // $transaksi->nilai +
            // $post['nilai'];

            // $this->db->update($this->_table, $langkah, array('nama_barang' => $post['nama_barang']));
        }

    }



    public function update()
    {
        $post = $this->input->post();
        $this->id_mbarang = $post["id"];
        $this->kode_mbarang = $post["kode_mbarang"];
        $this->nama = $post["nama"];
        $this->satuan = $post["satuan"];
        $this->uraian = $post["uraian"];
        $this->nama_kategori = $post["nama_kategori"];

        if (!empty($_FILES["image"]["name"])) {
            $this->image = $this->_uploadImage();
        } else {
            $this->image = $post["old_image"];
        }

        $this->db->update($this->_table, $this, array('id_mbarang' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_mbarang" => $id));
    }

    private function _uploadImage()
    {

        $config['upload_path']          = './upload/mbarang';
        $config['allowed_types']        = 'jpg|png|gif';
        $config['file_name']            = $this->id_mbarang;
        $config['overwrite']            = true;
        $config['max_size']             = 10240; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if ($this->upload->do_upload('foto')) {
            return $this->upload->data("file_name");
        }
        print_r($this->upload->display_errors());

        return "default.jpg";
    }
}
