<?php

//defined('BASEPATH') OR exit('No direct script access allowed');

class Beauty_salons_map extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
            // here will load a page with all salons list in a dashboard format  
       // $data['salons'] =$this->SalonDataModel->generate_all_salons_data_json('','en') ;
    	$this->load->view('map');        
    }
  
}