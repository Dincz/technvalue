<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Expertise_model extends CI_Model {

    public function get_all() {
        // $this->db->where('status', 1);
        return $this->db->get('about_expertise_secction')->result_array();
    }

    public function get_by_id($id) {
        return $this->db->get_where('about_expertise_secction', ['id' => $id])->row_array();
    }

    public function insert($data) {
        return $this->db->insert('about_expertise_secction', $data);
    }

    public function update($id, $data) {
        return $this->db->update('about_expertise_secction', $data, ['id' => $id]);
    }

    public function delete($id) {
        return $this->db->delete('about_expertise_secction', ['id' => $id]);
    }
}
