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

	public function create()
	{
		
		if(isset($_REQUEST) or !empty($_REQUEST))
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

		} 
		else {
		$data = array('image_metadata' => $this->upload->data());
		}
		
			  
		$this->form_validation->set_rules('blog_title', 'FirstName', 'required'); 
		$this->form_validation->set_rules('blogtextarea', 'blogtextarea', 'required|max_length[400]'); 
		if (empty($_FILES['userfile']['name']))
		{
				$this->form_validation->set_rules('profile_image', 'Document', 'required');
		}
	
        $userData = array( 
            'title' => strip_tags($this->input->post('blog_title')), 
            'description'=> strip_tags($this->input->post('blogtextarea')), 
            'imagepath'=> $config['file_name'],
            
		); 

			if($this->form_validation->run() == true){ 

				$insert = $this->blog_model->insert($userData);
			 } 
			 else
			 {
			

			   //redirect('/');
			  // $this->index();

			 }
		}

     // displaying all the record using pagination on the same post page. 
  }
}


