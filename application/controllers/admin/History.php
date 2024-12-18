<?php
defined('BASEPATH') or exit('No direct script access allowed');

class History extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/History_model');
        $this->load->library('upload'); // Load the upload library
    }

    public function index()
    {
        $data['history'] = $this->History_model->get_all();
        $this->load->view('admin/history/index', $data);
    }

    public function create()
    {
        if ($this->input->post()) {
            $config['upload_path'] = './uploads/icons/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $this->upload->initialize($config);

            if ($this->upload->do_upload('icon')) {
                $uploadData = $this->upload->data();
                $icon = $uploadData['file_name'];

                $data = array(
                    'icon' => $icon,
                    'title' => $this->input->post('title'),
                    'description' => $this->input->post('description'),
                    'status' => $this->input->post('status'),
                );

                $this->History_model->insert($data);
                redirect('admin/history/index');
            }
        }

        $this->load->view('admin/history/create');
    }

    public function edit($id)
    {
        $data['history'] = $this->History_model->get($id);

        if ($this->input->post()) {
            $icon = $data['history']->icon; // Keep old icon if not uploading new
            if ($_FILES['icon']['name']) {
                $config['upload_path'] = './uploads/icons/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $this->upload->initialize($config);

                if ($this->upload->do_upload('icon')) {
                    $uploadData = $this->upload->data();
                    $icon = $uploadData['file_name'];
                }
            }

            $updateData = array(
                'icon' => $icon,
                'title' => $this->input->post('title'),
                'description' => $this->input->post('description'),
                'status' => $this->input->post('status')? 1 : 0
            );

            $this->History_model->update($id, $updateData);
            redirect('admin/history/index');
        }

        $this->load->view('admin/history/edit', $data);
    }

    public function delete($id)
    {
        $this->History_model->delete($id);
        redirect('admin/history/index');
    }
}
