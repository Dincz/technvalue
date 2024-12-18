<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Footer_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_basic_info() {
        $query = $this->db->get('basic_info');
        return $query->result_array();
    }

}