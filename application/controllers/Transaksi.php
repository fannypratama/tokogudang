<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("transaksi_model");
        $this->load->model("mbarang_model");
        $this->load->model("supplier_model");
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
        $data["mbarang"] = $this->mbarang_model->getAll();
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
        $this->load->view("administrator/refound");
        $this->load->view("_partials/footer", $data);
    }
    public function edit($id = null)
    {
        if (!isset($id)) redirect('transaksi');
        $this->load->model("Mbarang_model");
        $this->load->model("Supplier_model");
        $this->load->model("Transaksi_model");
        $transaksi = $this->transaksi_model;
        $validation = $this->form_validation;
        $validation->set_rules($transaksi->rules());

        if ($validation->run()) {
            $dbarang->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }
        $data['title'] = 'Edit dbarang';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data["mbarang"] = $this->mbarang_model->getAll();
        $data["supplier"] = $this->supplier_model->getAll();
        $data["transaksi"] = $this->transaksi_model->getById($id);
        
        // $data["dbarang"] = $dbarang->getAll();
        // if (!$data["transaksi"]) show_404();
        $this->load->view("_partials/header", $data);
        $this->load->view("_partials/topbar");
        $this->load->view("_partials/sidebar", $data);
        $this->load->view("administrator/utility", $data);
        $this->load->view("_partials/footer");
    }

    public function editplus($id = 0)
    {

        $this->load->model("Mbarang_model");
        $this->load->model("Supplier_model");
        $transaksi = $this->transaksi_model;
        $validation = $this->form_validation;
        $validation->set_rules($transaksi->rules());

        if ($validation->run()) {
            $transaksi->updateplus();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }
        $data['title'] = 'Edit transaksi';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data["mbarang"] = $this->Mbarang_model->getAll();
        $data["supplier"] = $this->Supplier_model->getAll();
        $data["transaksi"] = $transaksi->getById($id);
        if (!$data["transaksi"]) show_404();
        $this->load->view("_partials/header", $data);
        $this->load->view("_partials/topbar");
        $this->load->view("_partials/sidebar", $data);
        $this->load->view("transaksi/edit_form", $data);
        $this->load->view("_partials/footer");
    }


    public function editminus($id = 0)
    {
        // $where = array('id_transaksi' => $id_ts);
        // $data['transaksi'] = $this->transaksi_model->edit_data($where, 'transaksi')->result();
        // $this->load->view("_partials/header", $data);
        // $this->load->view("_partials/topbar");
        // $this->load->view("_partials/sidebar", $data);
        // $this->load->view("transaksi/edit_form", $data);
        // $this->load->view("_partials/footer");
        // $barang = $this->input->post('kode_mbarang'); 
        // $barang_keluar = $this->input->post('qty');
        // $jumlah_barang_tbbarang = $this->transaksi_model->getById($barang);
        // $total = $jumlah_barang_tbbarang['qty'] - $barang_keluar;

        // if($barang_keluar > $jumlah_barang_tbbarang){
        //     echo "stok ktrbatas";
        // }else{
        //     $transaksi->update();
        //     $this->session->set_flashdata('success', 'Berhasil disimpan');
        // }



        // if (!isset($id)) redirect('transaksi');
        $this->load->model("Mbarang_model");
        $this->load->model("Supplier_model");
        $transaksi = $this->transaksi_model;
        $validation = $this->form_validation;
        $validation->set_rules($transaksi->rules());

        if ($validation->run()) {
            $transaksi->updateminus();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }
        $data['title'] = 'Edit transaksi';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data["mbarang"] = $this->Mbarang_model->getAll();
        $data["supplier"] = $this->Supplier_model->getAll();
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


    // function update()
    // {
    //     $id_transaksi = $this->input->post('id_transaksi');
    //     $jumlah_barang_asli = $this->input->post('jumlah_barang_asli');
    //     $keluar = $this->input->post('keluar');

    //     $total = $jumlah_barang_asli - $keluar;

    //     $data = array(
    //         'id_transaksi' => $id_transaksi,
    //         'qty' => $total
    //     );

    //     $where = array(
    //         'id_transaksi' => $id_transaksi
    //     );

    //     if ($keluar > $jumlah_barang_asli) {
    //         echo "<script type=\"text/javascript\">alert('Stok terbatas');</script>";
    //         header('Location: edit/' . $id_transaksi);
    //         // window . location . href = 'http://www.google.com';
    //     } else {
    //         $this->baruModel->update_data($where, $data, 'transaksi');
    //         redirect('Transaksi');
    //     }
    // }

    public function print($id)
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
        $data['title'] = 'Edit';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data["mbarang"] = $this->Mbarang_model->getAll();
        $data["supplier"] = $this->Supplier_model->getAll();
        $data["transaksi"] = $transaksi->getById($id);
        if (!$data["transaksi"]) show_404();
        $this->load->view("_partials/header", $data);
        $this->load->view("_partials/topbar");
        $this->load->view("_partials/sidebar", $data);
        $this->load->view("administrator/utility", $data);
        $this->load->view("_partials/footer"); 
    }
}
