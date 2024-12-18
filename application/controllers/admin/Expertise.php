<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Expertise extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('admin/Expertise_model');
    }

    public function index()
    {
        $data['expertise'] = $this->Expertise_model->get_all();
        $this->load->view('admin/expertise/index', $data);
    }

    public function create()
    {

        if ($this->input->post()) {

            echo '<pre>'; // Start preformatted text for better readability
            echo "Form submission detected.\n";

            // Set validation rules
            $this->form_validation->set_rules('title', 'Title', 'required|trim');
            $this->form_validation->set_rules('description', 'Description', 'required|trim');

            if ($this->form_validation->run() == false) {
                echo "Validation failed:\n";
                print_r(validation_errors());

                // Set flash data for error and redirect back
                $this->session->set_flashdata('error', validation_errors());
                redirect('admin/expertise/create');
            } else {

                // Configure file upload
                $config['upload_path'] = './uploads/icons/';

                $config['allowed_types'] = '*';
                $config['overwrite'] = 1;
                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                // Attempt to upload the file
                // print_r($_FILES['icon']);
                // exit;
                if ($this->upload->do_upload('icon')) {
                    echo 'Upload successful!';
                    //    exit ;
                    $upload_data = $this->upload->data();
                    // print($upload_data);
                    // exit;
                    // echo "File uploaded successfully:\n";
                    // print_r($upload_data);

                    $data = [
                        'icon' => $upload_data['file_name'],
                        'title' => $this->input->post('title'),
                        'description' => $this->input->post('description'),
                        'status' => $this->input->post('status') ? 1 : 0
                    ];

                    echo "Data to be inserted:\n";
                    print_r($data);

                    // Insert data into the database
                    $this->Expertise_model->insert($data);
                    $this->session->set_flashdata('success', 'Expertise has been added successfully.');
                    redirect('admin/expertise');
                } else {
                    // Handle upload error
                    $upload_error = $this->upload->display_errors();
                    echo "Upload error:\n";
                    print_r($upload_error);
                    exit;

                    $this->session->set_flashdata('error', $upload_error);
                    redirect('admin/expertise/create');
                }
            }
        }

        // Load the view for creating expertise
        $this->load->view('admin/expertise/create');
    }



    public function edit($id)
    {
        // Retrieve existing expertise data
        $data['expertise'] = $this->Expertise_model->get_by_id($id);

        if ($this->input->post()) {
            echo '<pre>'; // Start preformatted text for better readability
            echo "Form submission detected.\n";

            // Set validation rules
            $this->form_validation->set_rules('title', 'Title', 'required|trim');
            $this->form_validation->set_rules('description', 'Description', 'required|trim');

            if ($this->form_validation->run() == false) {
                echo "Validation failed:\n";
                print_r(validation_errors());

                // Set flash data for error and redirect back
                $this->session->set_flashdata('error', validation_errors());
                redirect('admin/expertise/edit/' . $id);
            } else {
                // Prepare update data
                $update_data = [
                    'title' => $this->input->post('title'),
                    'description' => $this->input->post('description'),
                    'status' => $this->input->post('status') ? 1 : 0
                ];

                // Check for new icon upload
                if ($_FILES['icon']['name']) {
                    // Configure file upload
                    $config['upload_path'] = './uploads/icons/';
                    $config['allowed_types'] = 'gif|jpg|png|jpeg';
                    $config['overwrite'] = 1; // Overwrite existing file
                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);

                    // Attempt to upload the file
                    if ($this->upload->do_upload('icon')) {
                        $upload_data = $this->upload->data();
                        $update_data['icon'] = $upload_data['file_name']; // Add the new icon to the data
                        echo "File uploaded successfully:\n";
                        print_r($upload_data);
                    } else {
                        // Handle upload error
                        $upload_error = $this->upload->display_errors();
                        echo "Upload error:\n";
                        print_r($upload_error);

                        // Set flash data for error and redirect back
                        $this->session->set_flashdata('error', $upload_error);
                        redirect('admin/expertise/edit/' . $id);
                    }
                }

                // Update the expertise in the database
                $this->Expertise_model->update($id, $update_data);
                $this->session->set_flashdata('success', 'Expertise has been updated successfully.');
                redirect('admin/expertise');
            }
        }

        // Load the view for editing expertise
        $this->load->view('admin/expertise/edit', $data);
    }


    public function delete($id)
    {
        $this->Expertise_model->delete($id);
        redirect('admin/expertise');
    }
}
