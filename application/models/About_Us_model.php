<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About_Us_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_about_us()
    {
        // In a real application, you'd typically fetch this data from a database.

        $query = $this->db->query("SELECT * FROM about_us");
        $result = $query->result_array();
        // echo $result;
        // exit();
        return $result;
    }

    public function getMeetOurExpert()
    {
        // In a real application, you'd typically fetch this data from a database.

        $query = $this->db->query("SELECT * FROM meet_our_expert");
        $result = $query->result_array();
        // echo $result;
        // exit();
        return $result;
    }
    public function get_active_experts()
    {
        $this->db->where('status', 1); // Assuming 1 represents 'active'
        $query = $this->db->get('meet_our_expert');
        return $query->result_array();
    }

    public function getHistory()
    {
        // In a real application, you'd typically fetch this data from a database.

        $query = $this->db->query("SELECT * FROM about_history_section");
        $result = $query->result_array();
        // echo $result;
        // exit();
        return $result;
    }
    public function get_active_history()
    {
        $this->db->where('status', '1'); // Filter for active records
        $query = $this->db->get('about_history_section');
        return $query->result_array(); // Return results as an array
    }


    public function getExpertise()
    {
        // In a real application, you'd typically fetch this data from a database.

        $query = $this->db->query("SELECT * FROM about_expertise_secction");
        $result = $query->result_array();
        // echo $result;
        // exit();
        return $result;
    }

    public function getchooseUs()
    {
        // In a real application, you'd typically fetch this data from a database.

        $query = $this->db->query("SELECT * FROM about_choose_us_section");
        $result = $query->result_array();
        // echo $result;
        // exit();
        return $result;
    }
    public function get_active_choose_us()
    {
        $this->db->where('status', 1);
        return $this->db->get('about_choose_us_section')->result_array(); // Adjust table name as needed
    }


}