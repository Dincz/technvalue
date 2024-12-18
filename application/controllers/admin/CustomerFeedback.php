<?php
defined('BASEPATH') or exit('No direct script access allowed');
class CustomerFeedback extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/CustomerFeedback_model');
    }

    public function index()
    {
        $data['customer_feedback'] = $this->CustomerFeedback_model->get_all_feedback();
        $this->load->view('admin/customer_feedback/index', $data);
    }

    public function create()
    {
        if ($this->input->post()) {
            $data = [
                'feedback' => $this->input->post('feedback'),
                'customer_name' => $this->input->post('customer_name'),
                'customer_designation' => $this->input->post('customer_designation'),
                'status' => $this->input->post('status')
            ];
            $this->CustomerFeedback_model->insert($data);
            redirect('admin/customer_feedback/index');
        }
        $this->load->view('admin/customer_feedback/create');
    }

    public function edit($id)
    {
        $feedback = $this->CustomerFeedback_model->get($id);

        if ($this->input->post()) {
            $data = [
                'feedback' => $this->input->post('feedback'),
                'customer_name' => $this->input->post('customer_name'),
                'customer_designation' => $this->input->post('customer_designation'),
                'status' => $this->input->post('status')
            ];
            $this->CustomerFeedback_model->update($id, $data);
            redirect('admin/customer_feedback/index');
        }

        $this->load->view('admin/customer_feedback/edit', ['feedback' => $feedback]);
    }

    public function delete($id)
    {
        $this->CustomerFeedback_model->delete($id);
        redirect('admin/customer_feedback/index');
    }
}
