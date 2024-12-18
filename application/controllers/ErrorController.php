<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ErrorController extends CI_Controller {

    public function Error(){
        $this->load->view("layout/header");
        $this->load->view("frontend/error");
        $this->load->view("layout/footer");
    }
}