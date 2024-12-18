<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Team_qualities_model extends CI_Model {
    
    private $table = 'team_qualities';
    
    public function get_all_qualities() {
        $this->db->order_by('id', 'ASC');
        return $this->db->get($this->table)->result();
    }
    
    public function get_quality($id) {
        return $this->db->get_where($this->table, array('id' => $id))->row();
    }
    
    public function add_quality($data) {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }
    
    public function update_quality($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update($this->table, $data);
    }
    
    public function delete_quality($id) {
        $this->db->where('id', $id);
        return $this->db->delete($this->table);
    }
    
    public function toggle_status($id) {
        $quality = $this->get_quality($id);
        $new_status = ($quality->status == 'active') ? 'inactive' : 'active';
        
        $this->db->where('id', $id);
        return $this->db->update($this->table, array('status' => $new_status));
    }
    
    public function get_active_qualities() {
        $this->db->where('status', 'active');
        $this->db->order_by('id', 'ASC');
        return $this->db->get($this->table)->result();
    }
}