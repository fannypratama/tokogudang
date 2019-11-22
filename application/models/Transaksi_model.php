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
         $data['nama_barang'] = $post['nama_barang'];
        $data['nilai'] = $post['nilai'];
        $transaksi = $this->db->get_where($this->_table, ['nama_barang' => $data['nama_barang']])->row_array();
        if ($transaksi == null) {
            $this->nilai = $post['nilai'];
            $this->nama_barang = $post['nama_barang'];
            $this->db->insert($this->_table, $this);
        } else {
            // $angka = 
            // $transaksi->nilai +
            // $post['nilai'];

            // $this->db->update($this->_table, $langkah, array('nama_barang' => $post['nama_barang']));
             var_dump($transaksi['nilai']);
            $angka = 
            $transaksi['nilai'] +
            $post['nilai'];
            $nilai = [
                'nilai' => $angka
            ];
            $this->db->update($this->_table, $nilai, ['nama_barang' => $post['nama_barang']]);
        }

    }



    public function update()
    {
        $post = $this->input->post();
        $this->id_ts = $post["id"];
        $this->nama_barang = $post["nama_barang"];
        $this->nilai = $post["nilai"];
       

        // if (!empty($_FILES["image"]["name"])) {
        //     $this->image = $this->_uploadImage();
        // } else {
        //     $this->image = $post["old_image"];
        // }

        // $this->db->update($this->_table, $this, array('id_ts' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_ts" => $id));
    }

    // private function _uploadImage()
    // {

    //     $config['upload_path']          = './upload/ts';
    //     $config['allowed_types']        = 'jpg|png|gif';
    //     $config['file_name']            = $this->id_ts;
    //     $config['overwrite']            = true;
    //     $config['max_size']             = 10240; // 1MB
    //     // $config['max_width']            = 1024;
    //     // $config['max_height']           = 768;

    //     $this->load->library('upload', $config);
    //     $this->upload->initialize($config);
    //     if ($this->upload->do_upload('foto')) {
    //         return $this->upload->data("file_name");
    //     }
    //     print_r($this->upload->display_errors());

    //     return "default.jpg";
    // }
}
