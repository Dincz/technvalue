<?php
class BaseController extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('footer_model');
        
        // Load footer data and make it available to all views
        $footer_data = $this->footer_model->get_footer_data();
        $this->load->vars(['footer_data' => $footer_data]);
    }
}