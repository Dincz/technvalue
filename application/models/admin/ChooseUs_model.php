<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ChooseUs_model extends CI_Model {

    public function get_all() {
        // $this->db->where('status', 1);
        return $this->db->get('about_choose_us_section')->result_array();
    }

    public function get_by_id($id) {
        return $this->db->get_where('about_choose_us_section', ['id' => $id])->row_array();
    }

    public function insert($data) {
        return $this->db->insert('about_choose_us_section', $data);
    }

    public function update($id, $data) {
        return $this->db->update('about_choose_us_section', $data, ['id' => $id]);
    }

    public function delete($id) {
        return $this->db->delete('about_choose_us_section', ['id' => $id]);
    }
}
