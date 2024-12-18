<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Sub_category extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        
        // Load models
        $this->load->model('admin/CategoryModel');
        $this->load->model('admin/Sub_category_model');
    }

    // Display all active subcategories
    public function index()
    {
        // Fetch all active subcategories
        $data['sub_cat'] = $this->Sub_category_model->get_all();  // Fetch all subcategories
        $data['categories'] = $this->CategoryModel->getAll();  // Fetch all categories

        // Fetch all categories
        $categories = $this->CategoryModel->getAll();  // Fetch all categories

        // Create a category map (associative array where key is category id and value is category name)
        $categoryMap = [];
        foreach ($categories as $category) {
            $categoryMap[$category->c_id] = $category->c_name;
        }
        $data['categoryMap'] = $categoryMap;  // Pass the category map to the view

        // Pass data to the view
        $this->load->view('admin/sub_category/sub_category', $data);
    }

    // Create a new subcategory
    public function create()
    {
        // Validate input data
        $data = [
            'c_id' => trim($this->input->post('c_id')),
            'sc_name' => trim($this->input->post('name')),
            'description' => trim($this->input->post('description')),
            'status' => 0,  // Set default status to inactive (0)
            'created_date' => date('Y-m-d H:i:s')
        ];

        // Add subcategory using the model
        $this->Sub_category_model->create($data); 

        // Set flash data and redirect
        $this->session->set_flashdata('success', 'Sub Category Created');
        redirect(base_url('admin/sub_category'));
    }

    // Edit subcategory
    public function edit($sc_id)
    {
        // Fetch subcategory by ID
        $data['subcategory'] = $this->Sub_category_model->get_by_id($sc_id);
    
        // print_r($data);
        // exit;

        // If no subcategory found, show error message
        if (empty($data['subcategory'])) {
            $this->session->set_flashdata('error', 'Sub Category Not Found');
            redirect(base_url('admin/sub_category'));
        }
    
        // Fetch all categories for the category dropdown
        $data['categories'] = $this->CategoryModel->getAll();  // Fetch all categories
    
        // Pass the data to the view
        $this->load->view('admin/sub_category/edit', $data);
    }
    

    // Update subcategory details
    public function update()
    {
        // Validate and sanitize input data
        $data = [
            'c_id' => trim($this->input->post('c_id')),
            'sc_name' => trim($this->input->post('name')),
            'description' => trim($this->input->post('description'))
        ];

        $sc_id = trim($this->input->post('sc_id'));

        // Update the subcategory using the model
        $this->Sub_category_model->update($sc_id, $data);

        // Set flash data and redirect
        $this->session->set_flashdata('success', 'Sub Category Updated');
        redirect(base_url('admin/sub_category'));
    }

    // Delete a subcategory
    public function delete($sc_id)
    {
        // $sc_id = trim($this->input->post('id'));
        echo($sc_id);
        // exit;

        // Ensure the subcategory exists before attempting to delete
        if ($this->Sub_category_model->get_by_id($sc_id)) {
            exit;
            // $this->Sub_category_model->delete($sc_id);
            $this->session->set_flashdata('success', 'Sub Category Deleted');
        } else {
            $this->session->set_flashdata('error', 'Sub Category Not Found');
        }

        // Redirect after the action
        redirect(base_url('admin/Sub_category'));
    }

    // Change subcategory status
// Change subcategory status (active/inactive)
public function status() {
    // Get data from POST request
    $id = $this->input->post('id');
    $status = $this->input->post('status'); // 'active' or 'inactive'

    // Validate the data (optional)
    if (empty($id) || !in_array($status, ['active', 'inactive'])) {
        echo json_encode(['success' => false, 'message' => 'Invalid data']);
        return;
    }

    // Prepare the data for update
    $updateData = ['status' => $status];

    // Update the status in the database using the model
    $updateSuccess = $this->Sub_category_model->update($id, $updateData);

    // Check if the update was successful
    if ($updateSuccess) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false, 'message' => 'Status update failed']);
    }
}

    

    // Change category status (activate/deactivate)
    public function change_category_status($id, $status)
    {
        // Change the status of the category using the model
        $this->CategoryModel->change_status($id, $status);

        // Redirect with success message
        $this->session->set_flashdata('success', 'Category status updated');
        redirect(base_url('admin/sub_category'));
    }
}
