<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TechnovalueUpdates extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/TechnovalueUpdatesModel');
        $this->load->library('session');
        $this->load->helper(['url', 'form']);
        $this->load->library('upload');
    }

    public function index()
    {
        $data['updates'] = $this->TechnovalueUpdatesModel->get_all_updates();
        $this->load->view('admin/technovalue_updates/view', $data);
    }

    public function create()
    {
        // Load the upload library
        $this->load->library('upload');
    
        if ($this->input->post()) {
            // Prepare data for insertion
            $data = [
                'u_title' => $this->input->post('title'),
                'u_image' => $this->upload_image('u_image'), // Handle image upload
                'u_description' => $this->input->post('description'), // Get the description
                'status' => 1, // Default status is active
                'created_date' => date('Y-m-d H:i:s'), // Current date
            ];
    
            // Handle image upload errors
            if ($data['u_image'] === null) {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error', 'Image upload failed: ' . $error);
                redirect('admin/technovalueupdates/create'); // Redirect back to create page
                return; // Stop further execution
            }
    
            // Save to the database
            $this->TechnovalueUpdatesModel->insert($data);
    
            // Set success message and redirect
            $this->session->set_flashdata('success', 'Technovalue Update created successfully.');
            redirect('admin/technovalueupdates');
        }
    
        // Load the create view
        $this->load->view('admin/technovalue_updates/create');
    }
    
    private function upload_image($field_name)
    {
        // Configure upload settings
        $config['upload_path'] = './uploads/services/';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['max_size'] = 2048; // 2MB
        $config['encrypt_name'] = true;
    
        $this->upload->initialize($config);
    
        // Perform upload and return file name or null
        if ($this->upload->do_upload($field_name)) {
            return $this->upload->data('file_name');
        }
    
        return null;
    }
    

    public function edit($id)
    {
        $data['update'] = $this->TechnovalueUpdatesModel->get_update($id);

        if (!$data['update']) {
            show_404();
        }

        if ($this->input->post()) {
            $updated_data = [
                'u_title' => $this->input->post('title'),
                'u_image' => $this->upload_image('u_image') ?: $data['update']['u_image'],
                'u_description' => $this->input->post('description'),
                'status' => $this->input->post('status') ? 1 : 0,
            ];

            $this->TechnovalueUpdatesModel->update($id, $updated_data);
            $this->session->set_flashdata('success', 'Technovalue Update updated successfully.');
            redirect('admin/technovalueupdates');
        }

        $this->load->view('admin/technovalue_updates/edit', $data);
    }

    public function delete($id)
    {
        $this->TechnovalueUpdatesModel->delete($id);
        $this->session->set_flashdata('success', 'Technovalue Update deleted successfully.');
        redirect('admin/technovalueupdates');
    }

    // private function upload_image($field_name)
    // {
    //     $config['upload_path'] = './uploads/technovalue_updates/';
    //     $config['allowed_types'] = 'jpg|jpeg|png|gif';
    //     $config['max_size'] = 2048; // 2MB
    //     $config['encrypt_name'] = true;

    //     $this->upload->initialize($config);

    //     if ($this->upload->do_upload($field_name)) {
    //         return $this->upload->data('file_name');
    //     }

    //     return null;
    // }
}
