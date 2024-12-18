<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Product extends CI_Controller
{

    private $_table;
    private $_table2;
    private $_table3;
    private $_view_folder;
    private $_view;
    private $_edit;

    public function __construct()
    {
        parent::__construct();
        // $this->load->model('admin/CommonModel');
        $this->load->model('Product_model');
        // $this->load->model('Category_model');
        // $this->_table = 'product';
        // $this->_table2 = 'category';
        // $this->_table3 = 'sub_category';
        // $this->_view_folder = 'admin/product';
        // $this->_view = 'product';
        // $this->_edit = 'edit';
    }

    public function index()
    {

        $data['categories'] = $this->Product_model->get_categories();
        $data['products'] = $this->Product_model->get_products();
        $data['sub_category'] = $this->Product_model->get_sub_category();

        // echo '<pre>';
        // print_r($data);
        // exit();

        $this->load->view('admin/product/product', $data);
    }
    // public function display_data()
    // {
    //     $this->db->select('products.*, category.c_name');
    //     $this->db->from('products');
    //     $this->db->join('category', 'category.c_id = products.c_id', 'left');
    //     $query = $this->db->get();

    //     $data['products'] = $query->result_array(); // Fetch the result and pass it to the view

    //     // Load the view and pass the products and categories data
    //     $this->load->view('admin/product/display', $data);
    // }





    public function add()
    {
        if ($this->input->post()) {
            // Initialize the array to store the uploaded data
            $uploaded_files = array();

            // Define the general configuration for file uploads
            $config['max_size'] = 1024 * 10; // Max size 10MB
            $config['overwrite'] = 1;
            $this->load->library('upload');

            // Product image upload configuration
            $config['upload_path'] = './uploads/Product';
            $config['allowed_types'] = '*';  // You can restrict types if necessary
            $this->upload->initialize($config);

            // Upload product image
            if ($this->upload->do_upload('image')) {
                $main_img_data = $this->upload->data();
                $uploaded_files['image'] = $main_img_data['file_name'];
            } else {
                $uploaded_files['image_error'] = $this->upload->display_errors();
            }

            // Brand image upload configuration
            $config['upload_path'] = './uploads/Brand';
            $this->upload->initialize($config);

            if ($this->upload->do_upload('brand')) {
                $brand_img_data = $this->upload->data();
                $uploaded_files['brand'] = $brand_img_data['file_name'];
            } else {
                $uploaded_files['brand_error'] = $this->upload->display_errors();
            }

            // PDF upload configuration
            $config['upload_path'] = './uploads/Docs';
            $this->upload->initialize($config);

            if ($this->upload->do_upload('pdf')) {
                $pdf_data = $this->upload->data();
                $uploaded_files['pdf'] = $pdf_data['file_name'];
            } else {
                $uploaded_files['pdf_error'] = $this->upload->display_errors();
            }

            // Prepare product data to insert into the database
            $data = array(
                'p_name'      => $this->input->post('p_name'),
                'description' => $this->input->post('description'),
                'application' => $this->input->post('application'),
                'features'    => $this->input->post('features'),
                'video_link'  => $this->input->post('video_link'),
                'image'       => $uploaded_files['image'] ?? null,
                'brand'       => $uploaded_files['brand'] ?? null,
                'pdf'         => $uploaded_files['pdf'] ?? null,
                'c_id'        => $this->input->post('c_id'),
                'sc_id'       => $this->input->post('sc_id'),
            );

            if (!empty($uploaded_files['image_error']) || !empty($uploaded_files['brand_error']) || !empty($uploaded_files['pdf_error'])) {
                $errors = array_filter([
                    'image_error' => $uploaded_files['image_error'] ?? null,
                    'brand_error' => $uploaded_files['brand_error'] ?? null,
                    'pdf_error' => $uploaded_files['pdf_error'] ?? null,
                ]);
                echo '<pre>';
                echo "The following errors occurred during the upload:\n";
                print_r($errors);
            } else {
                $inserted = $this->Product_model->add_product($data);

                if ($inserted) {
                    $this->session->set_flashdata('success', 'Product added successfully.');
                    redirect('admin/product');
                } else {
                    $this->session->set_flashdata('error', 'Failed to add the product.');
                    redirect('admin/product/display');
                }
            }
        } else {
            // Load the categories and sub-categories from the database and pass them to the view
            $data['categories'] = $this->Product_model->get_categories();
            $data['sub_categories'] = $this->Product_model->get_sub_category();  // Ensure you fetch sub-categories

            $this->load->view('admin/product/add', $data);
        }
    }



    public function edit($id)
    {
        // Load the Product_model
        $this->load->model('Product_model');

        // Fetch the existing product data based on the ID
        $data['product'] = $this->Product_model->get_product_by_id($id);
        $data['categories'] = $this->Product_model->get_categories();
        $data['sub_categories'] = $this->Product_model->get_sub_category();

        // echo '<pre>';
        // print_r($data);
        // exit();

        // Check if the product exists
        if (!$data['product']) {
            show_404(); // Show a 404 error if the product is not found
        }

        // If the form is submitted
        if ($this->input->post()) {
            // Initialize the array to store the uploaded data
            $uploaded_files = array();
            $this->load->library('upload'); // Load the upload library

            // Define the general configuration for file uploads
            $config['max_size'] = 1024 * 10; // Max size 10MB
            $config['overwrite'] = 1; // Overwrite the existing file

            // Product image upload configuration
            $config['upload_path'] = './uploads/Product';
            $config['allowed_types'] = '*';  // Adjust allowed types as needed
            $this->upload->initialize($config);

            // Function to handle file uploads
            $handle_upload = function ($field_name, $default_file) use (&$uploaded_files) {
                if ($_FILES[$field_name]['name']) {
                    if ($this->upload->do_upload($field_name)) {
                        $uploaded_files[$field_name] = $this->upload->data('file_name');
                    } else {
                        $uploaded_files[$field_name . '_error'] = $this->upload->display_errors();
                    }
                } else {
                    // If no new file is uploaded, keep the existing file
                    $uploaded_files[$field_name] = $default_file;
                }
            };

            // Upload product image
            $handle_upload('image', $data['product']['image']);

            // Change upload path for brand image
            $config['upload_path'] = './uploads/Brand';
            $this->upload->initialize($config);
            // Upload brand image
            $handle_upload('brand', $data['product']['brand']);

            // Change upload path for PDF
            $config['upload_path'] = './uploads/Docs';
            $this->upload->initialize($config);
            // Upload PDF
            $handle_upload('pdf', $data['product']['pdf']);

            // Prepare product data to update in the database
            $update_data = array(
                'p_name'      => $this->input->post('p_name'),
                'description' => $this->input->post('description'),
                'application' => $this->input->post('application'),
                'features'    => $this->input->post('features'),
                'video_link'  => $this->input->post('video_link'),
                'image'       => $uploaded_files['image'] ?? null,
                'brand'       => $uploaded_files['brand'] ?? null,
                'pdf'         => $uploaded_files['pdf'] ?? null,
                'c_id'        => $this->input->post('c_id'),
                'sc_id'       => $this->input->post('sc_id'),
            );

            // Check for upload errors
            $upload_errors = array_filter([
                'image_error' => $uploaded_files['image_error'] ?? null,
                'brand_error' => $uploaded_files['brand_error'] ?? null,
                'pdf_error'   => $uploaded_files['pdf_error'] ?? null,
            ]);

            if (!empty($upload_errors)) {
                // If there are errors, display them
                $this->session->set_flashdata('upload_errors', $upload_errors);
                redirect("admin/product/edit/$id"); // Redirect back to edit page with errors
            } else {
                // Update product in the database
                $updated = $this->Product_model->update_product($id, $update_data);

                if ($updated) {
                    $this->session->set_flashdata('success', 'Product updated successfully.');
                    redirect('admin/product');
                } else {
                    $this->session->set_flashdata('error', 'Failed to update the product.');
                    redirect("admin/product/edit/$id"); // Redirect back to edit page on failure
                }
            }
        } else {
            // Load the edit view and pass the product data
            $this->load->view('admin/product/edit', $data);
        }
    }


    public function delete($id)
    {
        // Load the Product_model
        $this->load->model('Product_model');

        // Check if the product exists
        $product = $this->Product_model->get_product_by_id($id);
        if (!$product) {
            // Product not found
            $this->session->set_flashdata('error', 'Product not found');
            show_404(); // Or redirect to a specific page
            return;
        }

        // Attempt to delete the product
        $deleted = $this->Product_model->delete_product($id); // Call the delete function
        if ($deleted) {
            // Set a success message and redirect
            $this->session->set_flashdata('success', 'Product deleted successfully.');
        } else {
            // Set an error message if deletion fails
            $this->session->set_flashdata('error', 'Failed to delete the product.');
        }

        // Redirect to the product list or display page
        redirect('admin/product'); // Ensure you uncomment this
    }
}

/* End of file Index.php */
