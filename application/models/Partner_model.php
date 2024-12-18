<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Partner_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_active_partners() {
        $this->db->where('status', 1);
        $query = $this->db->get('partners');
        return $query->result();
    }

}