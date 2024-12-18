<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ServiceCategory extends CI_Controller {


	public function __construct() {
        parent::__construct();
        // Load the Product_model here
		$this->load->model('Service_Category_model');
    $this->load->model('Home_model');

    $this->load->model('admin/Banner_model');

    }
	
	
	public function index()
	{
    $data['banner'] = $this->Banner_model->get_banner_by_page_name('servicecategory'); // Adjust the page name as needed
		$data['hierarchy'] = $this->Home_model->get_hierarchical_data();

		$data['services'] = $this->Service_Category_model->get_service_category();
		$data['customer_feedback'] = $this->Service_Category_model->get_active_Feedback();
		$data['specialization'] = $this->Service_Category_model->getSpecialization();
		   // Fetch the products from the model
        
        // Debugging code to see product data
        // echo '<pre>';
        // print_r($data);
        // exit;

        // Load views after data processing
        $this->load->view("frontend/serviceCategory", $data);


	}


}
