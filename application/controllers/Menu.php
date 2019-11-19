<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct(); {
            is_logged_in();
            $this->load->model("Menu_model");
            $this->load->model('Menu_model', 'menu');
        }
    }

    public function index()
    {

        $data['title'] = 'Menu Manajemen';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['menu'] = $this->db->get('user_menu')->result_array();


        $this->form_validation->set_rules('menu', 'Menu', 'required');

        if ($this->form_validation->run() == false) {

            $this->load->view('_partials/header.php', $data);
            $this->load->view('_partials/sidebar.php', $data);
            $this->load->view('_partials/topbar.php');
            $this->load->view('menu/index', $data);
            $this->load->view('_partials/footer.php');
        } else {
            $this->db->insert('user_menu', ['menu' => $this->input->post('menu')]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> New Menu Added </div>');
            redirect('menu');
        }
    }

    public function submenu()
    {

        $data['title'] = 'Sub Menu Manajemen';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();


        $data['subMenu'] = $this->menu->getSubMenu();
        $data['menu'] = $this->db->get('user_menu')->result_array();


        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('menu_id', 'Menu', 'required');
        $this->form_validation->set_rules('url', 'URL', 'required');
        $this->form_validation->set_rules('icon', 'Icon', 'required');


        if ($this->form_validation->run() == false) {

            $this->load->view('_partials/header.php', $data);
            $this->load->view('_partials/sidebar.php', $data);
            $this->load->view('_partials/topbar.php');
            $this->load->view('menu/submenu', $data);
            $this->load->view('_partials/footer.php');
        } else {
            $data = [
                'title' => $this->input->post('title'),
                'menu_id' => $this->input->post('menu_id'),
                'url' => $this->input->post('url'),
                'icon' => $this->input->post('icon'),
                'is_active' => $this->input->post('is_active')
            ];
            $this->db->insert('user_sub_menu', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> New Sub Menu Added </div>');
            redirect('menu/submenu');
        }
    }

    public function update($id = null)
    {
        if (!isset($id)) redirect('admin/product');
        $sm = $this->menu_model;
        $data["user_sub_menu"] = $sm->getById($id);
        if (!$data["user_sub_menu"]) show_404();

        $this->load->view('_partials/header.php');
        $this->load->view('_partials/sidebar.php');
        $this->load->view('_partials/topbar.php');
        $this->load->view("admin/product/edit_form", $data);
        $this->load->view('_partials/footer.php');
    }

    public function delete($id)
    {
        $this->db->delete('user_sub_menu', ['id' => $id]);
        redirect('menu/submenu');
    }
}
