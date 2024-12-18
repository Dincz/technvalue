<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Partners extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Partner_model');
        $this->load->model('Home_model');

    }

    public function index() {
        $data['hierarchy'] = $this->Home_model->get_hierarchical_data();

        $data['partners'] = $this->Partner_model->get_active_partners();

        $this->load->view('frontend/partners', $data);
    }

}