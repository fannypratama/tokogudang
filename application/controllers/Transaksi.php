<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("transaksi_model");
        $this->load->library('form_validation'); {
            is_logged_in();
        }
    }


    public function index()
    {
        $data['title'] = 'transaksi';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data["transaksi"] = $this->transaksi_model->getAll();
        $this->load->view('_partials/header.php', $data);
        $this->load->view('_partials/sidebar.php', $data);
        $this->load->view('_partials/topbar.php');
        $this->load->view('administrator/transaksi', $data);
        $this->load->view('_partials/footer.php');
    }

    public function add()
    {
        $this->load->model("Mbarang_model");
        $this->load->model("Supplier_model");
        $transaksi = $this->transaksi_model;
        $validation = $this->form_validation;
        $validation->set_rules($transaksi->rules());

        if ($validation->run()) {
            $transaksi->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }
        $data['title'] = 'Add transaksi';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data["mbarang"] = $this->Mbarang_model->getAll();
        $data["supplier"] = $this->Supplier_model->getAll();
        $data["transaksi"] = $this->transaksi_model->getAll();
        $this->load->view("_partials/header", $data);
        $this->load->view("_partials/topbar");
        $this->load->view("_partials/sidebar", $data);
        $this->load->view("transaksi/new_form");
        $this->load->view("_partials/footer", $data);
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('transaksi');
        $this->load->model("Mbarang_model");
        $this->load->model("Supplier_model");

        $transaksi = $this->transaksi_model;
        $validation = $this->form_validation;
        $validation->set_rules($transaksi->rules());

        if ($validation->run()) {
            $transaksi->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }
        $data['title'] = 'Edit transaksi';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        // $data["mbarang"] = $this->mbarang_model->getAll();
        // $data["supplier"] = $this->supplier_model->getAll();
        $data["transaksi"] = $transaksi->getById($id);
        if (!$data["transaksi"]) show_404();
        $this->load->view("_partials/header", $data);
        $this->load->view("_partials/topbar");
        $this->load->view("_partials/sidebar", $data);
        $this->load->view("transaksi/edit_form", $data);
        $this->load->view("_partials/footer");
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->transaksi_model->delete($id)) {
            redirect(site_url('transaksi'));
        }
    }
}
