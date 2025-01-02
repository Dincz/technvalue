<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	// Constructor to load the model
	public function __construct()
	{
		parent::__construct();
		// Load the Home_model
		$this->load->model('Home_model');
		$this->load->model('carrier_model');
		$this->load->model('Gallery_model');
		$this->load->model('Blog_model');
		$this->load->model('Service_Category_model');
		$this->load->model('Footer_model');


	}
	public function index($title = NULL)
	{
		$data['client'] = $this->Home_model->get_client();
		$data['jobs'] = $this->carrier_model->jobs_data($title);
		$data['technical_updates'] = $this->Home_model->get_technical_updates();
		$data['whats_new'] = $this->Home_model->get_whats_new();
		$data['gallery_items'] = $this->Gallery_model->get_gallery_items();
		$data['blog'] = $this->Blog_model->getBlog();
		$data['customer_feedback'] = $this->Service_Category_model->getFeedback();
		$data['basicinfo'] = $this->Footer_model->get_basic_info();
		$data['hierarchy'] = $this->Home_model->get_hierarchical_data();
		$data['banner'] = $this->Home_model->get_banner();
		$data['featured'] = $this->Home_model->get_featured_products();



		$this->load->view('frontend/home', $data);
	}
}