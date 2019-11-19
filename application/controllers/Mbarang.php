<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mbarang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct(); {
            $this->load->model("mbarang_model");
            is_logged_in();
        }
    }

    public function index()
    {

        $data['title'] = 'Master Barang';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data["mbarang"] = $this->mbarang_model->getAll();
        $this->load->view('_partials/header.php', $data);
        $this->load->view('_partials/sidebar.php', $data);
        $this->load->view('_partials/topbar.php');
        $this->load->view('administrator/mbarang', $data);
        $this->load->view('_partials/footer.php');
    }


    public function add()
    {


        $this->load->model("mbarang_model");
        $this->load->model("Kategori_model");
        $mbarang = $this->mbarang_model;
        $validation = $this->form_validation;
        $validation->set_rules($mbarang->rules());

        if ($validation->run()) {
            $mbarang->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }
        $data['title'] = 'Add Master Barang';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();


        $data["kategori"] = $this->Kategori_model->getAll();
        $data["mbarang"] = $this->mbarang_model->getAll();
        $this->load->view("_partials/header", $data);
        $this->load->view("_partials/topbar");
        $this->load->view("_partials/sidebar", $data);
        $this->load->view("mbarang/new_form", $data);
        $this->load->view("_partials/footer", $data);
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('mbarang');

        $this->load->model("Kategori_model");

        $mbarang = $this->mbarang_model;
        // $nama = $this->input->post('nama');
        // $update = array(
        //     'nama' => $nama,
        //     'nama_kategori' => $this->input->post('nama_kategori')
        // );
        // //$this->db->where('id_mbarang', $id);
        // //$this->db->update('mbarang', $update);
        // print_r($update);
        // exit();
        $validation = $this->form_validation;
        $validation->set_rules($mbarang->rules());

        if ($validation->run()) {
            $mbarang->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }
        $data['title'] = 'Edit Master Barang';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        //$data["kategori"] = $this->Kategori_model->getAll();
        $data['kat']     = $this->db->get('kategori')->result_array();
        $kategori = $this->db->get('kategori')->result_array();
        // echo "<pre>";
        // print_r($kategori);
        // echo "</pre>";
        echo json_encode($kategori);
        exit();
        $data["mbarang"] = $mbarang->getById($id);
        if (!$data["mbarang"]) show_404();
        $this->load->view("_partials/header", $data);
        $this->load->view("_partials/topbar");
        $this->load->view("_partials/sidebar", $data);
        $this->load->view("mbarang/edit_form", $data);
        $this->load->view("_partials/footer");
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->mbarang_model->delete($id)) {
            redirect(site_url('mbarang'));
        }
    }

    public function update_data()
    {
        $update = array(
            'id_mbarang'    => $this->input->post('id'),
            'nama'          => $this->input->post('nama'),
            'satuan'        => $this->input->post('satuan'),
            'uraian'        => $this->input->post('uraian')
        );

        echo "update";
        exit();
    }

    public function do_upload()
    {
        $config['upload_path']          = '/upload/mbarang/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 1024;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('foto')) {
            $error = array('error' => $this->upload->display_errors());

            $this->load->view('mbarang/newform', $error);
        } else {
            $data = array('upload_data' => $this->upload->data());

            $this->load->view('administrator/mbarang', $data);
        }
    }
}
