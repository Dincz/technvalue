<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ThankController extends CI_Controller {

    public function Thank(){
        $this->load->view("layout/header");
        $this->load->view("frontend/thankyou");
        $this->load->view("layout/footer");
    }
}