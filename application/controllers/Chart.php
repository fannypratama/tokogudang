<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Chart extends CI_Controller {
    function __construct(){
        parent::__construct();
        // $this->load->model('Mread_model');
    }
    public function index()
    {
        $data['report'] = $this->mread->report();
        $this->load->view('report', $data);
    }

    public function baru()
    {
    	
        $this->load->view('_partials/header.php');
        $this->load->view('_partials/sidebar.php');
        $this->load->view('_partials/topbar.php');
        $this->load->view('chart.php');
        $this->load->view('_partials/footer.php');
    }
}