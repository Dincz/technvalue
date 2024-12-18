<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ExpertModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    // Get all experts
    public function get_all_experts()
    {
        return $this->db->get('meet_our_expert')->result_array();
    }

    // Get a specific expert by ID
    public function get_expert($id)
    {
        return $this->db->get_where('meet_our_expert', array('id' => $id))->row_array();
    }

    // Insert a new expert
    public function insert_expert($data)
    {
        return $this->db->insert('meet_our_expert', $data);
    }

    // Update an existing expert
    public function update_expert($id, $data)
    {
        return $this->db->where('id', $id)->update('meet_our_expert', $data);
    }

    // Delete an expert
    public function delete_expert($id)
    {
        return $this->db->where('id', $id)->delete('meet_our_expert');
    }
}
