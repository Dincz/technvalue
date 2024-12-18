<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Banner extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/Banner_model');
        // $this->load->model('admin/Blog_model');
        // exit;
    }

    public function index()
    {
        $data['banners'] = $this->Banner_model->get_banners();

        $this->load->view('admin/banners/index', $data);
    }

    public function create()
    {
        if ($this->input->post()) {
            // Set validation rules
            $this->form_validation->set_rules('page_name', 'Page Name', 'required|trim');
            $this->form_validation->set_rules('status', 'Status', 'required|trim');

            if ($this->form_validation->run() == false) {
                // Handle validation errors
                $this->session->set_flashdata('error', validation_errors());
                redirect('admin/banner/create');
            } else {
                // Prepare the data to be inserted
                $data = array(
                    'page_name' => $this->input->post('page_name'),
                    'status' => $this->input->post('status')
                );

                // Handle image upload
                if (!empty($_FILES['image']['name'])) {
                    $config['upload_path'] = './uploads/banners/';
                    $config['allowed_types'] = '*'; // Adjust as needed
                    $config['max_size'] = 2048; // 2MB max size
                    $config['overwrite'] = 1; // Overwrite existing file
                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);

                    // Attempt to upload the file
                    if ($this->upload->do_upload('image')) {
                        $upload_data = $this->upload->data();
                        $data['image'] = $upload_data['file_name']; // Add the new image to the data
                    } else {
                        // Handle upload error
                        $upload_error = $this->upload->display_errors();
                        $this->session->set_flashdata('error', $upload_error);
                        redirect('admin/banner/create');
                    }
                }

                // Insert the banner into the database
                $this->Banner_model->insert_banner($data);
                $this->session->set_flashdata('success', 'Banner has been created successfully.');
                redirect('admin/banner');
            }
        }

        // Load the view for creating a new banner
        $this->load->view('admin/banners/create');
    }



    public function edit($id)
    {
        $data['banner'] = $this->Banner_model->get_banner($id);

        if ($this->input->post()) {
            // Set validation rules
            $this->form_validation->set_rules('page_name', 'Page Name', 'required|trim');
            $this->form_validation->set_rules('status', 'Status', 'required|trim');

            if ($this->form_validation->run() == false) {
                // Handle validation errors
                $this->session->set_flashdata('error', validation_errors());
                redirect('admin/banner/edit/' . $id);
            } else {
                // Prepare the data to be updated
                $update_data = array(
                    'page_name' => $this->input->post('page_name'),
                    'status' => $this->input->post('status')
                );

                // Handle image upload
                if (!empty($_FILES['image']['name'])) {
                    $config['upload_path'] = './uploads/banners/';
                    $config['allowed_types'] = '*';
                    $config['max_size'] = 2048; // 2MB max size
                    $config['overwrite'] = 1; // Overwrite existing file
                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);

                    // Attempt to upload the file
                    if ($this->upload->do_upload('image')) {
                        $upload_data = $this->upload->data();
                        $update_data['image'] = $upload_data['file_name']; // Add the new image to the data
                    } else {
                        // Handle upload error
                        $upload_error = $this->upload->display_errors();
                        $this->session->set_flashdata('error', $upload_error);
                        redirect('admin/banner/edit/' . $id);
                    }
                }

                // Update the database
                $this->Banner_model->update_banner($id, $update_data);
                $this->session->set_flashdata('success', 'Banner has been updated successfully.');
                redirect('admin/banner');
            }
        }

        // Load the view for editing the banner
        $this->load->view('admin/banners/edit', $data);
    }


    public function delete($id)
    {
        $this->Banner_model->delete_banner($id);
        redirect('admin/banner');
    }
}
?>