<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('admin/Home_model'); 
    }

    public function index() {
        // Fetch all home data
        $data['home_data'] = $this->Home_model->get_home_data();
        $this->load->view('admin/home/home', $data); // Load the main view
    }

    public function edit($id) {
        // Fetch home item by ID
        $data['home_item'] = $this->Home_model->get_home_data_by_id($id);
        if (empty($data['home_item'])) {
            show_404(); // Show 404 if item not found
        }
        $this->load->view('admin/home/edit', $data); // Load edit view
    }
    public function update() {
        $id = $this->input->post('id');
        
        $data = [
            'text' => $this->input->post('text'),
            'status' => $this->input->post('status'),
        ];
        // print_r($_FILES);exit;
        // Handle image upload for `image_1`
        if (!empty($_FILES['image']['name'])) {
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
    
            if ($this->upload->do_upload('image')) {
                $uploadData = $this->upload->data();
                $data['image'] = 'uploads/' . $uploadData['file_name'];
            } else {
                $this->session->set_flashdata('error', $this->upload->display_errors());
                redirect('admin/home/edit/' . $id);
            }
        }
    
        // Handle image upload for `image_2`
        if (!empty($_FILES['image_2']['name'])) {
            if ($this->upload->do_upload('image_2')) {
                $uploadData = $this->upload->data();
                $data['image_2'] = 'uploads/' . $uploadData['file_name'];
            } else {
                $this->session->set_flashdata('error', $this->upload->display_errors());
                redirect('admin/home/edit/' . $id);
            }
        }
    
        // Handle image upload for `image_3`
        if (!empty($_FILES['image_3']['name'])) {
            if ($this->upload->do_upload('image_3')) {
                $uploadData = $this->upload->data();
                $data['image_3'] = 'uploads/' . $uploadData['file_name'];
            } else {
                $this->session->set_flashdata('error', $this->upload->display_errors());
                redirect('admin/home/edit/' . $id);
            }
        }
    
        // Update the database
        $this->Home_model->update_home_data($id, $data);
        $this->session->set_flashdata('success', 'Home item updated successfully!');
        redirect('admin/home');
    }
}
?>