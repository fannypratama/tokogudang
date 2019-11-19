<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Barangmasuk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("barang_masuk_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["barang_masuk"] = $this->barang_masuk_model->getAll();
        $this->load->view("_partials/header");
        $this->load->view("_partials/topbar");
        $this->load->view("_partials/sidebar");
        $this->load->view("admin/barang/list", $data);
        $this->load->view("_partials/footer");
    }

    public function add()
    {
        $barang_masuk = $this->barang_masuk_model;
        $validation = $this->form_validation;
        $validation->set_rules($barang_masuk->rules());

        if ($validation->run()) {
            $barang_masuk->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }
        $this->load->view("_partials/header");
        $this->load->view("_partials/topbar");
        $this->load->view("_partials/sidebar");
        $this->load->view("admin/barang/new_form");
        $this->load->view("_partials/footer");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/barangmasuk');

        $barang_masuk = $this->barang_masuk_model;
        $validation = $this->form_validation;
        $validation->set_rules($barang_masuk->rules());

        if ($validation->run()) {
            $barang_masuk->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["barang_masuk"] = $barang_masuk->getById($id);
        if (!$data["barang_masuk"]) show_404();
        $this->load->view("_partials/header");
        $this->load->view("_partials/topbar");
        $this->load->view("_partials/sidebar");
        $this->load->view("admin/barang/edit_form", $data);
        $this->load->view("_partials/footer");
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->barang_masuk_model->delete($id)) {
            redirect(site_url('admin/barangmasuk'));
        }
    }
}
