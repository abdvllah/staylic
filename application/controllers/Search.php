<?php

//defined('BASEPATH') OR exit('No direct script access allowed');
class Search extends CI_Controller {
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
		//case 1
        $categories = file_get_contents('../backend-staylic/categories.json');
         $searchresults = file_get_contents(base_url('../backend-staylic/searchresults.json'));
         $areas = file_get_contents('../backend-staylic/areas.json');           
		   $data['areas'] = json_decode($areas, true);
        $data['categories'] = json_decode($categories, true);
        $data['searchresults']=  json_decode($searchresults, true);        
        $data['areaid'] = $this->input->post('area');
        $data['categoryid'] = $this->input->post('category');
		  $data['count']=  count($data['searchresults']);
		  
		  //case 2
//        $data['areas'] = $this->SalonDataModel->get_areas_with_salons();
//        $data['categories'] = $this->SalonDataModel->get_gategories_associated_with_salons();
//        $data['searchresults']=  $this->SalonDataModel->search_results($data['categoryid'],$data['areaid']);
      
        //$data['searchresults']=  $this->SalonDataModel->generate_all_salon_json();
     
        $this->load->view('searchview', $data);

    }
  
    public function salon_page($salonid) {
        //$str = file_get_contents('../staylic/salon_1.json');
       // $data['salon'] = json_decode($str, true); // decode the JSON into an associative array
        //echo '<pre>' . print_r($data, true) . '</pre>';
        $data['salon']=$this->SalonDataModel->generate_all_salons_data_json($salonid);
       // print_r($data);
        $this->load->view('salon', $data);
    }

}
