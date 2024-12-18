<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ProductController extends CI_Controller
{

    // Constructor to load the model
    public function __construct()
    {
        parent::__construct();
        // Load the Product_model here
        $this->load->model('Product_model');
        $this->load->model('Home_model');

        $this->load->model('admin/Banner_model');

    }

    // Method to display the product category page
    public function productCategory()
    {
        $data['banner'] = $this->Banner_model->get_banner_by_page_name('productcategory'); // Adjust the page name as needed
        $data['categories'] = $this->Product_model->get_categories(); // Ensure this returns an array
        $data['products'] = $this->Product_model->get_products(); // Ensure this returns an array
        $data['sub_category'] = $this->Product_model->get_sub_category(); // Ensure this returns an array
		$data['hierarchy'] = $this->Home_model->get_hierarchical_data();

        $this->load->view("layout/header.php", $data);
        $this->load->view("frontend/productCategory", $data);
        $this->load->view("layout/footer.php");
    }


    // Method to display product details
    public function productDetail()
    {
        // Fetch the products from the model
        $data['banner'] = $this->Banner_model->get_banner_by_page_name('productdetail'); // Adjust the page name as needed
		$data['hierarchy'] = $this->Home_model->get_hierarchical_data();

        $data['categories'] = $this->Product_model->get_categories();
        $data['products'] = $this->Product_model->get_products();
        $data['sub_category'] = $this->Product_model->get_sub_category();

        // echo '<pre>';
        // print_r($data);
        // exit;

        // Load views after data processing
        $this->load->view("layout/header.php",$data);
        $this->load->view("frontend/productDetail", $data);
        $this->load->view("layout/footer.php");
    }
}
