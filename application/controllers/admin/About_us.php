<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About_us extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/About_us_model');
    }

    // Display the About Us page
    public function index()
    {
        $data['about'] = $this->About_us_model->get_content();
        $this->load->view('admin/about_us/about_us_view', $data);
    }

    // Create new About Us content
    // public function create()
    // {
    //     if ($this->input->post()) {
    //         $data = [
    //             'about_us_description' => $this->input->post('about_us_description'),
    //             'about_us_image' => $this->input->post('about_us_image'), // Handle file upload separately
    //             'why_choose_us_image' => $this->input->post('why_choose_us_image'),
    //             'dod_video_link' => $this->input->post('dod_video_link'),
    //             'dod_image' => $this->input->post('dod_image'),
    //             'dod_comment' => $this->input->post('dod_comment'),
    //             'dod_name' => $this->input->post('dod_name'),
    //             'dod_designation' => $this->input->post('dod_designation'),
    //             'dod_name_1' => $this->input->post('dod_name_1'),
    //             'dod_image_1' => $this->input->post('dod_image_1'),
    //             'dod_comment_1' => $this->input->post('dod_comment_1'),
    //             'dod_designation_1' => $this->input->post('dod_designation_1'),
    //             'vision' => $this->input->post('vision'),
    //             'mission' => $this->input->post('mission'),
    //             'value' => $this->input->post('value'),
    //         ];
    //         $this->About_us_model->create_content($data);
    //         redirect('admin/about_us/about_us_view');
    //     }
    //     $this->load->view('admin/about_us/about_us_create'); // Create view for adding content
    // }

    // Edit existing About Us content
    public function edit($id)
    {
        // Retrieve existing about us content
        $data['about'] = $this->About_us_model->get_content_by_id($id);

        if ($this->input->post()) {
            echo '<pre>'; // Start preformatted text for better readability
            echo "Form submission detected.\n";

            // Set validation rules (customize as needed)
            $this->form_validation->set_rules('about_us_description', 'Description', 'required|trim');
            // Add additional validation rules for other fields as necessary

            if ($this->form_validation->run() == false) {
                echo "Validation failed:\n";
                print_r(validation_errors());

                // Set flash data for error and redirect back
                $this->session->set_flashdata('error', validation_errors());
                redirect('admin/about_us/edit/' . $id);
            } else {
                // Prepare the data to be updated
                $update_data = [
                    'about_us_description' => $this->input->post('about_us_description'),
                    'dod_video_link' => $this->input->post('dod_video_link'),
                    'dod_name' => $this->input->post('dod_name'),
                    'dod_comment' => $this->input->post('dod_comment'),
                    'dod_designation' => $this->input->post('dod_designation'),
                    'dod_name_1' => $this->input->post('dod_name_1'),
                    'dod_comment_1' => $this->input->post('dod_comment_1'),
                    'dod_designation_1' => $this->input->post('dod_designation_1'),
                    'vision' => $this->input->post('vision'),
                    'mission' => $this->input->post('mission'),
                    'value' => $this->input->post('value')
                ];

                // Handle image upload
                if (!empty($_FILES['about_us_image']['name'])) {
                    $config['upload_path'] = './uploads/about/';
                    $config['allowed_types'] = '*';
                    $config['max_size'] = 2048; // 2MB max size
                    $config['overwrite'] = 1; // Overwrite existing file
                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);

                    // Attempt to upload the file
                    if ($this->upload->do_upload('about_us_image')) {
                        $upload_data = $this->upload->data();
                        $update_data['about_us_image'] = $upload_data['file_name']; // Add the new image to the data
                        echo "File uploaded successfully:\n";
                        print_r($upload_data);
                    } else {
                        // Handle upload error
                        $upload_error = $this->upload->display_errors();
                        echo "Upload error:\n";
                        print_r($upload_error);

                        // Set flash data for error and redirect back
                        $this->session->set_flashdata('error', $upload_error);
                        redirect('admin/about_us/edit/' . $id);
                    }
                }
                if (!empty($_FILES['why_choose_us_image']['name'])) {
                    $config['upload_path'] = './uploads/about/';
                    $config['allowed_types'] = '*';
                    $config['max_size'] = 2048; // 2MB max size
                    $config['overwrite'] = 1; // Overwrite existing file
                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);

                    // Attempt to upload the file
                    if ($this->upload->do_upload('why_choose_us_image')) {
                        $upload_data = $this->upload->data();
                        $update_data['why_choose_us_image'] = $upload_data['file_name']; // Add the new image to the data
                        echo "File uploaded successfully:\n";
                        print_r($upload_data);
                    } else {
                        // Handle upload error
                        $upload_error = $this->upload->display_errors();
                        echo "Upload error:\n";
                        print_r($upload_error);

                        // Set flash data for error and redirect back
                        $this->session->set_flashdata('error', $upload_error);
                        redirect('admin/about_us/edit/' . $id);
                    }
                }
                if (!empty($_FILES['dod_image']['name'])) {
                    $config['upload_path'] = './uploads/about/';
                    $config['allowed_types'] = '*';
                    $config['max_size'] = 2048; // 2MB max size
                    $config['overwrite'] = 1; // Overwrite existing file
                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);

                    // Attempt to upload the file
                    if ($this->upload->do_upload('dod_image')) {
                        $upload_data = $this->upload->data();
                        $update_data['dod_image'] = $upload_data['file_name']; // Add the new image to the data
                        echo "File uploaded successfully:\n";
                        print_r($upload_data);
                    } else {
                        // Handle upload error
                        $upload_error = $this->upload->display_errors();
                        echo "Upload error:\n";
                        print_r($upload_error);

                        // Set flash data for error and redirect back
                        $this->session->set_flashdata('error', $upload_error);
                        redirect('admin/about_us/edit/' . $id);
                    }
                }
                if (!empty($_FILES['dod_image_1']['name'])) {
                    $config['upload_path'] = './uploads/about/';
                    $config['allowed_types'] = '*';
                    $config['max_size'] = 2048; // 2MB max size
                    $config['overwrite'] = 1; // Overwrite existing file
                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);

                    // Attempt to upload the file
                    if ($this->upload->do_upload('dod_image_1')) {
                        $upload_data = $this->upload->data();
                        $update_data['dod_image_1'] = $upload_data['file_name']; // Add the new image to the data
                        echo "File uploaded successfully:\n";
                        print_r($upload_data);
                    } else {
                        // Handle upload error
                        $upload_error = $this->upload->display_errors();
                        echo "Upload error:\n";
                        print_r($upload_error);

                        // Set flash data for error and redirect back
                        $this->session->set_flashdata('error', $upload_error);
                        redirect('admin/about_us/edit/' . $id);
                    }
                }

                // Update the database
                $this->About_us_model->update_content($id, $update_data);
                $this->session->set_flashdata('success', 'About Us content has been updated successfully.');
                redirect('admin/about_us/');
            }
        }

        // Load the view for editing about us content
        $this->load->view('admin/about_us/about_us_edit', $data);
    }


}
