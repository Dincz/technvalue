<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_all_blogs() {
        return $this->db->get('blog')->result_array();
    }

    public function get_blog($id) {
        return $this->db->get_where('blog', ['id' => $id])->row_array();
    }

    public function create_blog($data) {
        return $this->db->insert('blog', $data);
    }

    public function update_blog($id, $data) {
        return $this->db->update('blog', $data, ['id' => $id]);
    }

    public function delete_blog($id) {
        return $this->db->delete('blog', ['id' => $id]);
    }
}
