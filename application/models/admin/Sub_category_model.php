<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Sub_category_model extends CI_Model
{

    private $_table = 'subcategory';  // Table name for subcategories

    public function __construct()
    {
        parent::__construct();
        $this->load->database(); // Load the database
    }

    // Fetch all subcategories with an optional status filter
    public function get_all($status = null)
    {
        if ($status !== null) {
            $this->db->where('status !=', $status); // Exclude inactive records
        }
        return $this->db->get($this->_table)->result(); // Return all matching records
    }


    // Fetch a specific subcategory by its ID
    public function get_by_id($id)
    {
        // echo($id);
        // Fetch the record from the database
        $result = $this->db->get_where($this->_table, ['sc_id' => $id])->row();
        // echo $this->db->last_query(); // This will print the last executed query
        // exit;

        return $result;

    }

    // Insert a new subcategory
    public function create($data)
    {
        return $this->db->insert($this->_table, $data); // Insert the record
    }

    // Update an existing subcategory
    public function update($id, $data)
    {
        $this->db->where('sc_id', $id);
        return $this->db->update($this->_table, $data); // Update the record
    }

    // Delete a subcategory
    public function delete($id)
    {
        $this->db->where('sc_id', $id);
        return $this->db->delete($this->_table); // Delete the record
    }

    // Toggle the status of a subcategory
    public function toggle_status($id)
    {
        $this->db->set('status', 'CASE WHEN status = 1 THEN 0 ELSE 1 END', FALSE);
        $this->db->where('sc_id', $id);
        return $this->db->update($this->_table); // Toggle the status
    }
}

/* End of file Sub_category_model.php */
