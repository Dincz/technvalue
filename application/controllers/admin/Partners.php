<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Partners extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/Partner_model');
        $this->load->library('upload'); // Load the upload library
    }

    // Display the list of partners
    public function index()
    {
        $data['partners'] = $this->Partner_model->get_partners();
        $this->load->view('admin/partners/index', $data);
    }

    // Show the form for creating a new partner
    public function create()
    {
        if ($this->input->post()) {
            $config['upload_path'] = './uploads/gallery/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif'; // Specify allowed file types
            $this->upload->initialize($config);

            if ($this->upload->do_upload('image')) {
                $uploadData = $this->upload->data();
                $gallery = $uploadData['file_name'];

                $data = array(
                    'name' => $this->input->post('name'),
                    'image' => $gallery,
                    'status' => $this->input->post('status'),
                );

                $this->Partner_model->insert_partner($data);
                redirect('admin/partners/index');
            } else {
                // Handle upload errors
                $data['error'] = $this->upload->display_errors();
            }
        }

        $this->load->view('admin/partners/create', isset($data) ? $data : []);
    }

    // Show the form for editing an existing partner
    public function edit($id)
    {
        $data['partner'] = $this->Partner_model->get_partner($id);

        if ($this->input->post()) {
            $image = $data['partner']->image; // Keep old image if not uploading a new one

            if ($_FILES['image']['name']) {
                $config['upload_path'] = './uploads/gallery/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif'; // Specify allowed file types
                $this->upload->initialize($config);

                if ($this->upload->do_upload('image')) {
                    $uploadData = $this->upload->data();
                    $image = $uploadData['file_name']; // Update to new image
                } else {
                    // Handle upload errors
                    $data['error'] = $this->upload->display_errors();
                }
            }

            $updateData = array(
                'name' => $this->input->post('name'),
                'image' => $image,
                'status' => $this->input->post('status'),
            );

            $this->Partner_model->update_partner($id, $updateData);
            redirect('admin/partners/index');
        }

        $this->load->view('admin/partners/edit', $data);
    }

    // Delete a specific partner
    public function delete($id)
    {
        $this->Partner_model->delete_partner($id);
        redirect('admin/partners/index');
    }
}
