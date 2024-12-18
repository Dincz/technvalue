<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    // public function get_home_data() {
    //     $this->db->select('h_id, image, image_2, image_3, text, status, created_date');
    //     $query = $this->db->get('home_table');
    //     return $query->result_array();
    // }

    // Method to fetch all data from home_table
    public function get_home_data() {
        $this->db->select('*');
        $this->db->from('home_table');
        $query = $this->db->get();
        return $query->result_array();
    }

    // Method to fetch home item data by ID
public function get_home_data_by_id($id) {
    $this->db->where('h_id', $id);
    $query = $this->db->get('home_table');
    return $query->row_array();
}
// Method to update home item data
public function update_home_data($id, $data) {
    $this->db->where('h_id', $id);
    return $this->db->update('home_table', $data);
}
}
?>
