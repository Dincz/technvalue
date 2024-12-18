<?php

defined('BASEPATH') or exit('No direct script access allowed');

class BlogCategory extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/CommonModel');
        $this->load->library('session');
        $this->load->helper('url');
    }

    // Display all blog categories
    public function index()
    {
        $data['categories'] = $this->CommonModel->getRecords(DATABASE, 'blog_category');
        $data['edit_mode'] = false;
        $this->load->view('admin/blog/blog_category', $data);
    }

    // Show form to create a new category
    public function create()
    {
        $data['edit_mode'] = false;
        $this->load->view('admin/category/create_category', $data);
    }

    // Store a new category
    public function store()
    {
        $data = [
            'name'        => $this->input->post('name'),
            'description' => $this->input->post('description'),
            'status'      => $this->input->post('status')
        ];

        $insertResult = $this->CommonModel->add(DATABASE, 'blog_category', $data);
        $message = $insertResult ? 'Category created successfully!' : 'Failed to create category.';
        $this->session->set_flashdata($insertResult ? 'success' : 'error', $message);
        redirect('admin/blogcategory');
    }

    // Show form to edit an existing category
    public function edit($bc_id)
    {
        $data['category'] = $this->CommonModel->getRow(DATABASE, 'blog_category', ['bc_id' => $bc_id]);

        if (empty($data['category'])) {
            show_404();
        }

        $data['edit_mode'] = true;
        $this->load->view('admin/blog/blog_category', $data);
    }

    // Update an existing category
    public function update()
    {
        $bc_id = $this->input->post('bc_id');
        $data = [
            'name'        => $this->input->post('name'),
            'description' => $this->input->post('description'),
            'status'      => $this->input->post('status')
        ];

        $updateResult = $this->CommonModel->edit(DATABASE, 'blog_category', $data, ['bc_id' => $bc_id]);
        $message = $updateResult ? 'Category updated successfully!' : 'Failed to update category.';
        $this->session->set_flashdata($updateResult ? 'success' : 'error', $message);
        redirect('admin/blogcategory');
    }

    // Delete a category
    public function delete($bc_id)
    {
        if (empty($bc_id)) {
            show_404();
        }

        $deleteResult = $this->CommonModel->delete(DATABASE, 'blog_category', ['bc_id' => $bc_id]);
        $message = $deleteResult ? 'Category deleted successfully!' : 'Failed to delete category.';
        $this->session->set_flashdata($deleteResult ? 'success' : 'error', $message);
        redirect('admin/blogcategory');
    }
}
