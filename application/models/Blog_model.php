<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blog_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getBlog()
    {
        // In a real application, you'd typically fetch this data from a database.

        $query = $this->db->query("SELECT * FROM blog");
        $result = $query->result_array();
        // echo $result;
        // exit();
        return $result;
    }
    public function getBlogById($id)
    {
        // Use a parameterized query to prevent SQL injection
        $query = $this->db->query("SELECT * FROM blog WHERE id = ?", array($id));
        $result = $query->row_array(); // Fetch a single row
        return $result;
    }
    

    


}