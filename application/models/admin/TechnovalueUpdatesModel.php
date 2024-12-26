<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TechnovalueUpdatesModel extends CI_Model
{
    private $table = 'technovalue_updates';

    public function get_all_updates()
    {
        return $this->db->get($this->table)->result_array();
    }

    public function insert($data)
    {
        return $this->db->insert($this->table, $data);
    }

    public function get_update($id)
    {
        return $this->db->where('u_id', $id)->get($this->table)->row_array();
    }

    public function update($id, $data)
    {
        return $this->db->where('u_id', $id)->update($this->table, $data);
    }

    public function delete($id)
    {
        return $this->db->where('u_id', $id)->delete($this->table);
    }
}
