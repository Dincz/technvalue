<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ServiceDetail extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		// Load the Product_model here
		$this->load->model('Service_Category_model');
		$this->load->model('Home_model');

		$this->load->model('admin/Banner_model');

	}

	public function index($s_id)
	{
		// echo($id);
		$data['banner'] = $this->Banner_model->get_banner_by_page_name('servicedetail'); // Adjust the page name as needed
		$data['hierarchy'] = $this->Home_model->get_hierarchical_data();

		$data['services'] = $this->Service_Category_model->get_service_by_id($s_id);
		$data['features'] = $this->Service_Category_model->getFeatures();
		$data['faq'] = $this->Service_Category_model->get_active_faqs();
		$this->load->view('frontend/serviceDetail', $data);
	}
}
