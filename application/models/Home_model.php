<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        // Load the database
        $this->load->database();
    }
    
    public function get_home_page_banners() {
        $this->db->select('*');
        $this->db->from('all_banners');
        $this->db->where('is_home_page', 1); // Only select banners marked for home page
        $query = $this->db->get();
        return $query->result_array(); // Returns an array of banners for the home page
    }


    // Method to fetch all client data from the 'client' table
    public function get_client() {
        // Query to select all data from the 'client' table
        // $query = $this->db->query("SELECT * FROM client");
        $query = $this->db->query("SELECT * FROM client WHERE status = 1");
        
        // Fetch the result as an associative array
        $query = $this->db->get_where('client', array('status' => 1));
        return $query->result_array();
    }

    public function get_technical_updates(){
        $query = $this->db->query("SELECT * FROM technovalue_updates");
        $result = $query->result_array();
        return $result;
    }

    public function get_whats_new(){
        $query = $this->db->query("SELECT * FROM whats_new");
        $result = $query->result_array();
        return $result;
    }
    public function get_featured_products()
    {
        $this->db->select('p_id, p_name, image');
        $this->db->from('products');
        $this->db->where('featured', 1);
        $query = $this->db->get();
        return $query->result_array();
    }
    

    public function get_banner(){
        $query = $this->db->query("SELECT * FROM home_table");
        $result = $query->result_array();
        return $result;
    }

    public function get_hierarchical_data() {
        $this->db->select('
            c.c_id as category_id,
            c.c_name as category_name,  
            sc.sc_id as subcategory_id,
            sc.sc_name as subcategory_name,
            p.p_id as product_id,
            p.p_name as product_name
        ');
        $this->db->from('category c');
        $this->db->join('subcategory sc', 'c.c_id = sc.c_id', 'left');
        $this->db->join('products p', 'sc.c_id = p.c_id AND sc.sc_id = p.sc_id', 'left');
        $this->db->order_by('c.c_id, sc.sc_id, p.p_id');
        
        $query = $this->db->get();
        $results = $query->result_array();
        
        $hierarchical_data = [];
        
        foreach ($results as $row) {
            $category_id = $row['category_id'];
            $subcategory_id = $row['subcategory_id'];
            
            // Initialize category if not exists
            if (!isset($hierarchical_data[$category_id])) {
                $hierarchical_data[$category_id] = [
                    'category_id' => $category_id,
                    'category_name' => $row['category_name'],  // Added this line
                    'subcategories' => []
                ];
            }
            
            // Initialize subcategory if not exists
            if ($subcategory_id && !isset($hierarchical_data[$category_id]['subcategories'][$subcategory_id])) {
                $hierarchical_data[$category_id]['subcategories'][$subcategory_id] = [
                    'subcategory_id' => $subcategory_id,
                    'subcategory_name' => $row['subcategory_name'],
                    'products' => []
                ];
            }
            
            // Add product if exists
            if ($row['product_id']) {
                $hierarchical_data[$category_id]['subcategories'][$subcategory_id]['products'][] = [
                    'product_id' => $row['product_id'],
                    'product_name' => $row['product_name']
                ];
            }
        }
        
        return $hierarchical_data;
    }

    public function get_work_culture_desc() {
        $this->db->select('desc_1, desc_2');
        $this->db->from('work_culture_desc');
        $this->db->where('status', 'active');
        $query = $this->db->get();
        return $query->row(); // Assuming there's only one active row
    }
    
}
