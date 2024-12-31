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
    public function productCategory($c_id)
    {

        $data['category'] = $this->Product_model->get_category_by_id($c_id);
        $data['subcategories'] = $this->Product_model->get_subcategories_by_category($c_id);
        $data['banner'] = $this->Banner_model->get_banner_by_page_name('productcategory'); // Adjust the page name as needed
        if (isset($data['subcategories']) && !empty($data['subcategories'])) {
            foreach ($data['subcategories'] as $subcategory) {
                // Fetch products for each subcategory
                $subcategory_id = $subcategory['sc_id'];  // Get the subcategory ID
                $subcategory['products'] = $this->Product_model->get_products_by_subcategory($subcategory_id);
            }
            //     echo "<pre>";
            // print_r($subcategory['products']);  // This will print the products of the current subcategory
            // echo "</pre>";

        }

        $data['categories'] = $this->Product_model->get_categories(); // Ensure this returns an array
        $data['products'] = $this->Product_model->get_products();  // Make sure this is returning an array
        $data['sub_category'] = $this->Product_model->get_sub_category(); // Ensure this returns an array
        $data['hierarchy'] = $this->Home_model->get_hierarchical_data();


        $this->load->view("layout/header.php", $data);
        $this->load->view("frontend/productCategory", $data);
        $this->load->view("layout/footer.php");
        // print_r($data);
        // exit;
    }





    // Method to display product details
    public function productDetail($p_id,)
    {
        // Fetch the products from the model
        $data['banner'] = $this->Banner_model->get_banner_by_page_name('productdetail'); // Adjust the page name as needed
        $data['hierarchy'] = $this->Home_model->get_hierarchical_data();
        $data['product'] = $this->Product_model->get_product_by_id($p_id);
  
        $c_id = $data['product']['c_id'];

        $data['categories'] = $this->Product_model->get_categories();
        $data['products'] = $this->Product_model->get_products_by_category($c_id); // Fetch products for the specific category
        $data['sub_category'] = $this->Product_model->get_sub_category();


        $productData = $data['product'];
        $data['$productName'] = $productData['p_name'];
        $data['$categories_name'] = $productData['category_name'];
        $data['$sub_category_name'] = $productData['subcategory_name'];

        // echo '<pre>';
        // print_r($productData['application'] );
        // echo '<br>';
        // echo '<br>';
        // echo '<br> DDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDddd';
        // echo '<br>';

        // print_r($productData['features'] );

        // echo '</pre>';
        // exit;
 



        // Check if product is found, if not, you might want to redirect or show a 404 error
        if (!$data['product']) {
            show_404(); // Show a 404 error if product is not found
        }



        // Load views after data processing
        $this->load->view("layout/header.php", $data);

        $this->load->view("frontend/productDetail", $data);
        $this->load->view("layout/footer.php");
    }
}
