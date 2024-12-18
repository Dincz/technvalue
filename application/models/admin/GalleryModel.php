<?php
defined('BASEPATH') or exit('No direct script access allowed');

class GalleryModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_categories()
    {
        $query = $this->db->get('gallery_category');
        return $query->result_array();
    }


    public function get_gallery_category()
    {
        $query = $this->db->query("SELECT * FROM gallery_category");
        return $query->result_array();
    }


    public function delete_gallery_category($id)
    {
        // Check if there are any gallery items linked to the category
        $this->db->where('category_id', $id);
        $linked_items = $this->db->count_all_results('gallery');
        
        if ($linked_items > 0) {
            // If there are linked gallery items, throw an exception
            throw new Exception('Cannot delete category. There are ' . $linked_items . ' gallery items linked to this category.');
        }
        
        // Proceed to delete the category if no linked items
        $this->db->where('id', $id);
        $result = $this->db->delete('gallery_category');
    
        if ($result === false) {
            $error = $this->db->error();
            throw new Exception($error['message']);
        }
    
        return $this->db->affected_rows() > 0;
    }
    
    


    public function add_gallery_category($data)
    {
        $this->db->insert('gallery_category', $data);
        return $this->db->insert_id();
    }
    public function get_gallery_category_by_id($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('gallery_category');
        return $query->row_array();
    }


    public function edit_gallery_category_update($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('gallery_category', $data);
        return $this->db->affected_rows(); // Returns the number of affected rows
    }
}
