<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AboutController extends CI_Controller {

    public function About(){
        $this->load->view("layout/header");
        $this->load->view("frontend/about");
        $this->load->view("layout/footer");
    }
}