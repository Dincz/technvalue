<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ChooseUs extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('admin/ChooseUs_model');
    }

    public function index() {
        $data['chooseUs'] = $this->ChooseUs_model->get_all();
        $this->load->view('admin/choose_us/index', $data);
    }

    public function create() {
        if ($this->input->post()) {
            $data = [
                'question' => $this->input->post('question'),
                'answer' => $this->input->post('answer'),
                'status' => $this->input->post('status') ? 1 : 0
            ];
            $this->ChooseUs_model->insert($data);
            redirect('admin/chooseus');
        }
        $this->load->view('admin/choose_us/create');
    }

    public function edit($id) {
        $data['chooseUs'] = $this->ChooseUs_model->get_by_id($id);
        if ($this->input->post()) {
            $update_data = [
                'question' => $this->input->post('question'),
                'answer' => $this->input->post('answer'),
                'status' => $this->input->post('status') ? 1 : 0
            ];
            $this->ChooseUs_model->update($id, $update_data);
            redirect('admin/chooseus');
        }
        $this->load->view('admin/choose_us/edit', $data);
    }

    public function delete($id) {
        $this->ChooseUs_model->delete($id);
        redirect('admin/chooseus');
    }
}
