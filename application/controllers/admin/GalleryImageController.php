<?php
defined('BASEPATH') or exit('No direct script access allowed');

class GalleryImageController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/GalleryImageModel');
        $this->load->helper(['url', 'form']);
    }

    public function index()
    {
        $data['images'] = $this->GalleryImageModel->get_all_category();
        $this->load->view('admin/galleryimage/allCategory', $data);
    }

    public function imageById($id)
    {

        $data['images'] = $this->GalleryImageModel->get_all_images_by_id($id);
        $data['page_id'] = $id; // Assuming you have a variable to hold the ID of the category you want to display images for
        // echo $id;exit;
        // print_r( $data);exit;
        // echo '<pre>';
        // print_r($data);
        // exit;
        $this->load->view('admin/galleryimage/idbasedImages', $data);
    }
    public function delete($id, $page_id = null)
    {
        if ($id) {
            // Assuming you have a method in your model to handle the deletion

            $data['data'] = $this->GalleryImageModel->delete_image($id);
            $this->session->set_flashdata('success', 'Image deleted successfully!');
        } else {
            $this->session->set_flashdata('error', 'No record ID provided!');
        }

        // Redirect back to the specific page, using the provided $page_id
        if ($page_id) {
            redirect(base_url('admin/galleryimages/' . $page_id));
        } else {
            redirect(base_url('admin/galleryimages')); // Default redirect if no page_id is provided
        }
    }


    public function add_new_image() {
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
                redirect(base_url('admin/gallery-image'));
                return;
            }
        } else {
            $this->session->set_flashdata('error', 'Image is required.');
            redirect(base_url('admin/gallery-image'));
            return;
        }
       

        $data = [
            'images' => $image,
            'category_id' => $this->input->post('category_id')
        ];

        $this->GalleryImageModel->add_image($data);

        $this->session->set_flashdata('success', 'Gallery Item Added Successfully');
        redirect(base_url('admin/gallery-image'));
    }


    public function upload()
    {
        if ($this->input->method() == 'post') {
            $config['upload_path'] = './assets/img/gallery/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = 2048; // 2MB

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('image')) {
                $image_data = $this->upload->data();
                $this->gallery_model->add_image($image_data['file_name']);
                redirect('gallery');
            } else {
                $data['error'] = $this->upload->display_errors();
                $this->load->view('gallery/upload', $data);
            }
        } else {
            $this->load->view('gallery/upload');
        }
    }
}
