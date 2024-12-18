<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ServiceModel extends CI_Model
{
    // Get all services
    public function get_all_services()
    {
        return $this->db->get('services')->result();
    }

    // Insert a new service
    public function insert_service($data)
    {
        return $this->db->insert('services', $data);
    }

    // Get a single service by ID
    public function get_service($id)
    {
        return $this->db->get_where('services', ['s_id' => $id])->row();
    }

    // Update an existing service
    public function update_service($id, $data)
    {
        $this->db->where('s_id', $id);
        return $this->db->update('services', $data);
    }

    // Delete a service
    public function delete_service($id)
    {
        $this->db->where('s_id', $id);
        return $this->db->delete('services');
    }
}
