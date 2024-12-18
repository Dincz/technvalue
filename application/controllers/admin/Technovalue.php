<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Technovalue extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/Technovalue_model');
        $this->load->library('upload');
    }

    public function index()
    {
        $data['technical_updates'] = $this->Technovalue_model->get_updates();
        $this->load->view('admin/technovalue/index', $data);
    }

    public function create()
    {
        if ($this->input->post()) {
            // Prepare the data to be inserted
            $data = array(
                'u_title' => $this->input->post('u_title'),
                'u_description' => $this->input->post('u_description'),
                'status' => $this->input->post('status') ? 1 : 0
            );

            // Handle image upload
            if (!empty($_FILES['u_image']['name'])) {
                $config['upload_path'] = './uploads/icons/';
                $config['allowed_types'] = '*'; // Adjust as needed
                $config['max_size'] = 2048; // 2MB max size
                $config['overwrite'] = 1; // Overwrite existing file
                $this->upload->initialize($config);

                // Attempt to upload the file
                if ($this->upload->do_upload('u_image')) {
                    $upload_data = $this->upload->data();
                    $data['u_image'] = $upload_data['file_name']; // Add the new image to the data
                }
            }

            // Insert the technical update into the database
            $this->Technovalue_model->insert_update($data);
            $this->session->set_flashdata('success', 'Technical update has been created successfully.');
            redirect('admin/technovalue');
        }

        // Load the view for creating a new technical update
        $this->load->view('admin/technovalue/create');
    }

    public function edit($id)
    {
        $data['update'] = $this->Technovalue_model->get_update($id);

        if ($this->input->post()) {
            // Prepare the data to be updated
            $update_data = array(
                'u_title' => $this->input->post('u_title'),
                'u_description' => $this->input->post('u_description'),
                'status' => $this->input->post('status') ? 1 : 0
            );

            // Handle image upload
            if (!empty($_FILES['u_image']['name'])) {
                $config['upload_path'] = './uploads/icons/';
                $config['allowed_types'] = '*'; // Adjust as needed
                $config['max_size'] = 2048; // 2MB max size
                $config['overwrite'] = 1; // Overwrite existing file
                $this->upload->initialize($config);

                // Attempt to upload the file
                if ($this->upload->do_upload('u_image')) {
                    $upload_data = $this->upload->data();
                    $update_data['u_image'] = $upload_data['file_name']; // Add the new image to the data
                }
            } else {
                // Keep the existing image if not replaced
                $existing_update = $this->Technovalue_model->get_update($id);
                $update_data['u_image'] = $existing_update['u_image'];
            }

            // Update the database
            $this->Technovalue_model->update_update($id, $update_data);
            $this->session->set_flashdata('success', 'Technical update has been updated successfully.');
            redirect('admin/technovalue');
        }

        // Load the view for editing the technical update
        $this->load->view('admin/technovalue/edit', $data);
    }

    public function delete($id)
    {
        $this->Technovalue_model->delete_update($id);
        $this->session->set_flashdata('success', 'Technical update has been deleted successfully.');
        redirect('admin/technovalue');
    }
}
