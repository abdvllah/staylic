<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Welcome extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('SalonDataModel');
        $this->load->helper('html');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->helper('file');
		$this->load->library('form_validation');
		$this->load->library('table');
    }

    public function index() {
        $data['areas'] = $this->SalonDataModel->get_areas_with_salons();
        $data['categories'] = $this->SalonDataModel->get_gategories_associated_with_salons();	  
	    $this->load->view('index',$data);
    }
	
	public function map(){
	   $this->load->view('map');

	}

public function search(){        
      // $data['darea'] = $this->input->post('area');
      // $data['dcategory'] = $this->input->post('category');
	  // $data['Areas'] = json_encode($this->SalonDataModel->get_areas_with_salons())  ;
      // $data['Categories'] = json_encode($this->SalonDataModel->get_gategories_associated_with_salons());
       $data['Salons'] =json_encode($this->SalonDataModel->generate_all_salons_data_json('','en')) ;
	   $this->load->view('searchview', $data);
}
	
	public function get_salons(){
		$Salons_data = $this->SalonDataModel->generate_all_salons_data_json('','en');
        $this->output->set_content_type('application/json')->set_output(json_encode($Salons_data));
	}
	
	
	
	public function get_categories(){
        $Categories =$this->SalonDataModel->get_gategories_associated_with_salons() ;
        $this->output->set_content_type('application/json')->set_output(json_encode($Categories));
		
	}

public function get_areas(){
	   $Areas = $this->SalonDataModel->get_areas_with_salons() ;
	   $this->output->set_content_type('application/json')->set_output(json_encode($Areas));
	}

    public function salon_page($salonid=NULL) {
        $check_id=FALSE;
		 $check_name=$this->SalonDataModel->check_salon($salonid);
         if(isset($check_name)){
			 $data['salon']=$this->SalonDataModel->generate_all_salons_data_json($check_name[0]->id);
			 $data['reviews']=$this->SalonDataModel->salon_reviews($check_name[0]->id);
			 $data['rating']=$this->SalonDataModel->salon_rating($check_name[0]->id);
			 $data['count_reviewrs']=$this->SalonDataModel->count_salon_reviews($check_name[0]->id);
             $this->load->view('salonview', $data);  			
		 } else{
            //$this->search();
			redirect('Welcome/search');
        }
		
    }
	
	   public function preview_salon_page($url_title) {
            $check_name=$this->SalonDataModel->check_salon_name($url_title);
			  if(isset($check_name)){
             $data['salon']=$this->SalonDataModel->generate_all_salons_data_json($check_name[0]->id,'',0);
			 $data['reviews']=$this->SalonDataModel->salon_reviews($check_name[0]->id);
			 $data['rating']=$this->SalonDataModel->salon_rating($check_name[0]->id);
			 $data['count_reviewrs']=$this->SalonDataModel->count_salon_reviews($check_name[0]->id);
              $this->load->view('salonview', $data);   
			  }
    }
	
	public function about(){        
        $this->load->view('about-us');
	}
	
	public function salon_owner(){        
        $this->load->view('salon-owner');

if (isset($_POST['submit-salon'])) {
	$name = htmlspecialchars($_POST["name"]);
	$salon = htmlspecialchars($_POST["salon"]);
	$branches = $_POST['branches'];
	$ebooking = $_POST['ebooking'];
	$address = htmlspecialchars($_POST["address"]);
	$number = htmlspecialchars($_POST["number"]);
	$email = htmlspecialchars($_POST["email"]);

	$to = "info@staylic.com";
	$subject = "Salon Request Recieved!";
	// $headers .= "MIME-Version: 1.0\r\n";
	// $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

	$message = '<!DOCTYPE html>
	<html lang="en">
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
	</head>
	<body>
	<div class="container">
	<h2>Salon has sent you information</h2>
	<p>
	<table class="table table-striped table-bordered">
	<tr>
	<th>Full Name</th>
	<td>' . $name . '</td>
	</tr>
	<tr>
	<th>Salon Name</th>
	<td>' . $salon . '</td>
	</tr>
	<tr>
	<th>Does Your Salon have more than one branch?</th>
	<td>' . $branches . '</td>
	</tr>
	<tr>
	<th>Does your Salon have Electronic Booking System?</th>
	<td>' . $ebooking . '</td>
	</tr>
	<tr>
	<th>Text Address</th>
	<td>' . $address . '</td>
	</tr>
	<tr>
	<tr>
	<th>Contact Number</th>
	<td>' . $number . '</td>
	</tr>
	<tr>
	<tr>
	<th>Email</th>
	<td><a href="mailto:' . $email . '">' . $email . '</a>' . '</td>
	</tr>
	<tr>
	</table>
	</p>
	</div>
	</body>
	</html>';

	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";


	mail($to,$subject,$message,$headers);
	//echo $message;

	redirect('Welcome/salon_owner?status=sent');
}

	}
	
	public function contact_us(){        
        $this->load->view('contact-us');
	}
	
	public function review(){  
			 $this->form_validation->set_rules('name', 'Name', 'required|trim|callback_alpha_space_only|min_length[3]|max_length[20]');
			 $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
			 $this->form_validation->set_rules('rating', 'Rating', 'required');
		// field validation
		$this->form_validation->set_rules('g-recaptcha-response', 'recaptcha validation', 'required|callback_validate_captcha'); 
		$this->form_validation->set_message('validate_captcha', 'Please check the the captcha ');
		
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			 if ($this->form_validation->run() == FALSE) {
				echo validation_errors();
	            } else {
			    $checkusr= $this->SalonDataModel->check_user_email($this->input->post('email'));
				 if($checkusr == FALSE){
					$user_array = array(
	                    'id' => '',
						'name' => $this->input->post('name') ,
						'email' => $this->input->post('email') ,
						'subscribtion_date' => date("Y-m-d H:i:s")
				);
			   $insert_user = $this->SalonDataModel->insert_user($user_array);					
				}	else{
					 $insert_user=$checkusr[0]->id;
					 
				 }	
			 $previous_review=$this->SalonDataModel->user_salon_reviews($insert_user,$this->input->post('salon_id'));
				 //only will add the review to database if no previous review added
				 if($previous_review == FALSE){
					 $review_array = array(
	                    'id' => '',
						'user_id' => $insert_user,
						'address_id' => '2',
						'review_text' => $this->input->post('review_text') ,
						'time' => date("Y-m-d H:i:s"),
						'salon_id' => $this->input->post('salon_id'),
						'publish' => '0',
						'rating' => $this->input->post('rating')
				);
				$insert_review = $this->SalonDataModel->insert_review($review_array);
					 echo 'TRUE';
				return 'TRUE';
				 }else {
					 echo "This Salon has already been rated by you";
				 }
			    			   
				
					//$this->salon_page($this->input->post('salon_id'));		
				}
	}
	}

	
	function validate_captcha() { 
		$captcha = $this->input->post('g-recaptcha-response');
		$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6Lebhg8UAAAAAAjrNNE-pm4mFdDYUv5PrePz2RVs&response=" . $captcha . "&remoteip=" . $_SERVER['REMOTE_ADDR']); 
		if ($response . 'success' == false) {
			return FALSE; 
		} 
		else {
			return TRUE; 
																   
		}
	} 
	
	 //custom validation function to accept alphabets and space
    function alpha_space_only($str)
    {
        if (!preg_match("/^[a-zA-Z ]+$/",$str))
        {
            $this->form_validation->set_message('alpha_space_only', 'The %s field must contain only alphabets and space');
            return FALSE;
        }
        else
        {
            return TRUE;
        }
    }
}
