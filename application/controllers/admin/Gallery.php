<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Gallery extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // Load the CommonModel without assigning it to a variable
        $this->load->model('admin/GalleryModel');
    }

    public function index()
    {
        // Fetch records from the CommonModel
        $data['data'] = $this->GalleryModel->get_gallery_category();

        // print_r($data['data']);
        // exit();
        // Load the view and pass the data
        $this->load->view('admin/gallery/gallery', $data);
    }


    public function create()
    {
        if ($_FILES['image']['error'] != 4) {
            $config['upload_path'] = './uploads/gallery';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|webp';
            $config['max_size'] = 2048;
            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if ($this->upload->do_upload('image')) {
                $uploaded_image = $this->upload->data();
                $image = $uploaded_image['file_name'];
            } else {
                $this->session->set_flashdata('error', $this->upload->display_errors());
                redirect(base_url('admin/gallery'));
                return;
            }
        } else {
            $this->session->set_flashdata('error', 'Image is required.');
            redirect(base_url('admin/gallery'));
            return;
        }
        $title = $this->input->post('title');
        if (empty($title)) {
            $this->session->set_flashdata('error', 'Title is required.');
            redirect(base_url('admin/gallery'));
            return;
        }
        $see_more_links = 'gallery/' . $title;

        $data = [
            'background_image' => $image,
            'title' => $title,
            'see_more_link' => $see_more_links,
        ];
        $this->GalleryModel->add_gallery_category($data);
        $this->session->set_flashdata('success', 'Gallery Item Added Successfully');
        redirect(base_url('admin/gallery'));
    }
    public function edit($id)
    {
        // Retrieve the item data
        $data['item'] = $this->GalleryModel->get_gallery_category_by_id($id); // Assuming this returns an associative array or object

        // echo  '<pre>';
        // print_r($data);
        // exit;
    
        // Handle form submission
        if ($this->input->post()) {
            $dataToUpdate = array(
                'title' => $this->input->post('title'),
                'status' => $this->input->post('status')
            );
    
            // Handle image upload
            if ($_FILES['image']['name']) {
                $config['upload_path'] = './uploads/gallery';
                $config['allowed_types'] = 'gif|jpg|png|jpeg|webp';
                $config['max_size'] = 2048;
    
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
    
                if ($this->upload->do_upload('image')) {
                    $uploaded_image = $this->upload->data();
                    $image = $uploaded_image['file_name'];
                    $dataToUpdate['background_image'] = $image; // Add image to the update data
                } else {
                    $this->session->set_flashdata('error', $this->upload->display_errors());
                    redirect(base_url('admin/gallery'));
                    return;
                }
            }
    
            // Update the see_more_link
            $dataToUpdate['see_more_link'] = 'gallery/' . $dataToUpdate['title'];
    
            // Update the gallery category
            $updated = $this->GalleryModel->edit_gallery_category_update($id, $dataToUpdate);
    
            if ($updated) {
                $this->session->set_flashdata('success', 'Gallery item updated successfully!');
                redirect('admin/gallery');
            } else {
                $this->session->set_flashdata('error', 'Failed to update gallery item.');
            }
        }
    
        // Load the edit view with the current item data
        $this->load->view('admin/gallery/edit', $data);
    }
    




    public function update()
    {
        $id = $this->input->post('g_id');

        $data2 = $this->CommonModel->getRow(DATABASE, 'gallery', array('g_id' => $id), '*');
        if ($_FILES['img_video']['error'] != 4) {
            $config['upload_path'] = 'uploads/gallery';
            // $config['allowed_types'] = 'gif|jpg|png|jpeg|webp';
            $config['allowed_types'] = '*';
            // $config['max_size']      = 2048; 
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            // check logo upload or not 
            $logo = 'logo.tls';
            if ($this->upload->do_upload('img_video')) {
                $comp_logo = $this->upload->data();
                $image = $comp_logo['file_name'];
            }
        } else {
            $image = $data2['img_video'];
        }

        $data = [
            'img_video' => $image,
            'is_video'  => $this->input->post('is_video'),
            'status'    => $this->input->post('status'),
        ];

        $updateResult = $this->CommonModel->edit(DATABASE, 'gallery', $data, array('g_id' => $id));

        if ($updateResult) {
            $this->session->set_flashdata('success', 'Gallery information updated successfully!');
            redirect('admin/gallery');
        } else {
            $this->session->set_flashdata('error', 'Failed to update gallery information.');
            redirect('admin/gallery');
        }

        // $this->CommonModel->edit(DATABASE, 'gallery', $data, array('g_id' => $id));
        // $this->session->set_flashdata('success', 'Gallery item updated successfully!');
        // redirect(base_url('admin/gallery'));
    }


    public function delete($id)
    {
        if ($id) {
            try {
                $data['data'] = $this->GalleryModel->delete_gallery_category($id);
                
                if ($data['data']) {
                    $this->session->set_flashdata('success', 'Gallery item deleted successfully!');
                } else {
                    $this->session->set_flashdata('error', 'No record found with the provided ID!');
                }
    
            } catch (Exception $e) {
                // Capture the exception and display it as flashdata
                $this->session->set_flashdata('error', 'Error deleting record: ' . $e->getMessage());
            }
        } else {
            $this->session->set_flashdata('error', 'No record ID provided!');
        }
    
        redirect(base_url('admin/gallery')); // Redirect back to the gallery page
    }
    



    public function status($id)
    {
        $this->CommonModel->status(DATABASE, 'gallery', 'g_id', $id);
    }
}


/* End of file Index.php */
