<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Datapo extends CI_Controller
{
    public function __construct()
    {
        parent::__construct(); {
            $this->load->model("datapo_model");
                        $this->load->model("detail_model");

                        $this->load->model("transaksi_model");
                        
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
         $this->load->model("Mbarang_model");
        $this->load->model("Supplier_model");
        
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
        $data["mbarang"] = $this->Mbarang_model->getAll();
        $data["supplier"] = $this->Supplier_model->getAll();
         
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
        $tanggal_transaksi = date('Y-m-d',strtotime($_post['tanggal_transaksi']));

        // $no_transaksi = $_POST['no_transaksi'];
        // $tujuan = $_POST['tujuan'];
        // $alamat = $_POST['alamat'];
        // $no_po = $_POST['no_po'];
        $kode_mbarang = $_POST['kode_mbarang'];
        $qty = $_POST['qty'];
        // $satuan = $_POST['satuan'];
        $po = $_POST["no_po"]; 

        // print_r($_POST);
        // exit();


        $data = array();
        $data1 = array();
        $data2 = array(); 
        $stock;
        $kode;
        $qty;
        $index = 0;
        foreach ($kode_mbarang as $key => $data_kode_mbarang) {
            //$jml =$stock = $this->db->get_where('dbarang', ['kode_mbarang' => $kode_mbarang[$key]])->row()->stok;
            // ambil stok berdasar kode_mbarang
            // kurangi stok dengan jumlah input
            // jika nilai pengurangan kurang dari 1 maka proses akan tertolak
            // jika nilai pengurangan lebih dari 1 maka jalankan proses
            array_push($data, array(
               'kode_mbarang' => $kode_mbarang[$key],
               'qty' => $qty[$key],
               // 'satuan' => $satuan[$index],
               'id_data' => $po,
            ));


            array_push($data1, array(
               'kode_mbarang' => $kode_mbarang[$key],
               'tanggal_transaksi' => date('Y-m-d',strtotime($post['tanggal_transaksi'])),
               'qty' => $qty[$key],
               'date_create' => date("Y-m-d H:i:s"),
               'status' => 'keluar',
               
            ));
           
            $kode = $kode_mbarang[$key];
            $stock = $this->db->get_where('dbarang', ['kode_mbarang' => $kode_mbarang[$key]])->row()->stok;
            $tqty = $qty[$key];

                $this->transaksi_model->stok($stock,$kode,$tqty)[$index];

            $index++; 
         }

         $this->db->insert_batch('detail', $data);
         $this->db->insert_batch('transaksi', $data1);
         // echo "<pre>";
         // print_r($jml);
         // echo "</pre>";
         // exit();
         // //$sql = $this->db->insert_batch('detail', $data);
         //$sql1 = $this->db->insert_batch('transaksi', $data1);

        
        $this->transaksi_model->stok($stock,$kode,$tqty); 
        // $this->transaksi_model->stok($data2);
         // if ($sql) {
         //    echo "<script>alert('berhasil')</script>";
         // }else{ 
         //     echo "<script>alert('berhasil')</script>";
         // }

        $post = $this->input->post();
        $this->date_create = date("Y-m-d H:i:s");
        $this->tanggal_transaksi = date('Y-m-d',strtotime($post['tanggal_transaksi']));
        // $this->no_transaksi = $post["no_transaksi"];
        $this->tujuan = $post["tujuan"];
        $this->alamat = $post["alamat"];
        $this->no_po = $post["no_po"];
        $this->status = $post["status"];
        
        

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

     public function edit($id_data = id_data)
    {
       $this->load->model("datapo_model");
         $this->load->model("detail_model");
         $datapo = $this->datapo_model;
         $validation = $this->form_validation;
         $validation->set_rules($datapo->rules());

        if ($validation->run()) {
            $dbarang->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }
        $data['title'] = 'Edit dbarang';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

         $data["datapo"] = $this->datapo_model->getById($id_data);
          $data["detail"] = $this->detail_model->getById($id_data);
        $data["total"] = $this->datapo_model->getKodepo($id_data);
        // $data["dbarang"] = $dbarang->getAll();
        // if (!$data["transaksi"]) show_404();
        $this->load->view("_partials/header", $data);
        $this->load->view("_partials/topbar");
        $this->load->view("_partials/sidebar", $data);
        $this->load->view("administrator/utility", $data);
        $this->load->view("_partials/footer");
    }

}
