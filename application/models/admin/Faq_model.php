<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Faq_model extends CI_Model
{

    public function get_faqs()
    {
        return $this->db->get('faqs')->result();
    }

    public function insert_faq($data)
    {
        return $this->db->insert('faqs', $data);
    }

    public function update_faq($id, $data)
    {
        $this->db->where('faq_id', $id);
        return $this->db->update('faqs', $data);
    }

    public function delete_faq($id)
    {
        return $this->db->delete('faqs', array('faq_id' => $id));
    }

    public function get_faq($id)
    {
        return $this->db->get_where('faqs', array('faq_id' => $id))->row();
    }
}
    