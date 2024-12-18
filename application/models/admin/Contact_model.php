<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact_model extends CI_Model
{
    // Get all contacts
    public function get_contacts()
    {
        return $this->db->get('contacts')->result();
    }

    // Get a single contact by ID
    public function get_contact($id)
    {
        return $this->db->get_where('contacts', ['id' => $id])->row();
    }

    // Insert a new contact
    public function insert_contact($data)
    {
        return $this->db->insert('contacts', $data);
    }

    // Update an existing contact
    public function update_contact($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('contacts', $data);
    }

    // Delete a contact
    public function delete_contact($id)
    {
        return $this->db->delete('contacts', ['id' => $id]);
    }
}
