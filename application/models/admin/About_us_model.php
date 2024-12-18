<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About_us_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    // Get active About Us content
    public function get_content()
    {
        $this->db->where('status', 1); // Only get active content
        $query = $this->db->get('about_us');
        return $query->row_array(); // Return a single row
    }

    // Create new About Us content
    public function create_content($data)
    {
        return $this->db->insert('about_us', $data);
    }

    // Update existing About Us content
    public function update_content($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('about_us', $data);
    }

    // Get content by ID
    public function get_content_by_id($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('about_us');
        return $query->row_array();
    }
}
