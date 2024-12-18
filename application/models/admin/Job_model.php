<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Job_model extends CI_Model {
    private $table = 'job_postings';

    public function get_all_jobs() {
        return $this->db->where('STATUS', 'active')->get($this->table)->result();
    }

    public function get_job($id) {
        return $this->db->where('id', $id)->get($this->table)->row();
    }

    public function add_job($data) {
        return $this->db->insert($this->table, $data);
    }

    public function update_job($id, $data) {
        return $this->db->where('id', $id)->update($this->table, $data);
    }

    public function delete_job($id) {
        return $this->db->where('id', $id)->update($this->table, ['STATUS' => 'inactive']);
    }
}