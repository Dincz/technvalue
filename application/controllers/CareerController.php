<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CareerController extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('carrier_model');
        $this->load->model('Home_model');

        $this->load->model('admin/Banner_model');

    }


    public function Career(){
        // $page_name = 'Career';
        // $data = $this->bannerImage($page_name);
        $data['banner'] = $this->Banner_model->get_banner_by_page_name('career'); // Adjust the page name as needed

        $data['qualities'] = $this->carrier_model->get_active_qualities();
        $data['content'] = $this->carrier_model->get_content();
        $data['title'] = $title;

        
        $data['all_jobs'] = $this->carrier_model->get_all_job_detail();
        // print_r($data['all_jobs']);
        // exit;

		$data['hierarchy'] = $this->Home_model->get_hierarchical_data();

        $data['use_carousel'] = count($data['qualities']) > 4;
        $this->load->view("layout/header",$data);
        $this->load->view("frontend/career", $data);
        // $this->load->view("frontend/jobDetail", $data);
        $this->load->view("layout/footer");

    }

    // public function bannerImage($page_name) {
    //     $banner_image = $this->Banner_model->get_banner_image($page_name);
    //     if ($banner_image) {
    //         $data['banner_image'] = $banner_image;
    //     } else {
    //         $data['banner_image'] = '/breadcumbs-bg.png'; // Default image
    //     }
    //     return $data; 
    // }


    public function Job($title){
        $data['title'] = $title;
        $data['content'] = $this->carrier_model->get_job_detail( $data['title'] = $title);
        $data['banner'] = $this->Banner_model->get_banner_by_page_name('jobdetail'); // Adjust the page name as needed
		$data['hierarchy'] = $this->Home_model->get_hierarchical_data();

        // print_r($data['content']);
        // exit;
        $this->load->view("layout/header",$data);
        $this->load->view("frontend/jobDetail", $data);
        $this->load->view("layout/footer");
    }


}