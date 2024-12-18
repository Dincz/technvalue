<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GalleryImageModel extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_all_category() {
        $this->db->select('id,title');  // Select multiple columns
        $this->db->where('status', '1');         // Add conditions
        $query = $this->db->get('gallery_category');
        return $query->result_array();
    }
    public function get_all_images_by_id($id) {
        $this->db->select('id,images');
        $this->db->where('category_id', $id); 
        $query = $this->db->get('gallery');
        return  $query->result_array();
    }
    public function delete_image($id) {
        $this->db->where('id', $id);
        $result = $this->db->delete('gallery');
        return $result;
    }
    

    public function add_image($data) {
        $insert_data = array(
            'images' => $data['images'],
            'category_id' => $data['category_id']
        );

        return $this->db->insert('gallery', $insert_data);



    }
}
