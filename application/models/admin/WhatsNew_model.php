<?php
defined('BASEPATH') or exit('No direct script access allowed');

class WhatsNew_model extends CI_Model
{
    protected $table = 'whats_new';

    public function get_all()
    {
        return $this->db->get($this->table)->result_array();
    }

    public function get($id)
    {
        return $this->db->where('w_id', $id)->get($this->table)->row_array();
    }

    public function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    public function update($id, $data)
    {
        $this->db->where('w_id', $id)->update($this->table, $data);
    }

    public function delete($id)
    {
        $this->db->where('w_id', $id)->delete($this->table);
    }
}
