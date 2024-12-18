<?php
defined('BASEPATH') or exit('No direct script access allowed');

class History_model extends CI_Model
{

    public function get_all()
    {
        return $this->db->get('about_history_section')->result();
    }

    public function get($id)
    {
        return $this->db->get_where('about_history_section', array('id' => $id))->row();
    }

    public function insert($data)
    {
        return $this->db->insert('about_history_section', $data);
    }

    public function update($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('about_history_section', $data);
    }


    public function delete($id)
    {
        return $this->db->delete('about_history_section', array('id' => $id));
    }
}
