<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Faq extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/Faq_model');
    }

    public function index()
    {
        $data['faqs'] = $this->Faq_model->get_faqs();
        $this->load->view('admin/faq/index', $data);
    }

    public function create()
    {
        if ($this->input->post()) {
            $data = [
                'faq_question' => $this->input->post('faq_question'),
                'faq_answer' => $this->input->post('faq_answer'),
                'status' => $this->input->post('status') ? 1 : 0 // Get status from form
            ];
            $this->Faq_model->insert_faq($data);
            redirect('admin/faq');
        }
        $this->load->view('admin/faq/create');
    }

    public function edit($id)
    {
        $data['faq'] = $this->Faq_model->get_faq($id);
        if ($this->input->post()) {
            $update_data = [
                'faq_question' => $this->input->post('faq_question'),
                'faq_answer' => $this->input->post('faq_answer'),
                'status' => $this->input->post('status') // Update status from form
            ];
            $this->Faq_model->update_faq($id, $update_data);
            redirect('admin/faq');
        }
        $this->load->view('admin/faq/edit', $data);
    }



    public function delete($id)
    {
        $this->Faq_model->delete_faq($id);
        redirect('admin/faq');
    }
}
