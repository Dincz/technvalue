<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Aboutus extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		// Load the Product_model here
		$this->load->model('About_Us_model');
		$this->load->model('Home_model');

		$this->load->model('admin/Banner_model');

	}

	public function index()
	{
        $data['banner'] = $this->Banner_model->get_banner_by_page_name('about-us'); // Adjust the page name as needed

		$data['about'] = $this->About_Us_model->get_about_us();
		// $data['meet_our_expert'] = $this->About_Us_model->getMeetOurExpert();
		$data['meet_our_expert'] = $this->About_Us_model->get_active_experts();
		$data['history'] = $this->About_Us_model->get_active_history();
		$data['expertise'] = $this->About_Us_model->getExpertise();
		// $data['chooseUs'] = $this->About_Us_model->getchooseUs();
		$data['chooseUs'] = $this->About_Us_model->get_active_choose_us();
		$data['hierarchy'] = $this->Home_model->get_hierarchical_data();

		// print_r($data);


		// $this->load->view("layout/header.php");
		$this->load->view('frontend/about-us', $data);
		// $this->load->view("layout/footer.php");
	}


}