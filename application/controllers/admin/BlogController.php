<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BlogController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/Blog_model');
    }

    public function index()
    {
        $data['blog'] = $this->Blog_model->get_all_blogs();
        $this->load->view('admin/blog/index', $data);
    }

    public function create()
    {
        // Load the upload library
        $this->load->library('upload');

        if ($this->input->post()) {
            // print_r($_FILES);
            // exit();
            // Prepare data for insertion
            $data = [
                'title' => $this->input->post('title'),
                'blog_small_image' => $this->upload_image('blog_small_image'), // Handle small image upload
                'blog_big_image' => $this->upload_image('blog_big_image'), // Handle big image upload
                'description' => $this->input->post('description'), // Get the description
                'date' => date('Y-m-d'), // Current date
                'posted_by' => $this->input->post('posted_by'),
                'facebook_link' => $this->input->post('facebook_link'), // Get Facebook link
                'instagram_link' => $this->input->post('instagram_link'), // Get Instagram link
                'linkdln_link' => $this->input->post('linkdln_link'), // Get LinkedIn link
                'twitter_link' => $this->input->post('twitter_link'), // Get Twitter link
            ];
            // print_r($data);
            // exit();
            // if ($data['blog_small_image'] === null) {
            //     // Handle the error if necessary
            //     $error = $this->upload->display_errors();
            //     // Log the error
            //     log_message('error', 'Small image upload failed: ' . $error);
            //     // Redirect or set an error message
            //     $this->session->set_flashdata('error', 'Small image upload failed: ' . $error);
            //     redirect('admin/blog/create'); // Redirect back to create page
            //     return; // Stop further execution
            // }
            // Save to the database
            $this->Blog_model->create_blog($data);
            redirect('admin/blog');
        }

        // Load the view
        $this->load->view('admin/blog/create');
    }

    // Function to handle image uploads


    public function edit($id)
    {
        $data['blog'] = $this->Blog_model->get_blog($id);
        if (empty($data['blog'])) {
            show_404();
        }

        if ($this->input->post()) {
            $dataToUpdate = [
                'title' => $this->input->post('title'),
                'description' => $this->input->post('description'), // Ensure this matches the input name
                'posted_by' => $this->input->post('posted_by'),
                'date' => $this->input->post('date'),
            ];

            // If a new image is uploaded, update the image path
            if (!empty($_FILES['blog_small_image']['name'])) {
                $uploaded_image = $this->upload_image('blog_small_image');
                if ($uploaded_image !== "no image found") {
                    $dataToUpdate['blog_small_image'] = $uploaded_image;
                } else {
                    // Handle the upload error accordingly
                    $this->session->set_flashdata('upload_error', $this->upload->display_errors());
                }
            }

            if (!empty($_FILES['blog_big_image']['name'])) {
                $uploaded_image = $this->upload_image('blog_big_image');
                if ($uploaded_image !== "no image found") {
                    $dataToUpdate['blog_big_image'] = $uploaded_image;
                } else {
                    // Handle the upload error accordingly
                    $this->session->set_flashdata('upload_error', $this->upload->display_errors());
                }
            }

            $this->Blog_model->update_blog($id, $dataToUpdate);
            redirect('admin/blog');
        }

        $this->load->view('admin/blog/edit', $data);
    }

    public function delete($id)
    {
        $this->Blog_model->delete_blog($id);
        redirect('admin/blog');
    }

    private function upload_image($field_name)
    {
        $config['upload_path'] = './uploads/blog/';
        $config['allowed_types'] = '*';
        $config['max_size'] = 10240; // 10MB
        $this->upload->initialize($config);

        if ($this->upload->do_upload($field_name)) {
            return $this->upload->data('file_name');
        } else {
            // Log the error for debugging
            // log_message('error', 'File upload error: ' . $this->upload->display_errors());
            $this->session->set_flashdata('upload_error', $this->upload->display_errors());
            return NULL; // Handle upload error as needed
        }
    }


}
