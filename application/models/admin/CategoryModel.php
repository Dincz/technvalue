<?php

defined('BASEPATH') or exit('No direct script access allowed');

class CategoryModel extends CI_Model
{

    private $_table = 'category'; // The table this model works with

    public function __construct()
    {
        parent::__construct();
        $this->load->database(); // Load the database
    }

    // Create new category
    public function create($data)
    {
        return $this->db->insert($this->_table, $data);
    }

    // Fetch a single category record by ID
    public function get($c_id)
    {
        return $this->db->get_where($this->_table, ['c_id' => $c_id])->row();
    }

    public function change_status($id, $status)
    {
        // Update the status in the database
        $data = ['status' => $status];
        $this->db->where('c_id', $id);
        return $this->db->update($this->_table, $data);
    }



    // Fetch all categories
    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    // Update a category
    public function update($id, $data)
    {
        $this->db->where('c_id', $id);
        return $this->db->update($this->_table, $data);
    }

    // Soft delete a category (updating a 'deleted' column, if exists)
    public function soft_delete($id)
    {
        $data = ['deleted' => 1]; // Assumes a 'deleted' column in your table
        $this->db->where('c_id', $id);
        return $this->db->update($this->_table, $data);
    }

    // Delete a category permanently

    public function delete($id)
    {
        return $this->db->delete($this->_table, ['c_id' => $id]);
    }


    // Change category status (activate/deactivate)
    // public function change_status($id, $status)
    // {
    //     $data = ['status' => $status];
    //     $this->db->where('c_id', $id);
    //     return $this->db->update($this->_table, $data);
    // }
}
