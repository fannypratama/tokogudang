 <?php
    defined('BASEPATH') or exit('No direct script access allowed');

    class Transaksi_Keluar extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->model("transaksi_keluar_model");
            $this->load->model("transaksi_model");
            $this->load->model("mbarang_model");
            $this->load->library('form_validation'); {
                is_logged_in();
            }
        }


        public function index()
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

            $data['title'] = 'Transaksi Keluar';
            $data['user'] = $this->db->get_where('user', ['email' =>
            $this->session->userdata('email')])->row_array();

            $data["mbarang"] = $this->Mbarang_model->getAll();
            $data["supplier"] = $this->Supplier_model->getAll();
            $data["transaksi"] = $this->transaksi_model->getAll();
            $this->load->view('_partials/header.php', $data);
            $this->load->view('_partials/sidebar.php', $data);
            $this->load->view('_partials/topbar.php');
            $this->load->view('administrator/transaksi_keluar', $data);
            $this->load->view('_partials/footer.php');
        }



        public function add_pengganti()
        {
            // $tanggal_transaksi = date('Y-m-d', strtotime(['tanggal_transaksi']));
            $tanggal_transaksi = $_POST['tanggal_transaksi'];

            // $no_transaksi = $_POST['no_transaksi'];
            // $tujuan = $_POST['tujuan'];
            // $alamat = $_POST['alamat'];
            // $no_po = $_POST['no_po'];
            $kode_mbarang = $_POST['kode_mbarang'];
            $qty = $_POST['qty'];
            // $satuan = $_POST['satuan'];
            // $po = $_POST["no_po"];

            // print_r($_POST);
            // exit();


            $data = array();
            // $data2 = array();
            $data1 = array();
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
                    'qty' => $qty[$key]
                    // 'satuan' => $satuan[$index],
                    // 'id_data' => $po,
                ));

                $post = $this->input->post();
                $this->date_create = date("Y-m-d H:i:s");
                $tanggal_transaksi = date('Y-m-d', strtotime($post['tanggal_transaksi']));


                array_push($data1, array(
                    'kode_mbarang' => $kode_mbarang[$key],
                    'tanggal_transaksi' => $tanggal_transaksi,
                    'qty' => $qty[$key],
                    'date_create' => date("Y-m-d H:i:s"),
                    'status' => 'keluar'

                ));

                $kode = $kode_mbarang[$key];
                $stock = $this->db->get_where('dbarang', ['kode_mbarang' => $kode_mbarang[$key]])->row()->stok;
                $tqty = $qty[$key];

                $this->transaksi_keluar_model->stok($stock, $kode, $tqty)[$index];
                // $datapo = $this->datapo_model;
                // $validation = $this->form_validation;
                // $validation->set_rules($datapo->rules());
                // if ($validation->run()) {
                //     // $this->transaksi_model->stok($stock, $kode, $tqty)[$index];
                //     $this->session->set_flashdata('success', 'Berhasil disimpan');
                // }

                $index++;
            }

            if ($qty < $stock) {            
                // $this->db->insert_batch('detail', $data);
                $this->db->insert_batch('transaksi', $data1);
            }


            // echo "<pre>";
            // print_r($jml);
            // echo "</pre>";
            // exit();
            // //$sql = $this->db->insert_batch('detail', $data);
            //$sql1 = $this->db->insert_batch('transaksi', $data1);


            $this->transaksi_keluar_model->stok($stock, $kode, $tqty);
            // $this->transaksi_model->stok($data2);
            // if ($sql) {
            //    echo "<script>alert('berhasil')</script>";
            // }else{ 
            //     echo "<script>alert('berhasil')</script>";
            // }

            // $post = $this->input->post();
            // $this->date_create = date("Y-m-d H:i:s");
            // $this->tanggal_transaksi = date('Y-m-d', strtotime($post['tanggal_transaksi']));
            // $this->no_transaksi = $post["no_transaksi"];
            // // $this->kode_mbarang = $post["kode_mbarang"];
            // // $this->tujuan = $post["tujuan"];
            // // $this->alamat = $post["alamat"];
            // // $this->no_po = $post["no_po"];
            // $this->status = $post["status"];


            // $this->db->insert('transaksi', $this);
            // $this->db->insert_batch('transaksi', $data);
            redirect('transaksi_keluar');
        }



        public function edit($id = null)
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
            $this->load->view("transaksi/edit", $data);
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
    }
