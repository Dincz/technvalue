<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->model('Footer_model');
	}



	public function index()

	{
		$data['basicinfo'] = $this->Footer_model->getBasicInfo();
		print_r($data);
		exit();
		$this->load->view('frontend/index');
	}
}
