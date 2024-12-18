<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Technovalue_model extends CI_Model
{

    public function get_updates()
    {
        $this->db->where('status', 1);
        return $this->db->get('technovalue_updates')->result_array();
    }

    public function insert_update($data)
    {
        return $this->db->insert('technovalue_updates', $data);
    }

    public function get_update($id)
    {
        return $this->db->get_where('technovalue_updates', ['u_id' => $id])->row_array();
    }

    public function update_update($id, $data)
    {
        return $this->db->update('technovalue_updates', $data, ['u_id' => $id]);
    }

    public function delete_update($id)
    {
        return $this->db->delete('technovalue_updates', ['u_id' => $id]);
    }
}





