<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BlogController extends CI_Controller {

	 public function __construct()
	 {
	  parent::__construct();
	  $this->load->model('blog_model');
	  $this->load->helper('form');
	  $this->load->library('form_validation');
	 }

	public function index()
	{
		$data['title'] = "create blog page";
		$data['content']= $this->load->view('pages/create',$data,true);
		return $this->load->view('layout_master',$data);

	}

	public function blogview()
	{
			$data['blogpost']=$this->blog_model->get_posts();
			echo "<pre> </pre>";
			print_r($data['blogpost']);
			die;
			$data['title'] = "See our blog";
		    $data['content']= $this->load->view('pages/blogview',$data,true);
		    return $this->load->view('layout_master',$data);

	}
	public function validate_image() {
		
				$check = TRUE;
				if ((!isset($_FILES['profile_image'])) || $_FILES['profile_image']['size'] == 0) {
					$this->form_validation->set_message('validate_image', 'The {field} field is required');
					$check = FALSE;
				}
				else if (isset($_FILES['profile_image']) && $_FILES['profile_image']['size'] != 0) {
					$allowedExts = array("gif", "jpeg", "jpg", "png", "JPG", "JPEG", "GIF", "PNG");
					$allowedTypes = array(IMAGETYPE_PNG, IMAGETYPE_JPEG, IMAGETYPE_GIF);
					$extension = pathinfo($_FILES["profile_image"]["name"], PATHINFO_EXTENSION);
					$detectedType = exif_imagetype($_FILES['profile_image']['tmp_name']);
					$type = $_FILES['profile_image']['type'];
					if (!in_array($detectedType, $allowedTypes)) {
						$this->form_validation->set_message('validate_image', 'Invalid Image Content!');
						$check = FALSE;
					}
					if(filesize($_FILES['profile_image']['tmp_name']) > 2000000) {
						$this->form_validation->set_message('validate_image', 'The Image file size shoud not exceed 20MB!');
						$check = FALSE;
					}
					if(!in_array($extension, $allowedExts)) {
						$this->form_validation->set_message('validate_image', "Invalid file extension {$extension}");
						$check = FALSE;
					}
				}
				return $check;
	}

	public function create()
	{
		
		if($this->input->post())
		{

		$new_name = time().$_FILES["profile_image"]['name'];
        $config['file_name'] = $new_name;
        $config['upload_path'] = './images/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 2000;
        $config['max_width'] = 1500;
        $config['max_height'] = 1500;
         // image uploading code
		 $this->load->library('upload', $config); // note: always define $config

		if (!$this->upload->do_upload('profile_image')) 
		{
			$error = array('error' => $this->upload->display_errors());
            
		} 
		else {
		$data = array('image_metadata' => $this->upload->data());

		}
		
		$this->form_validation->set_rules('blog_title', 'FirstName', 'required'); 
		$this->form_validation->set_rules('blogtextarea', 'blogtextarea', 'required|max_length[400]'); 
		if (empty($_FILES['userfile']['name']))
		{
				$this->form_validation->set_rules('profile_image', 'Document', 'callback_validate_image');
		}
	
        $userData = array( 
            'title' => strip_tags($this->input->post('blog_title')), 
            'description'=> strip_tags($this->input->post('blogtextarea')), 
            'imagepath'=> $config['file_name'],
		); 

			if($this->form_validation->run() == true){ 

				$insert = $this->blog_model->insert($userData);
			
				redirect('/view');
			
			 } 
			 else
			 {
				
			     $this->index();
                  
			 }
		
		}

     // displaying all the record using pagination on the same post page. 
  }
}


