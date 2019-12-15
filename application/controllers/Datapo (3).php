<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Datapo extends CI_Controller
{
    public function __construct()
    {
        parent::__construct(); {
            $this->load->model("datapo_model");
                        $this->load->model("detail_model");
            is_logged_in();
        }
    }

    public function index()
    {

        $data['title'] = 'Data PO';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data["datapo"] = $this->datapo_model->getAll();
        $this->load->view('_partials/header.php', $data);
        $this->load->view('_partials/sidebar.php', $data);
        $this->load->view('_partials/topbar.php');
        $this->load->view('administrator/datapo', $data);
        $this->load->view('_partials/footer.php');
    }


     public function add()
     {

         $this->load->model("datapo_model");
         $this->load->model("transaksi_model");
         $datapo = $this->datapo_model;
         $validation = $this->form_validation;
         $validation->set_rules($datapo->rules());

         if ($validation->run()) {
             $datapo->save();
             $this->session->set_flashdata('success', 'Berhasil disimpan');
         }
         $data['title'] = 'Add Data Po';
         $data['user'] = $this->db->get_where('user', ['email' =>
         $this->session->userdata('email')])->row_array();
        $data['gp'] =  $this->db->get("detail")->result();

         // $data["kategori"] = $this->Kategori_model->getAll();
         $data["datapo"] = $this->datapo_model->getAll();
          $data["transaksi"] = $this->transaksi_model->getAll();
         $this->load->view("_partials/header", $data);
         $this->load->view("_partials/topbar");
         $this->load->view("_partials/sidebar", $data);
         $this->load->view("datapo/formbaru", $data);
         $this->load->view("_partials/footer", $data);
     }
       public function detail($id)
     {


         $this->load->model("datapo_model");
         $this->load->model("detail_model");
         $datapo = $this->datapo_model;
         $validation = $this->form_validation;
         $validation->set_rules($datapo->rules());

         if ($validation->run()) {
             $datapo->save();
             $this->session->set_flashdata('success', 'Berhasil disimpan');
         }
         $data['title'] = 'Detail Transaksi PO';
         $data['user'] = $this->db->get_where('user', ['email' =>
         $this->session->userdata('email')])->row_array();


         // $data["kategori"] = $this->Kategori_model->getAll();
         $data["datapo"] = $this->datapo_model->getAll();
          $data["detail"] = $this->detail_model->getById($id);
         $this->load->view("_partials/header", $data);
         $this->load->view("_partials/topbar");
         $this->load->view("_partials/sidebar", $data);
         $this->load->view("datapo/detail", $data);
         $this->load->view("_partials/footer", $data);
     }

       public function add_po(){
        // $tanggal_transaksi = $_POST['tanggal_transaksi'];
        // $no_transaksi = $_POST['no_transaksi'];
        // $tujuan = $_POST['tujuan'];
        // $alamat = $_POST['alamat'];
        // $no_po = $_POST['no_po'];
        $item = $_POST['item'];
        $qty = $_POST['qty'];
        $satuan = $_POST['satuan'];
        $po = $_POST["no_po"];

        $data = array();

        $index = 0;
        foreach ($item as $data_item) {
           array_push($data, array(
               'item' => $item[$index],
               'qty' => $qty[$index],
               'satuan' => $satuan[$index],
               'id_data' => $po,
            ));
            $index++;
         }
         $sql = $this->db->insert_batch('detail', $data);

         // if ($sql) {
         //    echo "<script>alert('berhasil')</script>";
         // }else{
         //     echo "<script>alert('berhasil')</script>";
         // }

             $post = $this->input->post();
        $this->tanggal_transaksi = $post['tanggal_transaksi'];
        $this->no_transaksi = $post["no_transaksi"];
        $this->tujuan = $post["tujuan"];
        $this->alamat = $post["alamat"];
        $this->no_po = $post["no_po"];

    $sql = $this->db->insert('datapo', $this);
       redirect('datapo');
       }
    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->datapo_model->delete($id) && $this->detail_model->delete($id)) {
            redirect('datapo');
        }
        redirect('datapo');
    }   
}