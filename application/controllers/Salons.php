<?php

//defined('BASEPATH') OR exit('No direct script access allowed');

class Salons extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('SalonDataModel');
        $this->load->library('table');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->helper('html');
        $this->load->helper('file');
    }

    public function index() {
            // here will load a page with all salons list in a dashboard format  
		
        $data['salons'] =$this->SalonDataModel->generate_all_salons_data_json('','en') ;
    	$this->load->view('all-salons',$data);        
    }
  
}