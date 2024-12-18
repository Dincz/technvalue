<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CustomerFeedback_model extends CI_Model
{

    public function get_all_feedback()
    {
        // $this->db->where('status', 'active'); // Only get active feedback
        $query = $this->db->get('customer_feedback');
        return $query->result_array();
    }
    public function get_active_feedback()
    {
        $this->db->where('status', '1'); // Only get active feedback
        $query = $this->db->get('customer_feedback');
        return $query->result_array();
    }

    public function insert($data)
    {
        $this->db->insert('customer_feedback', $data);
    }

    public function get($id)
    {
        return $this->db->get_where('customer_feedback', ['cus_id' => $id])->row();
    }

    public function update($id, $data)
    {
        $this->db->where('cus_id', $id);
        $this->db->update('customer_feedback', $data);
    }

    public function delete($id)
    {
        $this->db->where('cus_id', $id);
        $this->db->delete('customer_feedback');
    }
}
