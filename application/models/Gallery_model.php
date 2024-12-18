<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_gallery_items()
    {
        $query = $this->db->query("SELECT * FROM gallery_category");
        return $query->result_array();
    }

    public function get_gallery_images($category_id)
    {
        // Check if category_id is not null
        if ($category_id === NULL) {
            return [];  // Return empty array if category_id is null
        }

        $this->db->select('gallery.images,gallery.id');
        $this->db->from('gallery');
        $this->db->join('gallery_category', 'gallery.category_id = gallery_category.id', 'inner');
        $this->db->where('gallery_category.title', $category_id);
        $query = $this->db->get(); // Execute the query
        return $query->result(); // Fetch all the results as an array of objects
        
        // print_r($returnss);
        // exit();

        // Check if result is null
        if ($result === NULL || !isset($result['images'])) {
            return [];  // Return empty array if no images found
        }

        // Process the images if available
        $string = $result['images'];
        $arrays = explode(",", $string);

        return $arrays;
    }
}
