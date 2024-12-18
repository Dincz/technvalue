<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gallery extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Gallery_model');
		$this->load->model('Home_model');
        $this->load->model('admin/Banner_model');

    }

    // public function index(){
    //     $this->load->view('frontend/gallery');
    // }

    public function index($title = NULL)
    {
        // echo "jshjsd";exit;
        // echo $title; exit;
        if ($title === NULL) {
            $data['title'] = 'default-title';  // Provide a default title to avoid null
        } else {
            $data['title'] = $title;
        }


        $data['gallery_items'] = $this->Gallery_model->get_gallery_images($data['title']);
        $data['hierarchy'] = $this->Home_model->get_hierarchical_data();
        $data['banner'] = $this->Banner_model->get_banner_by_page_name('gallerycategory'); // Adjust the page name as needed


   

        if ($data['gallery_items'] === null) {
            $data['gallery_items'] = [];  // Assign an empty array if the model returns null
        }
        // $banner['banner'] = $this->Banner_model->get_banner_by_page_name('gallerycategory'); // Adjust the page name as needed


        $this->load->view('frontend/gallery', $data);
    }   



    public function GalleryCategory()
    {
        $data['gallery_items'] = $this->Gallery_model->get_gallery_items();
        $data['banner'] = $this->Banner_model->get_banner_by_page_name('gallerycategory'); // Adjust the page name as needed

		$data['hierarchy'] = $this->Home_model->get_hierarchical_data();



        $this->load->view('layout/header',$data);
        $this->load->view('frontend/galleryCategory', $data);
        $this->load->view('layout/footer');
    }
}
