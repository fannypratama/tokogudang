<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dbarang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("dbarang_model");
        $this->load->model("supplier_model");
        $this->load->model("mbarang_model");
        $this->load->model("transaksi_model");
        $this->load->model("dbarang_model", "mbarang");
        $this->load->library('form_validation'); {
            is_logged_in();
        }
    }


    public function index()
    {
        $data['title'] = 'dbarang';


        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data["supplier"] = $this->supplier_model->getAll();
        $data["dbarang"] = $this->dbarang_model->getDbarang();
        $data['mbarang'] = $this->db->get('mbarang')->result_array();
        $this->load->view('_partials/header.php', $data);
        $this->load->view('_partials/sidebar.php', $data);
        $this->load->view('_partials/topbar.php');
        $this->load->view('administrator/dbarang', $data);
        $this->load->view('_partials/footer.php');
    }

    public function add()
    {
        $this->load->model("Mbarang_model");
        $this->load->model("transaksi_model");
        $this->load->model("Supplier_model");
        $dbarang = $this->dbarang_model;
        $validation = $this->form_validation;
        $validation->set_rules($dbarang->rules());

        if ($validation->run()) {
            $dbarang->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }
        $data['title'] = 'Add dbarang';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data["mbarang"] = $this->Mbarang_model->getAll();
        $data["supplier"] = $this->Supplier_model->getAll();
        $data["dbarang"] = $this->dbarang_model->getAll();
        $this->load->view("_partials/header", $data);
        $this->load->view("_partials/topbar");
        $this->load->view("_partials/sidebar", $data);
        $this->load->view("dbarang/new_form");
        $this->load->view("_partials/footer", $data);
    }

    public function edit($kode_mbarang = null)
    {
        if (!isset($kode_mbarang)) redirect('dbarang');
        $this->load->model("Mbarang_model");
        $this->load->model("Supplier_model");
        $this->load->model("Transaksi_model");
        $dbarang = $this->dbarang_model;
        $validation = $this->form_validation;
        $validation->set_rules($dbarang->rules());

        if ($validation->run()) {
            $dbarang->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }
        $data['title'] = 'Edit dbarang';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data["mbarang"] = $this->mbarang_model->getAll();
        $data["transaksi"] = $this->transaksi_model->getKodebarang($kode_mbarang);
        $data["supplier"] = $this->supplier_model->getAll();
        $data["dbarang"] = $dbarang->getById($kode_mbarang);
        if (!$data["dbarang"]) show_404();
        $this->load->view("_partials/header", $data);
        $this->load->view("_partials/topbar");
        $this->load->view("_partials/sidebar", $data);
        $this->load->view("dbarang/edit_form", $data);
        $this->load->view("_partials/footer");
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404(); 

        if ($this->kategori_model->delete($id)) {
            redirect(site_url('dbarang'));
        }
    }
}
