<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BlogController extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		// Load the Product_model here
		$this->load->model('Blog_model');
        $this->load->model('Home_model');

		$this->load->model('admin/Banner_model');
	}
    public function blog(){
        $data['banner'] = $this->Banner_model->get_banner_by_page_name('blog'); // Adjust the page name as needed
		$data['hierarchy'] = $this->Home_model->get_hierarchical_data();

		$data['blog'] = $this->Blog_model->getBlog();
        
        $this->load->view("frontend/blog",$data);
    }
    
    public function blogDetail($id){
        // $data['banner'] = $this->Banner_model->get_banner($id);
        $data['hierarchy'] = $this->Home_model->get_hierarchical_data();

        $data['banner'] = $this->Banner_model->get_banner_by_page_name('blogdetail'); // Adjust the page name as needed
		$data['blog'] = $this->Blog_model->getBlogById($id);
        
        echo "<pre>";
        print_r($data['blog']);
        echo "</pre>";
        exit;
        $this->load->view("frontend/blogDetail", $data);
    }

   
}