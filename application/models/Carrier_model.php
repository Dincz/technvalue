<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Carrier_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_active_qualities() {
        $this->db->where('status', 'active');
        $this->db->order_by('order', 'ASC');
        $query = $this->db->get('team_qualities');
        return $query->result();
    }

    public function get_content() {
        $this->db->select('mkeditor');    
        $this->db->from('team_qualities'); 
        $this->db->where('id', 1);        
        $query = $this->db->get();       
        return $query->result();
    }

    public function get_job_detail($id) {
        $this->db->select('*');    
        $this->db->from('job_postings'); 
        $this->db->where('page_name', $id);        
        $query = $this->db->get();       
        return $query->result();
    }

    public function get_all_job_detail() {
        $this->db->select('title, image_url, page_name');    
        $this->db->from('job_postings'); 
        $this->db->where('status', 'active');        
        $query = $this->db->get();       
        return $query->result();
    }
}
