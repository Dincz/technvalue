<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/Home_model');
        $this->load->library('upload');
    }
    public function index()
    {
        // Fetch all home data
        // $data['home_data'] = $this->Home_model->get_home_page_banners();
        // $this->load->view('admin/home/home', $data); // Load the main view
        $data['banners'] = $this->Home_model->get_home_page_banners();

        // Load the view with all banners
        $this->load->view('admin/home/home', $data);
    }
    public function store()
    {
        if ($this->input->post()) {
            // Get form data
            $slogan = $this->input->post('slogan');
            $is_home_page = $this->input->post('is_home_page');
            $status = ($this->input->post('status') == 'active') ? 1 : 0;
            // Handle image upload (only first image)
            $image_path = '';
            if (!empty($_FILES['images']['name'])) {
                $this->load->library('upload');
            
                // Set the upload configuration
                $config['upload_path'] = './uploads/banners/';  // Set the path where you want to store the images
                $config['allowed_types'] = 'gif|jpg|jpeg|png|bmp|webp'; // Allowed file types
                // $config['max_size'] = 2048;
                $config['file_name'] = $_FILES['images']['name'];  // Keep the original file name
            
                // Initialize the upload library with the config
                $this->upload->initialize($config);
            
                // Move the uploaded file to the destination folder
                if ($this->upload->do_upload('images')) {
                    // File uploaded successfully
                    $upload_data = $this->upload->data();
                    $image_path = 'uploads/banners/' . $upload_data['file_name']; // Store the image path
                    $image_name = $upload_data['file_name']; // Save the image name
                } else {
                    // Show error message if the upload failed
                    $error = $this->upload->display_errors();
                    echo json_encode(['success' => false, 'message' => $error]);
                    return; // Exit to prevent further execution
                }
            }

            // Prepare data to be saved in the database
            $data = [
                'slogan' => $slogan,
                'image' => $image_name, // Store only one image path
                'is_home_page' => $is_home_page,
                'status' => $status
            ];

            // Insert banner data into the database
            $this->load->model('Home_model');
            $this->Home_model->insert_banner($data);

            // Return success response
            echo json_encode(['success' => true, 'message' => 'Banner added successfully!']);
        }
    }




    // In your Home controller (Admin/Home.php)
    public function edit_banner($id)
    {
        // Fetch the banner data using the ID
        $banner = $this->Home_model->get_banner_by_id($id);

        if ($banner) {
            // Send the banner data as JSON
            echo json_encode($banner);
        } else {
            // If no banner is found, send an error message
            echo json_encode(['error' => 'Banner not found']);
        }
    }



    public function update()
    {
        $id = $this->input->post('banner_id');
        $slogan = $this->input->post('slogan');
        $is_home_page = $this->input->post('is_home_page');
        $status = ($this->input->post('status') == 'active') ? 1 : 0;
        $image_path = '';  // Set a default empty path for the image.

        // Handle image upload if a new image is provided
        if (!empty($_FILES['images']['name'])) {
            $this->load->library('upload');
        
            // Set the upload configuration
            $config['upload_path'] = './uploads/banners/';  // Set the path where you want to store the images
            $config['allowed_types'] = 'gif|jpg|jpeg|png|bmp|webp'; // Allowed file types
            // $config['max_size'] = 2048; 
            $config['file_name'] = $_FILES['images']['name'];  // Keep the original file name
        
            // Initialize the upload library with the config
            $this->upload->initialize($config);
        
            // Move the uploaded file to the destination folder
            if ($this->upload->do_upload('images')) {
                // File uploaded successfully
                $upload_data = $this->upload->data();
                $image_path = 'uploads/banners/' . $upload_data['file_name']; // Store the image path
                $image_name = $upload_data['file_name']; // Save the image name
            } else {
                // Show error message if the upload failed
                $error = $this->upload->display_errors();
                echo json_encode(['success' => false, 'message' => $error]);
                return; // Exit to prevent further execution
            }
        }

        // Prepare the data to be updated
        $data = [
            'slogan' => $slogan,
            'is_home_page' => $is_home_page,
            'status' => $status
        ];

        if ($image_path) {
            $data['image'] = $image_name;  // Only update image if it's provided
        }

        // Call the model to update the banner in the database
        $this->Home_model->update_banner($id, $data);

        echo json_encode(['success' => true, 'message' => 'Banner updated successfully.']);
    }


    public function delete($id)
    {
        // Delete the banner data by ID
        $deleted = $this->Home_model->delete_banner($id);
    
        // Check if the deletion was successful
        if ($deleted) {
            // If successful, redirect to the admin/home page with a success message
            $this->session->set_flashdata('success', 'Banner deleted successfully.');
            redirect('admin/home');  // Redirect to admin home page
        } else {
            // If there was an issue, redirect with an error message
            $this->session->set_flashdata('error', 'Failed to delete the banner.');
            redirect('admin/home');  // Redirect to admin home page
        }
    }
    
}
