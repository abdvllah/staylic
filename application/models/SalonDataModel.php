<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Salondatamodel extends CI_Model {
    function __construct() {
        parent::__construct();
    }


    public function get_a_salon_address($address_id) {// this function return an array of all salons 
        $query = $this->db->get_where('address', array('id' => $address_id));
        if ($query == TRUE) {
            return $query->result();
        } else {
            return FALSE;
        }
    }
    
    //this function will return only the list of areas that have salons, to avoid empty search result
    public function get_areas_with_salons($lang='en') {
        if($lang=='ar'){
            $this->db->select("area.id,area.name_ar as name,area.zone_number");
        }  else {
            $this->db->select("area.id,area.name,area.zone_number");
        }
        $this->db->distinct('area.id');
        $this->db->from('area, address');
        $this->db->where('area.id = address.area_id');
        
        $this->db->order_by("name", "asc"); 
        $query = $this->db->get();
        
        if ($query == TRUE) {
            return $query->result();
        } else {
            return FALSE;
        }
        
    }
     
    //to return only the categories that is assosiated with salons, to avoid empty results
            
    public function get_gategories_associated_with_salons($lang='en') {
        if($lang=='ar'){
            $this->db->select("service.category_id as id, category.name_ar as name");
             }  else {
                 $this->db->select("service.category_id as id, category.name");
             }
        $this->db->distinct('service.category_id');
        $this->db->from('salon_service,service,category');
       // $this->db->join('service', 'salon_service.service_id= service.id');
        $this->db->where('salon_service.service_id= service.id AND service.category_id=category.id');
        $this->db->order_by("name", "asc"); 
        $query = $this->db->get();
        if ($query == TRUE) {
            return $query->result();
        } else {
            return FALSE;
        }
    }

    public function get_area($area_id) {
        $query = $this->db->get_where('area', array('id' => $area_id));
        if ($query == TRUE) {
            return $query->result();
        } else {
            return FALSE;
        }
    }

    public function get_all_day_of_week() {// this function return an array of all salons 
        $query = $this->db->get('day_of_week');
        if ($query == TRUE) {
            return $query->result();
        } else {
            return FALSE;
        }
    }

    public function get_social_account($social_account_id) {
        $query = $this->db->get_where('social_media', array('id' => $social_account_id));
        if ($query == TRUE) {
            return $query->result();
        } else {
            return FALSE;
        }
    }
	
	public function check_salon($url_title){
		 $this->db->select('id,url_title,status');
        $this->db->from('salon');
		$this->db->having('status','1', FALSE); 
	    $this->db->like('url_title',$url_title);
		$query = $this->db->get();
        if ($query == TRUE) {
            return $query->result();
        } else {
            return FALSE;
        }
		
	}
		public function check_salon_name($name){
			
		//	$query = $this->db->query("SELECT id,name FROM salon where url_title=?;", array($name));

		$this->db->select('id,url_title');
        $this->db->from('salon');
	    $this->db->like('url_title',$name);
		$query = $this->db->get();
			
			//$query = $this->db->get();
        if ($query == TRUE) {
            return $query->result();
        } else {
            return FALSE;
        }
		
	}
			
    
     public function get_all_salons_name($lang='en') {
         if($lang == 'ar'){
             $this->db->select('name_ar as name');
         }else
         {
            $this->db->select('name');
         }
        $this->db->from('salon');
        return $this->db->get()->result();
    }

    public function generate_salon_social_accounts_json($salon_id, $lang='en') {
        if($lang=='ar'){
            $this->db->select("salon_social_account.account_name,social_media.social_media_name_ar as social_media_name,social_media.link");
        }  else {
            $this->db->select("salon_social_account.account_name,social_media.social_media_name,social_media.link");
        }
        $this->db->from('salon_social_account');
        $this->db->join('social_media', 'salon_social_account.social_media_id= social_media.id');
        $this->db->where('salon_social_account.salon_id=' . $salon_id);
        $query = $this->db->get();
        if ($query == TRUE) {
            return $query->result();
        } else {
            return FALSE;
        }
    }
    
    public function get_salon_categories($salon_id,$lang='en') {
        if($lang=='ar'){
            $this->db->select("service.category_id, category.name_ar as name, category.breif_ar as breif,category.icon as icon");
             }  else {
                 $this->db->select("service.category_id, category.name, category.breif,category.icon as icon");
             }
        $this->db->distinct('service.category_id');
        $this->db->from('salon_service,service,category');
       // $this->db->join('service', 'salon_service.service_id= service.id');
        $this->db->where('salon_service.salon_id=' . $salon_id.' AND salon_service.service_id= service.id AND service.category_id=category.id');
        $this->db->order_by("service.category_id", "asc"); 
        $query = $this->db->get();
        if ($query == TRUE) {
            return $query->result();
        } else {
            return FALSE;
        }
    }
     
    public function get_salon_sub_categories_for_a_category($salon_id,$category_id,$lang='en') {
         if($lang=='ar'){
             $this->db->select("service.sub_category_id, sub_category.name_ar  as name");
             }  else {
                 $this->db->select("service.sub_category_id, sub_category.name");
             }
        $this->db->distinct('service.sub_category_id');
        $this->db->from('salon_service,service,sub_category');
        $this->db->where('salon_service.salon_id=' . $salon_id.' AND salon_service.service_id = service.id AND service.sub_category_id=sub_category.id AND service.sub_category_id IS NOT NULL AND service.category_id='. $category_id);
        $this->db->order_by("sub_category.name", "asc"); 
        $query = $this->db->get();
        if ($query == TRUE) {
            return $query->result();
        } else {
            return FALSE;
        }
    }
         
    public function get_salon_services_for_a_sub_category($salon_id,$sub_category_id,$lang='en') {
             if($lang=='ar'){
                 $this->db->select("service.id,service.name_ar as name, salon_service.price,salon_service.description_ar as description,salon_service.comment_ar as comment,salon_service.duration_minutes,salon_service.status");
             }  else {
             $this->db->select("service.id,service.name, salon_service.price,salon_service.description,salon_service.comment,salon_service.duration_minutes,salon_service.status");
             }
        $this->db->from('salon_service,service');
        $this->db->where('salon_service.salon_id=' . $salon_id.' AND salon_service.service_id = service.id AND service.sub_category_id='.$sub_category_id.' AND service.sub_category_id IS NOT NULL');
        $this->db->order_by("service.name", "asc"); 
        $query = $this->db->get();
        if ($query == TRUE) {
            return $query->result();
        } else {
            return FALSE;
        }
    }
    // category services with sub_category = NULL
    public function get_salon_services_for_a_category($salon_id,$category_id,$lang='en') {
             if($lang=='ar'){
                 $this->db->select("service.id, service.name_ar as name, salon_service.price,salon_service.description_ar as description,salon_service.comment_ar as comment,salon_service.duration_minutes,salon_service.status");
             }  else {
                 $this->db->select("service.id,service.name, salon_service.price,salon_service.description,salon_service.comment,salon_service.duration_minutes,salon_service.status");
             }
        $this->db->from('salon_service,service');
        $this->db->where('salon_service.salon_id=' . $salon_id.' AND salon_service.service_id = service.id AND service.category_id='.$category_id.' AND service.sub_category_id IS NULL');
        $this->db->order_by("service.name", "asc"); 
        $query = $this->db->get();
        if ($query == TRUE) {
            return $query->result();
        } else {
            return FALSE;
        }
    }

    public function generate_salon_normal_time_json($salon_id,$lang='en') {
           if($lang=='ar'){
        $this->db->select("day_of_week.id,salon_normal_timing.open_time,salon_normal_timing.close_time,salon_normal_timing.open_time_2,salon_normal_timing.close_time_2,day_of_week.day_name_ar as day_name");
        }  else {
        $this->db->select("day_of_week.id,salon_normal_timing.open_time,salon_normal_timing.close_time,salon_normal_timing.open_time_2,salon_normal_timing.close_time_2,day_of_week.day_name");
        }
        $this->db->from('salon_normal_timing');
        $this->db->join('day_of_week', 'salon_normal_timing.day_of_week= day_of_week.id');
        $this->db->where('salon_normal_timing.salon_id=' . $salon_id);
		$this->db->order_by("day_of_week.id", "asc"); 
        $query = $this->db->get();

        if ($query == TRUE) {
            return $query->result();
        } else {
            return FALSE;
        }
    }
    public function generate_salon_address_json($salon_id ,$lang='en') {
        if($lang=='ar'){
            $this->db->select("address.*,area.name_ar as name,area.zone_number");
        }  else {
            $this->db->select("address.*,area.name,area.zone_number");
        }
            $this->db->from('address');
            $this->db->join('area', 'address.area_id= area.id');
            $this->db->where('address.salon_id=' . $salon_id);
            $query = $this->db->get();
            if ($query == TRUE) {
            return $query->result();
        } else {
            return FALSE;
        }
    }
	
	
    public function generate_all_salon_json($salon_id = NULL, $lang = 'en',$status=1) {
        if (!empty($salon_id)) {
             if($lang=='ar'){
                $this->db->select("id,name_ar as name,url_title,about_ar as about,logo,profile_image,payment_method,has_parking,kids_friendly,by_appointment,create_time,refreshments_avilable,wifi_avilable,home_service");
             }else{
                $this->db->select("id,name,url_title,about,logo,profile_image,payment_method,has_parking,kids_friendly,by_appointment,create_time,refreshments_avilable,wifi_avilable,home_service");
             }
            $this->db->from('salon');
			if($status=='1'){
		        $this->db->where('salon.id=' . $salon_id.' AND salon.status='.$status);

			}else{
				$this->db->where('salon.id=' . $salon_id.' AND salon.status=0 OR salon.status=1' );
			}
            $query = $this->db->get();
        }else{
          			
			 if($lang=='ar'){
                $this->db->select("id,name_ar as name,url_title,about_ar as about,logo,profile_image,payment_method,has_parking,kids_friendly,by_appointment,create_time,refreshments_avilable,wifi_avilable,home_service");
             }else{
                $this->db->select("id,name,url_title,about,logo,profile_image,payment_method,has_parking,kids_friendly,by_appointment,create_time,refreshments_avilable,wifi_avilable,home_service");
             }
            $this->db->from('salon');
			  $this->db->where('salon.status='.$status);
            $query = $this->db->get();
			
        }
        return $query->result();
    }
	
//        public function search_results( $lang = 'en',$areaid=NULL,$category=NULL,$query=NULL) {        

     
    public function search_results($category=NULL,$areaid=NULL,$lang='en') {        
            if($lang=='ar'){
                $this->db->select("salon.id,salon.name_ar as name,salon.logo,salon.profile_image,salon.payment_method,salon.has_parking,salon.kids_friendly,salon.by_appointment,salon.create_time");
             }else{
                $this->db->select("salon.id,salon.name,salon.about,salon.logo,salon.profile_image,salon.payment_method,salon.has_parking,salon.kids_friendly,salon.by_appointment,salon.create_time");
             }
             $this->db->distinct('salon.name');
             $this->db->order_by("name", "asc"); 
            $this->db->from('salon');
    if(!empty($category) && $category != 'all'){
             $this->db->join('salon_service', 'salon.id = salon_service.salon_id','INNER');
             $this->db->join('service', 'salon_service.service_id = service.id AND service.category_id='.$category,'INNER');
            }
            if(!empty($areaid) && $areaid != 'all')
            {
                $this->db->join('address', 'salon.id=address.salon_id AND address.area_id='.$areaid);
                $this->db->join('area', 'address.area_id= area.id');
            }
             $query = $this->db->get();
      
        return $query->result();
    }
    
    public function generate_salon_services_json($salon_id, $lang = 'en') {
        //1. get the salon categories List
        $cat_array = array();
        unset($cat_array);
        $categories = $this->get_salon_categories($salon_id, $lang);
        foreach ($categories as $category) {
            //2. get the sub-categories of each category
            $sub_categories = $this->get_salon_sub_categories_for_a_category($salon_id, $category->category_id, $lang);
            //print_r($sub_categories);
            $sub_cat_array = array();
           // unset($sub_cat_array);
            foreach ($sub_categories as $sub_category) {
                //3. get the services of each sub categories 
                $services = $this->get_salon_services_for_a_sub_category($salon_id, $sub_category->sub_category_id, $lang);
                $sub_cat_array[] = array(
                    'id' => $sub_category->sub_category_id,
                    'name' => htmlspecialchars_decode($sub_category->name),
                    'services' => $services
                );
            }
            //4. get the services of the category if no sub-category is associated 
            $category_services = $this->get_salon_services_for_a_category($salon_id, $category->category_id, $lang);
            $cat_array[] = array(
                'id' => $category->category_id,
                'name' => htmlspecialchars_decode($category->name),
				'icon' => $category->icon,
                'services' => $category_services,
                'sub_categories' => $sub_cat_array
            );
			             unset($sub_cat_array);

        }
        if (isset($cat_array)) {
            return $cat_array;
        } else {
            return NULL;
        }
    }
    
    function generate_all_salons_data_json($salon_id = NULL, $lang = 'en',$status='1') {         
	    if(!empty($salon_id)){          
            $salon = $this->generate_all_salon_json($salon_id, $lang,$status);
			if(!empty($salon)){
				if(empty($salon[0]->profile_image)){
					$salon[0]->profile_image="no_image.png";
				}
				
            $salon_arry = array(
                'id' => $salon[0]->id,
                'name' => htmlspecialchars_decode($salon[0]->name),
				'url_title' => $salon[0]->url_title,
                'about' => htmlspecialchars_decode($salon[0]->about),
                'logo' => $salon[0]->logo,
				'profile_image' => $salon[0]->profile_image,
                'payment_method' => $salon[0]->payment_method,
                'has_parking' => $salon[0]->has_parking,
                'kids_friendly' => $salon[0]->kids_friendly,
                'by_appointment' => $salon[0]->by_appointment,
                'create_time' => $salon[0]->create_time,
                'normal_timing' => $this->generate_salon_normal_time_json($salon_id),
                'social_media_account' => $this->generate_salon_social_accounts_json($salon_id),
                'address' => $this->generate_salon_address_json($salon_id),
                'categories' => $this->generate_salon_services_json($salon_id),
				'rating' => $this->salon_rating($salon_id)
            );
            $data['salon'] = $salon_arry;
            
            return $data['salon']; 
			} else 
			{
				return FALSE;
				}   
         
        } else {
          $salons = $this->generate_all_salon_json(NULL, $lang,$status);
            $salons_arry = array();
            unset($salons_arry);
            foreach ($salons as $salon) {
				if(empty($salon->profile_image)){
					$salon->profile_image="no_image.png";
				}
                $salons_arry[] = array(
                    'id' => $salon->id,
                    'name' => htmlspecialchars_decode($salon->name),
					'url_title' => $salon->url_title,
                    'about' => htmlspecialchars_decode($salon->about),
                    'logo' => $salon->logo,
					'profile_image' => $salon->profile_image,
					'refreshments_avilable' => $salon->refreshments_avilable,
					'wifi_avilable'=> $salon->wifi_avilable,
					'home_service' => $salon->home_service,
                    'payment_method' => $salon->payment_method,
                    'has_parking' => $salon->has_parking,
                    'kids_friendly' => $salon->kids_friendly,
                    'by_appointment' => $salon->by_appointment,
                    'create_time' => $salon->create_time,
                    'normal_timing' => $this->generate_salon_normal_time_json($salon->id),
                    'social_media_account' => $this->generate_salon_social_accounts_json($salon->id),
                    'address' => $this->generate_salon_address_json($salon->id),
                    'categories' => $this->generate_salon_services_json($salon->id),
					'rating' =>  $this->salon_rating($salon->id)
                );
            }
            $data = $salons_arry;
             return $data;
            // echo json_encode($data);
           
        }
    }
	
	function insert_user($userarray){
		//$get_user=$this->db->get_where('users', array('email' => $userarray->email));
		
	$sql = $this->db->insert_string('users', $userarray);
        $query = $this->db->query($sql);
		 $id = $this->db->insert_id();
        if ($query == TRUE) {
            return $id;
        } else {
            return FALSE;
        }
	
	}
	
	function insert_review($array){
	$sql = $this->db->insert_string('user_review', $array);
        $query = $this->db->query($sql);
		 $id = $this->db->insert_id();
        if ($query == TRUE) {
            return $id;
        } else {
            return FALSE;
        }
	
	}
	
	function check_user_email($email)
	{
		$query = $this->db->get_where('users', array('email' => $email));
        if ($query == TRUE) {
            return $query->result();
        } else {
            return FALSE;
        }
		
	}
	
	//get a salon approved reviews to be shown in the salon profile online
	public function salon_reviews($id){
		$this->db->select("users.name as name,user_review.time as time, user_review.rating as rating,user_review.review_text as review_text");
		  $this->db->from("user_review,users");
         $this->db->where("user_review.salon_id=" .$id. " AND user_review.user_id=users.id AND user_review.publish=1");
		$this->db->order_by('user_review.time','desc');
         $query = $this->db->get();
        if ($query == TRUE) {
            return $query->result();
        } else {
            return FALSE;
        }
	}
	
	//calculate the salon rating
	public function salon_rating($id){
	//$this->db->select("AVG(rating) as rating");
			$this->db->select("round(AVG(rating),0) as rating");
		 //$this->db->distinct('user_review.user_id');
		  $this->db->from('user_review');
         $this->db->where('salon_id='.$id);
         $query = $this->db->get();
        if ($query == TRUE) {
            return $query->result();
        } else {
            return FALSE;
        }	
	}
	
	//get total number of user reviews (count)
	public function count_salon_reviews($id)
	{
		$this->db->select("count(rating) as count");
		 //$this->db->distinct('user_review.user_id');
		  $this->db->from('user_review');
         $this->db->where('salon_id='.$id);
         $query = $this->db->get();
        if ($query == TRUE) {
            return $query->result();
        } else {
            return FALSE;
        }
	}
	
	//get the number of reviews for a user
	public function user_salon_reviews($userid,$salonid)
	{
		$query = $this->db->get_where('user_review', array('user_id' => $userid,'salon_id' => $salonid));
        if ($query == TRUE) {
            return $query->result();
        } else {
            return FALSE;
        } 
		
	}
	
	//get the number of reviews for a user
	public function count_user_reviews($email)
	{
		 $this->db->select("count(*) as count,users.name,users.email");
		 //$this->db->distinct('user_review.salon_id');
		  $this->db->from('users,user_review');
         $this->db->where('users.id=user_review.user_id AND users.email='.$email);
		 $this->db->group_by("users.email");
         $this->db->order_by("count", "desc"); 		
         $query = $this->db->get();
        if ($query == TRUE) {
            return $query->result();
        } else {
            return FALSE;
        }
		
	}
	
    
}
