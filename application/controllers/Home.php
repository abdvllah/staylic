<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('SalonDataModel');
        $this->load->library('table');
        $this->load->library('form_validation');
        $this->load->helper('html');
    }

    public function index() {     
        $data['areas'] = $this->SalonDataModel->get_areas_with_salons();
        $data['categories'] = $this->SalonDataModel->get_gategories_associated_with_salons();
        $this->load->view('searchview', $data);
    }
}
