<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    // Method to fetch all banners for home page (where is_home_page = 1)
    public function get_home_page_banners() {
        $this->db->select('*');
        $this->db->from('all_banners');
        $this->db->where('is_home_page', 1); // Only select banners marked for home page
        $query = $this->db->get();
        return $query->result_array(); // Returns an array of banners for the home page
    }

    // Method to fetch all data from 'all_banners' table
    public function get_all_banners() {
        $this->db->select('*');
        $this->db->from('all_banners');
        $query = $this->db->get();
        return $query->result_array(); // Returns an array of all banners
    }

    // Method to fetch banner data by ID from the 'all_banners' table
    public function get_banner_by_id($id) {
        $this->db->select('*');
        $this->db->from('all_banners');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row_array(); // Returns a single row of banner data
    }

    // Method to insert a new home banner into the 'all_banners' table
    public function insert_banner($data) {
        // Ensure that 'is_home_page' is set to 1 for home page banners
        if (isset($data['is_home_page']) && $data['is_home_page'] == 1) {
            $this->db->insert('all_banners', $data);
            return $this->db->insert_id(); // Return the inserted ID
        }
        return false; // If 'is_home_page' is not set to 1, do not insert
    }

    // Method to update an existing home banner in the 'all_banners' table
    public function update_banner($id, $data) {
        // Check if the banner is being updated for the home page
        if (isset($data['is_home_page']) && $data['is_home_page'] == 1) {
            // Only update the banner if it is meant for the home page
            $this->db->where('id', $id);
            $this->db->update('all_banners', $data);
        }
    }

    // Method to handle image upload and save the image path in 'all_banners' table
    public function handle_image_upload($file_field) {
        // Set the upload path and allowed file types
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['max_size'] = 200048; // Set max file size to 2MB (optional)
    
        // Load the upload library with the config
        $this->load->library('upload', $config);
    
        // Check if the upload is successful
        if ($this->upload->do_upload($file_field)) {
            // Get upload data
            $uploadData = $this->upload->data();
            // Return the uploaded file path (relative to the uploads directory)
            return 'uploads/' . $uploadData['file_name'];
        } else {
            // Upload failed, return the error message
            $error = $this->upload->display_errors();
            log_message('error', 'File upload failed: ' . $error); // Log the error for debugging
            return false; // Return false if upload fails
        }
    }
    

    // Method to delete a banner from the 'all_banners' table and its images
    public function delete_banner($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('all_banners');
    }
    // Method to delete the image file from the file system
    public function delete_image_from_file_system($image_path) {
        $file_path = './uploads/' . $image_path;
        if (file_exists($file_path)) {
            unlink($file_path); // Delete the image file
        }
    }

    // Method to get images related to a specific banner (assuming they are stored in the same table)
    public function get_banner_images($id) {
        $this->db->select('image');
        $this->db->from('all_banners');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row_array(); // Returns the image path for the given banner
    }
}
?>
