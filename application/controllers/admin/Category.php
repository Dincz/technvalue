<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Category extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/CategoryModel');
        // $this->_table = 'category';
        // $this->_view_folder = 'admin/category';
        // $this->_view = 'category';
        // $this->_edit = 'edit';
    }

    public function index()
    {
        // Fetch all categories
        $data['categories'] = $this->CategoryModel->getAll();

        // echo '<pre>';
        // print_r($data);
        // exit;

        // Load the view and pass the categories data
        $this->load->view('admin/category/category', $data);
    }


    public function create()
    {
        // Load the CommonModel
        $this->load->model('admin/CategoryModel');
        // Ensure the model is loaded

        // Check if the form was submitted
        if ($this->input->post()) {
            // Prepare data for insertion
            $data = [
                'c_name' => trim($this->input->post('c_name') ?? ''), // Handle null values
                'description' => trim($this->input->post('description') ?? ''),
                'status' => trim($this->input->post('status') ?? ''),
                'created_date' => date('Y-m-d H:i:s'), // Store the current date and time
            ];

            // Add category to the database using the model
            $inserted = $this->CategoryModel->create($data);

            // Check if the insertion was successful
            if ($inserted) {
                $this->session->set_flashdata('success', 'Category Created Successfully.');
                redirect('admin/category'); // Redirect to the category list
            } else {
                $this->session->set_flashdata('error', 'Failed to Create Category.');
                redirect('admin/category/create'); // Redirect back to the create form
            }
        }

        // Load the create form view if not submitted
        $this->load->view('admin/category/create'); // Ensure this view is correct
    }





    public function edit($id)
{
    // Load the CategoryModel
    $this->load->model('admin/CategoryModel');

    // Check if the request is a POST request (to update data)
    if ($this->input->server('REQUEST_METHOD') === 'POST') {
        // Prepare the data array to store category information
        $data = [
            'c_name' => trim($this->input->post('c_name') ?? ''),
            'description' => trim($this->input->post('description') ?? ''),
            'status' => trim($this->input->post('status') ?? ''),
        ];

        // Update the category in the database using the CategoryModel
        $updated = $this->CategoryModel->update($id, $data);

        // Set flash messages based on the result of the update
        if ($updated) {
            $this->session->set_flashdata('success', 'Category updated successfully.');
        } else {
            $this->session->set_flashdata('error', 'Failed to update category.');
        }

        // Redirect back to the categories list or wherever necessary
        redirect('admin/category');
    } else {
        // Fetch the category data using the provided ID
        $data['data'] = $this->CategoryModel->get($id);

        if (!$data['data']) {
            $this->session->set_flashdata('error', 'Category not found.');
            redirect('admin/category');
        }

        // Load the view for editing, passing the fetched data
        $this->load->view('admin/category/edit', $data);
    }
}



public function delete()
{
    $id = trim($this->input->post('id'));

    // Use the CategoryModel to perform the deletion
    $this->load->model('admin/CategoryModel');
    $this->CategoryModel->delete($id);

    // Set flash message and redirect
    $this->session->set_flashdata('success', 'Category Deleted Successfully');
    redirect('admin/category'); // Adjust this redirect as needed
}


public function change_status()
{
    // Retrieve category ID and new status from the POST request
    $id = $this->input->post('id');
    $new_status = $this->input->post('status');
    
    // Update the status in the database using the CategoryModel
    $this->CategoryModel->change_status($id, $new_status);

    // Redirect back to the category list (you can change this if necessary)
    redirect('admin/category');
}



    public function status()
    {
        $id = trim($this->input->post('data'));
        $this->CommonModel->status(DATABASE, $this->_table, 'c_id', $id);
    }

    //    public function delete(){
    //        $id = $this->input->post('id');
    //        $this->product_model->delete($id)
    //        $this->session->set_flashdata('success', 'Product Deleted');
    //        redirect(base_url('admin/product'));
    //    }

}

/* End of file Index.php */
