<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Content_Carrier_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_content() {
        $this->db->select('mkeditor');    
        $this->db->from('team_qualities'); 
        $this->db->where('id', 1);        
        $query = $this->db->get();       
        return $query->result();
    }

    public function edit_content($content) {
        $data = array(
            'mkeditor' => $content
        );
        $this->db->where('id', 1);  
        return $this->db->update('team_qualities', $data);
    }
    

    public function create_content($data) {
        return $this->db->insert('content', $data);
    }

    public function delete_content($id) {
        return $this->db->delete('content', array('id' => $id));
    }
}
?>