<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Specialization_model extends CI_Model
{

    private $table = 'specialization';

    // Retrieve all specializations
    public function get_all()
    {
        $query = $this->db->query("SELECT * FROM specialization");
        $result = $query->result_array();
        // echo $result;
        // exit();
        return $result;
    }

    // Get specialization by ID
    public function get_by_id($id)
    {
        $this->db->where('specialization_id', $id);
        $query = $this->db->get($this->table);
        return $query->row_array(); // Return a single row
    }

    // Update an existing specialization
    public function update($id, $data)
    {
        $this->db->where('specialization_id', $id);
        return $this->db->update($this->table, $data);
    }
}
