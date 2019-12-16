 <?php defined('BASEPATH') or exit('No direct script access allowed');


class Transaksi_keluar_model extends CI_Model
{
    private $_table = "transaksi";


    public $id_transaksi;
    public $date_create;
    public $tanggal_transaksi;
    public $no_transaksi;
    public $qty;
    public $kode_mbarang;
    public $kode_supplier;
    public $status;


    public function rules()
    {
        return [
            [
                'field' => 'qty',
                'label' => 'qty',
                'rules' => 'required'
            ]
            // [
            //     'kode_mbarang',
            //     'Kode Mbarang',
            //     'required|trim|is_unique[transaksi.kode_mbarang]',

            // ]


        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_transaksi" => $id])->result();
    }

    public function save_batch($data){
        return $this->db->insert_batch('detail', $data);
    }

    public function getJumlah()
    {
        $query = "SELECT sum (if(kode_mbarang = kode_mbarang, qty, NULL)) as qty FROM transaksi";


        return  $this->db->query($query)->result_array();
    }

    public function getKodebarang($kode_mbarang)
    {
        return $this->db->get_where($this->_table,["kode_mbarang" => $kode_mbarang])->row();

    }


    public function save()
    {
        $post = $this->input->post();
         
          $this->date_create = date("Y-m-d H:i:s");
        $this->tanggal_transaksi = date('Y-m-d',strtotime($post['tanggal_transaksi']));
        $this->no_transaksi = $post["no_transaksi"];
        $this->qty = $post["qty"];
        $this->kode_mbarang = $post["kode_mbarang"];
        $this->kode_supplier = $post["kode_supplier"];
        $this->status = $post["status"];
       

        $this->db->insert($this->_table, $this);

        return $this->db->get_where($this->_table, ["no_transaksi" => $post["no_transaksi"]])->row();

        $data[] = [        
            $this->kode_mbarang = $post["kode_mbarang"],  
            $this->qty = $post["qty"],
            // $this->satuan = $post["satuan"],
            $this->stok = $post["qty"]
        ];
            $this->db->insert_batch('detail', $data);
    }

        
    
        

public function stok($data, $kode, $qty)
    {
        $post = $this->input->post();
        // if ($post["status"] === "masuk") {

        //     $stok = $data + $post['qty'];

        //     $data = [
        //         'kode_supplier' => $post["kode_supplier"],
        //         'stok' => $stok
        //     ];

        //     $this->db->update('dbarang', $data, ['kode_mbarang' => $kode]);
        // } else
        if ($post["status"] === "keluar") {
            
            $stok = (int)$data - (int)$qty; 

            $data = [
                'stok' => $stok,
                'status' => 'ADA'
            ];

            $result = $this->db->update('dbarang', $data, ['kode_mbarang' => $kode]);

            echo $result ? 'true' : 'false';
        }
        //  elseif ($post["status"] === "refund") {
        //     $refund = $this->db->get_where($this->_table, ["no_transaksi" => $post['no_transaksi']])->row()->qty;
        //     $stok = $data - $refund;

        //     $nilai = $stok + $post['qty'];

        //     $data = [
        //         'stok' => $nilai
        //     ];

        //     $this->db->update('dbarang', $data, ['kode_mbarang' => $kode_mbarang]);
        // }
    }
 
    public function update()
    {

        $post = $this->input->post();
        $this->id_transaksi = $post["id"];
        $this->date_create = $post["date_create"];
        $this->tanggal_transaksi = $post["tanggal_transaksi"];
        $this->no_transaksi = $post["no_transaksi"];
        $this->qty = $post["qty"];
        $this->kode_mbarang = $post["kode_mbarang"];
        $this->kode_supplier = $post["kode_supplier"];
        $this->status = $post["status"];

        // $data = array(
        //     'stok' => $this->qty, );

        $this->db->update($this->_table, $this, array('id_transaksi' => $post['id']));
    }

    public function updateminus()
    {

        $post = $this->input->post();
        $data['kode_mbarang'] = $post['kode_mbarang'];
        $data['qty'] = $post['qty'];
        $transaksi = $this->db->get_where($this->_table, ['kode_mbarang' => $data['kode_mbarang']])->row_array();
        if ($transaksi == null) {
            $this->qty = $post['qty'];
            $this->kode_mbarang = $post['kode_mbarang'];
            $this->db->insert($this->_table, $this);
        } else {
            // $angka = 
            // $transaksi->nilai +
            // $post['nilai'];

            // $this->db->update($this->_table, $langkah, array('nama_barang' => $post['nama_barang']));
            var_dump($transaksi['qty']);
            $angka =
                $transaksi['qty'] -
                $post['qty'];
            $qty = [
                'qty' => $angka
            ];
            $this->db->update($this->_table, $qty, ['kode_mbarang' => $post['kode_mbarang']]);
        }
    }
    public function updateplus()
    {

        $post = $this->input->post();
        $data['kode_mbarang'] = $post['kode_mbarang'];
        $data['qty'] = $post['qty'];
        $transaksi = $this->db->get_where($this->_table, ['kode_mbarang' => $data['kode_mbarang']])->row_array();
        if ($transaksi == null) {
            $this->qty = $post['qty'];
            $this->kode_mbarang = $post['kode_mbarang'];
            $this->db->insert($this->_table, $this);
        } else {
            // $angka = 
            // $transaksi->nilai +
            // $post['nilai'];

            // $this->db->update($this->_table, $langkah, array('nama_barang' => $post['nama_barang']));
            var_dump($transaksi['qty']);
            $angka =
                $transaksi['qty'] +
                $post['qty'];
            $qty = [
                'qty' => $angka
            ];
            $this->db->update($this->_table, $qty, ['kode_mbarang' => $post['kode_mbarang']]);
        }
    }
    // $jumlah_barang_asli = $this->input->post('jumlah_barang_asli');
    // $keluar = $this->input->post('keluar');
    // $this->qty = $jumlah_barang_asli - $keluar;
    // $post = $this->input->post();

    // $this->id_transaksi = $post["id"];
    // $this->date_create = $post["date_create"];
    // $this->tanggal_transaksi = $post["tanggal_transaksi"];
    // $this->no_transaksi = $post["no_transaksi"];

    // $this->kode_mbarang = $post["kode_mbarang"];
    // $this->kode_supplier = $post["kode_supplier"];
    // $this->status = $post["status"];
    // $data["transaksi"] = $transaksi->getById($id);
    // var_dump($data['qty']);
    // $angka = $transaksi['qty'] - $post['qty'];
    // $qty = [
    //     'qty' => $angka
    // ];
    // $this->db->update($this->_table, $qty, $this, array('id_transaksi' => $post['id']));

    // public function tambahnilai()
    // {
    //     $post = $this->input->post();
    //     $this->date_create = time();
    //     $this->tanggal_transaksi = $post['tanggal_transaksi'];
    //     $this->no_transaksi = $post["no_transaksi"];
    //     $this->qty = $post["qty"];
    //     $this->kode_mbarang = $post["kode_mbarang"];
    //     $this->kode_supplier = $post["kode_supplier"];
    //     $this->status = $post["status"];

    //     $this->db->tambahnilai($this->_table, $this, array('id_transaksi' => $post['id']));
    // }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_transaksi" => $id));
    }
}
