<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SpecializationController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/Specialization_model');
        $this->load->library('form_validation');
    }

    // Display all specializations
    public function index()
    {
        $data['specializations'] = $this->Specialization_model->get_all();
        $this->load->view('admin/specialization/index', $data);
    }

    // Edit a specialization
    public function edit($id)
    {
        $data['specialization'] = $this->Specialization_model->get_by_id($id);

        if ($this->input->post()) {
            // Set validation rules
            $this->form_validation->set_rules('specialization_title', 'Specialization Title', 'required|trim');
            $this->form_validation->set_rules('specialization_description', 'Description', 'required|trim');

            if ($this->form_validation->run() == false) {
                // Validation failed
                $this->load->view('admin/specialization/edit', $data);
            } else {
                // Prepare update data
                $update_data = [
                    'specialization_title' => $this->input->post('specialization_title'),
                    'specialization_description' => $this->input->post('specialization_description'),
                    'status' => $this->input->post('status') // Include status in update
                ];

                // Check for new icon upload
                // print_r($_FILES);
                // exit;
                if ($_FILES['specialization_icon']['name']) {
                    // Configure file upload
                    $config['upload_path'] = './uploads/icons/';
                    $config['allowed_types'] = '*';

                    $config['overwrite'] = 1; // Overwrite existing file
                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);

                    // Attempt to upload the file
                    if ($this->upload->do_upload('specialization_icon')) {
                        $upload_data = $this->upload->data();
                        $update_data['specialization_icon'] = $upload_data['file_name']; // Add the new icon to the data
                    } else {
                        // Handle upload error
                        $upload_error = $this->upload->display_errors();
                        $this->session->set_flashdata('error', $upload_error);
                        redirect('admin/specialization/edit/' . $id);
                    }
                }

                // Update the specialization in the database
                $this->Specialization_model->update($id, $update_data);
                $this->session->set_flashdata('success', 'Specialization updated successfully.');
                redirect('admin/specialization'); // Redirect to index
            }
        }

        // Load the view for editing specialization
        $this->load->view('admin/specialization/edit', $data);
    }

}
