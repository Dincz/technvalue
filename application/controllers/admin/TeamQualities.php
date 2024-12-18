<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TeamQualities extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('admin/Team_qualities_model');

        // Load model
        // ! Should Implemented Later for more security.!!
        // // Add your authentication check here
        // if (!$this->session->userdata('admin_logged_in')) {
        //     redirect('admin/login');
        // }
    }

    public function index() {
        $data['qualities'] = $this->Team_qualities_model->get_all_qualities();
        $data['title'] = 'Manage Team Qualities';
        $data['content'] = 'admin/team_qualities/index';
        $this->load->view('admin/team_qualities/index', $data);
    }

    public function add() {
        if ($this->input->post()) {
            $config['upload_path'] = './uploads/career';
            $config['allowed_types'] = 'gif|jpg|png|svg';
            $config['max_size'] = 2048;
            
            $this->load->library('upload', $config);
            
            $data = array(
                'title' => $this->input->post('title'),
                'description' => $this->input->post('description'),
                'status' => $this->input->post('status'),
            );
            print_r($data);
            if ($_FILES['icon']['name']) {
                $config['upload_path'] = './uploads/career';
                $config['allowed_types'] = 'gif|jpg|png|jpeg|webp';
                $config['max_size'] = 2048;
    
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
    
                if ($this->upload->do_upload('icon')) {
                    $uploaded_image = $this->upload->data();
                    $image = $uploaded_image['file_name'];
                    $data['icon'] = $image; // Add image to the update data
                } else {
                    $this->session->set_flashdata('error', $this->upload->display_errors());
                    redirect(base_url('admin/TeamQualities/add'));
                    return;
                }
            }

            $this->Team_qualities_model->add_quality($data);
            $this->session->set_flashdata('success', 'Quality added successfully');
            redirect('admin/TeamQualities/index');
        }

        $data['title'] = 'Add Team Quality';
        $data['content'] = 'admin/team_qualities/form';
        $this->load->view('admin/team_qualities/form', $data);
    }

    public function edit($id) {
        if ($this->input->post()) {
            $config['upload_path'] = './uploads/career/';
            $config['allowed_types'] = 'gif|jpg|png|svg';
            $config['max_size'] = 2048;
            
            $this->load->library('upload', $config);
            
            $data = array(
                'title' => $this->input->post('title'),
                'description' => $this->input->post('description'),
                'status' => $this->input->post('status'),
            );

            if ($_FILES['icon']['name']) {
                $config['upload_path'] = './uploads/career';
                $config['allowed_types'] = 'gif|jpg|png|jpeg|webp';
                $config['max_size'] = 2048;
    
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
    
                if ($this->upload->do_upload('icon')) {
                    $uploaded_image = $this->upload->data();
                    $image = $uploaded_image['file_name'];
                    $data['icon'] = $image; // Add image to the update data
                } else {
                    $this->session->set_flashdata('error', $this->upload->display_errors());
                    redirect(base_url(`admin/TeamQualities/edit/ .$id`));
                    return;
                }
            }

            $this->Team_qualities_model->update_quality($id, $data);
            $this->session->set_flashdata('success', 'Data updated successfully');
            redirect('admin/TeamQualities');
        }

        $data['quality'] = $this->Team_qualities_model->get_quality($id);
        $data['title'] = 'Edit Team Quality';
        $data['content'] = 'admin/team_qualities/form';
        $this->load->view('admin/team_qualities/form', $data);
    }

    public function delete($id) {
        $quality = $this->Team_qualities_model->get_quality($id);
        if ($quality->icon && file_exists('./assets/img/icon/' . $quality->icon)) {
            unlink('./assets/img/icon/' . $quality->icon);
        }
        
        $this->Team_qualities_model->delete_quality($id);
        $this->session->set_flashdata('success', 'Quality deleted successfully');
        redirect('admin/TeamQualities');
    }

    public function toggle_status($id) {
        $this->Team_qualities_model->toggle_status($id);
        $this->session->set_flashdata('success', 'Status updated successfully');
        redirect('admin/TeamQualities');
    }
}
