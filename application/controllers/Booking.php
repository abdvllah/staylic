<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('SalonDataModel');
        $this->load->helper('html');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->library('form_validation');
		$this->load->library('table');		
    }

    public function index() {
        $data['areas'] = $this->SalonDataModel->get_areas_with_salons();
       $data['categories'] = $this->SalonDataModel->get_gategories_associated_with_salons();	  
	    $this->load->view('bookview',$data);
    }
}
