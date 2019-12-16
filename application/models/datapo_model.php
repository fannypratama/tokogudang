 <?php defined('BASEPATH') or exit('No  direct script access allowed');

class datapo_model extends CI_Model
{
    private $_table = "datapo";
    public $date_create;
    public $id_data;
    public $tanggal_transaksi;
    public $tujuan;
    public $alamat;
    public $no_po;
    public $status;
     public function rules()
    {
        return [
            [
                'field' => 'no_transaksi',
                'label' => 'No Transaksi',
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
        return $this->db->get_where($this->_table, ["no_po" => $id])->result();
    }

    public function save_batch($data){
        return $this->db->insert_batch('detail', $data);
    }

    public function getKodepo($kodepo){
        $this->db->select_sum('qty');
        return $this->db->get_where('detail', ["id_data" => $kodepo])->row();
    }

    public function save()
    {
        $post = $this->input->post();
         $this->date_create = date("Y-m-d H:i:s");
        $this->tanggal_transaksi = date('Y-m-d',strtotime($post['tanggal_transaksi']));
        // $this->no_transaksi = $post["no_transaksi"];
        $this->tujuan = $post["tujuan"];
        $this->alamat = $post["alamat"];
        $this->no_po = $post["no_po"];
         $this->status = $post["status"];

        $this->db->insert($this->_table, $this);

        return $this->db->get_where($this->_table, ["no_po" => $post["no_po"]])->row();

        $data[] = [        
            $this->kode_mbarang = $post["kode_mbarang"],  
            $this->qty = $post["qty"],
            // $this->satuan = $post["satuan"],
            $this->id_data = $post["no_po"]
        ];
            $this->db->insert_batch('detail', $data);
    }



    // public function update_barang_keluar() 
    // {
    //     $this->qty = $post["qty"];

    //     $this->db->update($this->_table, $this, array('qty' => $post['qty']));
    // }

    public function delete($id)
    {
        $this->db->delete($this->_table, array("no_po" => $id));
    }

    
}    
