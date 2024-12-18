<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Carrier_Content extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('admin/Content_Carrier_model');
        $this->load->helper('url_helper');
    }

    public function index() {
        $data['contents'] = $this->Content_Carrier_model->get_content();
        $data['title'] = 'Content List';
        $this->load->view('admin/carrier/view', $data);
    }

    public function editView() {
        $data['contents'] = $this->Content_Carrier_model->get_content();
        $data['title'] = 'Content List';

        $this->load->view('admin/carrier/edit', $data);
    }

    public function update() {
        $content = $this->input->post('content');
        $updated = $this->Content_Carrier_model->edit_content($content);
    
        if ($updated) {
            $this->session->set_flashdata('success', 'Content  updated successfully!');
            redirect('admin/Carrier_Content');
        } else {
            $this->session->set_flashdata('error', 'Failed to update Content.');
        }

        redirect("admin/Carrier_Content");
    }





    public function view($id = NULL) {
        $data['content_item'] = $this->Content_Carrier_model->get_content($id);

        if (empty($data['content_item'])) {
            show_404();
        }

        $data['title'] = $data['content_item']['title'];

        $this->load->view('templates/header', $data);
        $this->load->view('content/view', $data);
        $this->load->view('templates/footer');
    }

    public function edit($id = NULL) {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['content_item'] = $this->Content_Carrier_model->get_content($id);

        if (empty($data['content_item'])) {
            show_404();
        }

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('content', 'Content', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('content/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Content_Carrier_model->update_content($id, $this->input->post());
            redirect('/content/view/'.$id);
        }
    }
}
?>