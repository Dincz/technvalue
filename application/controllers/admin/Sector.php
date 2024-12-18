<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Sector extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/CommonModel');
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->library('upload');
    }

    public function index()
    {
        $data['data'] = $this->CommonModel->getRecords(DATABASE , 'sector_detail');
        $data['edit_mode'] = false;
        $this->load->view('admin/sector/sector', $data);
    }

    public function edit($id)
    {
        $data['edit_mode'] = true;
        $data['current_item'] = $this->CommonModel->getRow(DATABASE , 'sector_detail', ['sd_id' => $id]);

        if (empty($data['current_item'])) {
            show_404();
        }

        $this->load->view('admin/sector/sector', $data);
    }

    public function add()
    {
        $data['edit_mode'] = true;
        $data['current_item'] = []; // For adding a new item, initialize with empty array
        $this->load->view('admin/sector/sector', $data);
    }

    public function update()
    {
        $id = $this->input->post('sd_id');
        $is_edit = !empty($id);

        $config['upload_path'] = './uploads/sectors';
        $config['allowed_types'] = '*'; 
        $config['max_size'] = 20048; 
        $this->load->library('upload', $config);
        $this->upload->initialize($config);


        $image = $this->input->post('existing_image');
        $work_images = $this->input->post('existing_work_images');

        if (!empty($_FILES['image']['name'])) {
            if ($this->upload->do_upload('image')) {
                $uploadData = $this->upload->data();
                $image = $uploadData['file_name'];
            } else {
                $this->session->set_flashdata('error', $this->upload->display_errors());
                redirect('admin/sector/' . ($is_edit ? 'edit/' . $id : 'add'));
            }
        }

        // Handle multiple work images
        $work_images_files = [];
        if (!empty($_FILES['work_images']['name'][0])) {
            $files = $_FILES['work_images'];
            $count = count($files['name']);

            for ($i = 0; $i < $count; $i++) {
                $_FILES['file']['name'] = $files['name'][$i];
                $_FILES['file']['type'] = $files['type'][$i];
                $_FILES['file']['tmp_name'] = $files['tmp_name'][$i];
                $_FILES['file']['error'] = $files['error'][$i];
                $_FILES['file']['size'] = $files['size'][$i];

                if ($this->upload->do_upload('file')) {
                    $uploadData = $this->upload->data();
                    $work_images_files[] = $uploadData['file_name'];
                } else {
                    $this->session->set_flashdata('error', $this->upload->display_errors());
                    redirect('admin/sector/' . ($is_edit ? 'edit/' . $id : 'add'));
                }
            }

            $work_images = implode(',', $work_images_files);
        }

        $data = [
            'name' => $this->input->post('name'),
            'description' => $this->input->post('description'),
            'image' => $image,
            'work_images' => $work_images,
            'status' => $this->input->post('status')
        ];

        if ($is_edit) {
            $updateResult = $this->CommonModel->edit(DATABASE , 'sector_detail', $data, ['sd_id' => $id]);
            $message = $updateResult ? 'Sector updated successfully!' : 'Failed to update sector.';
        } else {
            $updateResult = $this->CommonModel->add(DATABASE , 'sector_detail', $data);
            $message = $updateResult ? 'Sector added successfully!' : 'Failed to add sector.';
        }

        $this->session->set_flashdata($updateResult ? 'success' : 'error', $message);
        redirect('admin/sector');
    }

    public function delete($id)
    {
        if (empty($id)) {
            show_404();
        }

        $deleteResult = $this->CommonModel->delete(DATABASE , 'sector_detail', ['sd_id' => $id]);
        $message = $deleteResult ? 'Sector deleted successfully!' : 'Failed to delete sector.';
        $this->session->set_flashdata($deleteResult ? 'success' : 'error', $message);
        redirect('admin/sector');
    }
}
