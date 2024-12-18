<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Service_features extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/Service_feature_model');
    }

    // Display features
    public function index()
    {
        $data['features'] = $this->Service_feature_model->get_features();
        $this->load->view('admin/service_features/index', $data);
    }

    // Create a new feature
    public function create()
    {
        if ($this->input->post()) {
            $data = [
                'features' => $this->input->post('features'),
                'status' => $this->input->post('status') ? 1 : 0  // Assuming a checkbox for status
            ];
            $this->Service_feature_model->create_feature($data);
            redirect('admin/service_features');
        }
        $this->load->view('admin/service_features/create');
    }

    //Update an existing feature
    public function edit($id)
    {
        $data['feature'] = $this->db->get_where('service_features', ['service_feature_id' => $id])->row_array();

        if ($this->input->post()) {
            $update_data = [
                'features' => $this->input->post('features'),
                'status' => $this->input->post('status') ? 1 : 0  // Assuming a checkbox for status
            ];
            $this->Service_feature_model->update_feature($id, $update_data);
            redirect('admin/service_features');
        }

        $this->load->view('admin/service_features/edit', $data);
    }


    // Delete a feature
    public function delete($service_feature_id)
    {
        $this->Service_feature_model->delete_feature($service_feature_id);
        redirect('admin/service_features');
    }
}
