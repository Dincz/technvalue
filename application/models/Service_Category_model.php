<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Service_Category_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_service_category()
    {
        $query = $this->db->query("SELECT * FROM services");
        $result = $query->result_array();
        return $result;
    }

    public function get_service_by_id($s_id)
    {
        $this->db->where('seo_url', $s_id);
        $query = $this->db->get('services');
        return $query->row_array();
    }
    public function getServiceDetails()
    {
        $query = $this->db->query("SELECT * FROM services");
        $result = $query->result_array();
        return $result;
    }
    public function getSpecialization()
    {
        $query = $this->db->query("SELECT * FROM specialization");
        $result = $query->result_array();
        return $result;
    }
    public function getFeatures()
    {
        $this->db->where('status', 1); // Only select active features
        $query = $this->db->get('service_features');
        return $query->result_array();
    }

    public function getFaqs()
    {
        $query = $this->db->query("SELECT * FROM faqs");
        $result = $query->result_array();
        return $result;
    }
    public function get_active_faqs()
    {
        $this->db->where('status', 1);
        return $this->db->get('faqs')->result_array(); // Fetch only active FAQs
    }
    public function getFeedback()
    {
        $query = $this->db->query("SELECT * FROM customer_feedback");
        $result = $query->result_array();
        return $result;
    }
    public function get_active_Feedback()
    {
        $this->db->where('status', '1');
        $query = $this->db->get('customer_feedback'); 
        return $query->result_array();
    }
}
