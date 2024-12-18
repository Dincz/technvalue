<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Contact_us extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/CommonModel');
        $this->load->library('session'); // Ensure session library is loaded
        $this->load->helper('url'); // Load URL helper for base_url()
        $this->load->library('upload'); // Load upload library
    }

    public function index()
    {
        $data['data'] = $this->CommonModel->getRecords(DATABASE, 'contact_us');
        $data['edit_mode'] = false; // Default to view mode
        $this->load->view('admin/contact_us/contact_us', $data);
    }

    public function edit($id)
    {
        $data['contact_us'] = $this->CommonModel->getRow(DATABASE, 'contact_us', array('id' => $id));
        $this->load->view('admin/contact_us/edit', $data);
    }
    public function update()
    {
        $id = 1;

        // Set up upload configuration for the hero banner image
        $config['upload_path'] = './uploads/heroBanner/';
        $config['allowed_types'] = '*'; 
        $config['max_size'] = 20048; 
        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        // Initialize file variable
        $heroBannerImg = $this->input->post('existing_heroBanner_img');

        if (!empty($_FILES['heroBanner_img']['name'])) {
            // If a new file is uploaded
            if ($this->upload->do_upload('heroBanner_img')) {
                $uploadData = $this->upload->data();
                $heroBannerImg = $uploadData['file_name'];
            } else {
                // File upload error
                $this->session->set_flashdata('error', $this->upload->display_errors());
                redirect('admin/contact_us');
                // redirect('admin/contact_us/edit/' . $id); // Redirect to the edit page with an error
            }
        }

        // Prepare data for updating
        $data = [
            'content' => $this->input->post('content'),
            'office_address' => $this->input->post('office_address'),
            'phone_no' => $this->input->post('phone_no'),
            'email_id' => $this->input->post('email_id'),
            'map_url' => $this->input->post('map_url'),
            'heroBanner_img' => $heroBannerImg
        ];

        // Update data in the database
        // $this->load->model('CommonModel'); // Ensure you load the model
        $updateResult = $this->CommonModel->edit(DATABASE, 'contact_us', $data, array('id' => $id));
        if ($updateResult) {
            $this->session->set_flashdata('success', 'Contact information updated successfully!');
            redirect('admin/contact_us'); // Redirect to the contact_us list or a different page
        } else {
            $this->session->set_flashdata('error', 'Failed to update contact information.');
            redirect('admin/contact_us'); // Redirect back to the contact_us list or edit page
        }



    }

}