<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ExpertController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/ExpertModel');
        $this->load->library('upload');
    }

    // Display all experts
    public function index()
    {
        $data['experts'] = $this->ExpertModel->get_all_experts();
        $this->load->view('admin/expert/index', $data);
    }

    // Create a new expert
    public function create()
    {
        if ($this->input->post()) {
            echo '<pre>'; // Start preformatted text for better readability
            echo "Form submission detected.\n";

            // Set validation rules
            $this->form_validation->set_rules('name', 'Name', 'required|trim');
            $this->form_validation->set_rules('designation', 'Designation', 'required|trim');

            if ($this->form_validation->run() == false) {
                echo "Validation failed:\n";
                print_r(validation_errors());

                // Set flash data for error and redirect back
                $this->session->set_flashdata('error', validation_errors());
                redirect('admin/expert/create');
            } else {
                // Configure file upload
                $config['upload_path'] = './uploads/team/';
                $config['allowed_types'] = '*';
                $config['overwrite'] = 1; // Overwrite existing file
                $this->upload->initialize($config);

                // Attempt to upload the file
                if ($this->upload->do_upload('image')) {
                    echo 'Upload successful!';
                    $upload_data = $this->upload->data();

                    // Prepare data to insert
                    $data = [
                        'name' => $this->input->post('name'),
                        'image' => $upload_data['file_name'],
                        'designation' => $this->input->post('designation'),
                        'facebook_link' => $this->input->post('facebook_link'),
                        'linkdln_link' => $this->input->post('linkdln_link'),
                        'twitter_link' => $this->input->post('twitter_link'),
                        'status' => $this->input->post('status') ? 'active' : 'inactive'
                    ];

                    // Insert data into the database
                    $this->ExpertModel->insert_expert($data);
                    $this->session->set_flashdata('success', 'Expert has been added successfully.');
                    redirect('admin/expert');
                } else {
                    // Handle upload error
                    $upload_error = $this->upload->display_errors();
                    echo "Upload error:\n";
                    print_r($upload_error);
                    $this->session->set_flashdata('error', $upload_error);
                    redirect('admin/expert/create');
                }
            }
        }

        // Load the view for creating an expert
        $this->load->view('admin/expert/create');
    }

    // Edit an existing expert
    public function edit($id)
    {
        // Retrieve existing expert data
        $data['expert'] = $this->ExpertModel->get_expert($id);

        if ($this->input->post()) {
            echo '<pre>'; // Start preformatted text for better readability
            echo "Form submission detected.\n";

            // Set validation rules
            $this->form_validation->set_rules('name', 'Name', 'required|trim');
            $this->form_validation->set_rules('designation', 'Designation', 'required|trim');

            if ($this->form_validation->run() == false) {
                echo "Validation failed:\n";
                print_r(validation_errors());

                // Set flash data for error and redirect back
                $this->session->set_flashdata('error', validation_errors());
                redirect('admin/expert/edit/' . $id);
            } else {
                // Prepare update data
                $update_data = [
                    'name' => $this->input->post('name'),
                    'designation' => $this->input->post('designation'),
                    'facebook_link' => $this->input->post('facebook_link'),
                    'linkdln_link' => $this->input->post('linkdln_link'),
                    'twitter_link' => $this->input->post('twitter_link'),
                    'status' => $this->input->post('status') ? 1 : 0

                ];
                // print_r ($update_data);
                // exit;

                // Check for new image upload
                if ($_FILES['image']['name']) {
                    // Configure file upload
                    $config['upload_path'] = './uploads/team/';
                    $config['allowed_types'] = '*';
                    $config['overwrite'] = 1; // Overwrite existing file
                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);

                    // Attempt to upload the file
                    if ($this->upload->do_upload('image')) {
                        $upload_data = $this->upload->data();
                        $update_data['image'] = $upload_data['file_name']; // Add the new image to the data
                        echo "File uploaded successfully:\n";
                        print_r($upload_data);
                    } else {
                        // Handle upload error
                        $upload_error = $this->upload->display_errors();
                        echo "Upload error:\n";
                        print_r($upload_error);

                        // Set flash data for error and redirect back
                        $this->session->set_flashdata('error', $upload_error);
                        redirect('admin/expert/edit/' . $id);
                    }
                }

                // Update the expert in the database
                $this->ExpertModel->update_expert($id, $update_data);
                $this->session->set_flashdata('success', 'Expert has been updated successfully.');
                redirect('admin/expert');
            }
        }

        // Load the view for editing an expert
        $this->load->view('admin/expert/edit', $data);
    }

    // Delete an expert
    public function delete($id)
    {
        $this->ExpertModel->delete_expert($id);
        redirect('admin/expert');
    }
}
