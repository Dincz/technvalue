<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/CommonModel');
        $this->load->library('session');
        $this->load->helper('url'); // Load URL helper for base_url()
        $this->load->library('upload');
    }

    public function index()
    {
        $data['home_section'] = $this->CommonModel->getRow(DATABASE, 'home_table', array('h_id' => 1));
        $data['edit_mode'] = false; // Default to view mode
        $this->load->view('admin/home/home', $data);
    }

    public function edit($id)
    {
        $data['home_section'] = $this->CommonModel->getRow(DATABASE, 'home_table', array('h_id' => 1));
        $data['edit_mode'] = true; // Set to edit mode
        $this->load->view('admin/home/home', $data);
    }

    public function update()
    {
        $id = 1;

        // Set up upload configuration for the hero banner image
        $config['upload_path'] = './uploads/heroBanner/'; 
        $config['allowed_types'] = '*'; 
        // $config['max_size'] = 2048; 
        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        // Initialize file variables
        $heroBannerImg = $this->input->post('existing_heroBanner_img');
        $aboutThumbnailImg = $this->input->post('existing_about_thumbnail');

        // Handle hero banner image upload
        if (!empty($_FILES['hero_banner']['name'])) {
            if ($this->upload->do_upload('hero_banner')) {
                $uploadData = $this->upload->data();
                $heroBannerImg = $uploadData['file_name'];
            } else {
                $this->session->set_flashdata('error', $this->upload->display_errors());
                redirect('admin/home/');
            }
        }

        // Handle about thumbnail image upload
        if (!empty($_FILES['about_thumbnail']['name'])) {
            if ($this->upload->do_upload('about_thumbnail')) {
                $uploadData = $this->upload->data();
                $aboutThumbnailImg = $uploadData['file_name'];
            } else {
                $this->session->set_flashdata('error', $this->upload->display_errors());
                redirect('admin/home/');
            }
        }

        // Prepare data for updating
        $data = [
            'hero_banner' => $heroBannerImg,
            'about_thumbnail' => $aboutThumbnailImg,
            'about_title' => $this->input->post('about_title'),
            'about_description' => $this->input->post('about_description')
        ];

        // Update data in the database
        $updateResult = $this->CommonModel->edit(DATABASE, 'home_table', $data, array('h_id' => $id));
        if ($updateResult) {
            $this->session->set_flashdata('success', 'Home section updated successfully!');
            redirect('admin/home'); // Redirect to the home section list or a different page
        } else {
            $this->session->set_flashdata('error', 'Failed to update home section.');
            redirect('admin/home/edit/' . $id); // Redirect back to the edit page
        }
    }
}
