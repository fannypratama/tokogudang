<?php defined('BASEPATH') or exit('No direct script access allowed');

class Mbarang_model extends CI_Model
{
    private $_table = "mbarang";

    public $id_mbarang;
    public $kode_mbarang;
    public $nama;
    public $satuan;
    public $uraian;
    public $nama_kategori;
    public $foto;




    public function rules()
    {
        return [
            [
                'field' => 'nama',
                'label' => 'Nama Barang',
                'rules' => 'required'
            ],
            [
                'field' => 'satuan',
                'label' => 'Satuan',
                'rules' => 'required'
            ],
            [
                'field' => 'nama_kategori',
                'label' => 'Nama Kategori',
                'rules' => 'required'
            ],


        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_mbarang" => $id])->row();
    }



    public function save()
    {
        $post = $this->input->post();
        $this->kode_mbarang = $post['kode_mbarang'];
        $this->nama = $post["nama"];
        $this->satuan = $post["satuan"];
        $this->uraian = $post["uraian"];
        $this->nama_kategori = $post["nama_kategori"];
        $this->foto = $this->_uploadImage();



        $this->db->insert($this->_table, $this);
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

        if (!empty($_FILES["foto"]["name"])) {
            $this->foto = $this->_uploadImage();
        } else {
            $this->foto = $post["old_foto"];
        }

        $this->db->update($this->_table, $this, array('id_mbarang' => $post['id']));
    }

    public function update_barang_keluar()
    {
        $this->qty = $post["qty"];

        $this->db->update($this->_table, $this, array('qty' => $post['qty']));
    }

    public function delete($id)
    {
        $this->_deleteImage($id);
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

    private function _deleteImage($id)
    {
        $masterbarang = $this->getById($id);
        if ($masterbarang->foto != "default.jpg") {
            $filename = explode(".", $masterbarang->foto)[0];
            return array_map('unlink', glob(FCPATH . "./upload/product/$filename.*"));
        }
    }
}
