<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ChartBaru extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model("mChartBaru");
    }

    public function index()
    {
        $data = $this->mChartBaru->get_data()->result();
        $x['data'] = json_encode($data);
        $this->load->view('chatBaru.php', $x);
    }
}
        
    /* End of file  chartBaru.php */
