<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Partner_model extends CI_Model
{
    // Get all partners
    public function get_partners()
    {
        return $this->db->get('partners')->result();
    }

    // Get a single partner by ID
    public function get_partner($id)
    {
        return $this->db->get_where('partners', ['id' => $id])->row();
    }

    // Insert a new partner
    public function insert_partner($data)
    {
        return $this->db->insert('partners', $data);
    }

    // Update an existing partner
    public function update_partner($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('partners', $data);
    }

    // Delete a partner
    public function delete_partner($id)
    {
        return $this->db->delete('partners', ['id' => $id]);
    }
}
