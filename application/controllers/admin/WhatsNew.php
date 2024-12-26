<?php
defined('BASEPATH') or exit('No direct script access allowed');

class WhatsNew extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/WhatsNew_model');
    }

    public function index()
    {
        $data['whats_new'] = $this->WhatsNew_model->get_all();
        $this->load->view('admin/whatsnew/view', $data);
    }

    public function create()
    {
        // Load the upload library
        $this->load->library('upload');

        if ($this->input->post()) {
            // Prepare data for insertion
            $data = [
                'w_title' => $this->input->post('title'), // Get the title
                'w_image' => $this->upload_image('w_image'), // Handle image upload
                'w_description' => $this->input->post('description'), // Get the description
                'status' => 1, // Default status as active
                'created_date' => date('Y-m-d H:i:s'), // Current date and time
            ];

            // Check if image upload failed
            if ($data['w_image'] === null) {
                $error = $this->upload->display_errors();
                log_message('error', 'Image upload failed: ' . $error); // Log the error
                $this->session->set_flashdata('error', 'Image upload failed: ' . $error); // Flash error message
                redirect('admin/whatsnew/create'); // Redirect back to the create page
                return; // Stop further execution
            }

            // Save to the database
            $this->WhatsNew_model->insert($data);
            $this->session->set_flashdata('success', 'New item created successfully.');
            redirect('admin/whatsnew');
        }

        // Load the create view
        $this->load->view('admin/whatsnew/create');
    }

    // Helper function for image upload
    private function upload_image($field_name)
    {
        $config['upload_path'] = './uploads/services/';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['max_size'] = 2048; // 2MB max
        $config['encrypt_name'] = true; // Rename the file for uniqueness

        $this->upload->initialize($config);

        if ($this->upload->do_upload($field_name)) {
            return $this->upload->data('file_name'); // Return uploaded file name
        } else {
            return null; // Return null if upload fails
        }
    }


    public function edit($id)
    {
        $data['whats_new'] = $this->WhatsNew_model->get($id);

        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $updateData = [
                'w_title' => $this->input->post('title'),
                'w_description' => $this->input->post('description'),
                'status' => $this->input->post('status'),
            ];

            // Handle image upload
            if (!empty($_FILES['w_image']['name'])) {
                $config['upload_path'] = './uploads/services';
                $config['allowed_types'] = 'jpg|jpeg|png';
                $config['file_name'] = time() . '_' . $_FILES['w_image']['name'];
                $this->load->library('upload', $config);

                if ($this->upload->do_upload('w_image')) {
                    $uploadData = $this->upload->data();
                    $updateData['w_image'] = $uploadData['file_name'];
                } else {
                    $this->session->set_flashdata('error', $this->upload->display_errors());
                    redirect('admin/whatsnew/edit/' . $id);
                }
            }

            $this->WhatsNew_model->update($id, $updateData);
            $this->session->set_flashdata('success', 'Item updated successfully.');
            redirect('admin/whatsnew');
        }

        $this->load->view('admin/whatsnew/edit', $data);
    }

    public function delete($id)
    {
        $this->WhatsNew_model->delete($id);
        $this->session->set_flashdata('success', 'Item deleted successfully.');
        redirect('admin/whatsnew');
    }
}
