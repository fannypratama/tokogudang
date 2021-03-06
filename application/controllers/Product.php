<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Product extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("product_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["product"] = $this->product_model->getAll();
        $this->load->view("_partials/header");
        $this->load->view("_partials/topbar");
        $this->load->view("_partials/sidebar");
        $this->load->view("admin/product/list", $data);
        $this->load->view("_partials/footer");
    }

    public function add()
    {
        $product = $this->product_model;
        $validation = $this->form_validation;
        $validation->set_rules($product->rules());

        if ($validation->run()) {
            $product->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }
        $this->load->view("_partials/header");
        $this->load->view("_partials/topbar");
        $this->load->view("_partials/sidebar");
        $this->load->view("admin/product/new_form");
        $this->load->view("_partials/footer");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/products');

        $product = $this->product_model;
        $validation = $this->form_validation;
        $validation->set_rules($product->rules());

        if ($validation->run()) {
            $product->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["product"] = $product->getById($id);
        if (!$data["product"]) show_404();
        $this->load->view("_partials/header");
        $this->load->view("_partials/topbar");
        $this->load->view("_partials/sidebar");
        $this->load->view("admin/product/edit_form", $data);
        $this->load->view("_partials/footer");
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->product_model->delete($id)) {
            redirect(site_url('product'));
        }
    }
}
