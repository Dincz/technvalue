<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/login_model');
        $this->load->library('session');
    }
    public function index()
    {
        $this->load->view('admin/login/login');
        
    }
    public function login()
    {
        $email = $this->input->post('email');
        $password = md5(sha1($this->input->post('password')));
        $data = [
            'email' => $email,
            'password' => $password,
        ];

      
        if ($this->login_model->login($data)) {
            // Successful login
            redirect(base_url('admin'));
        } else {
            // Failed login
            $this->session->set_flashdata('error', 'Invalid email or password');
            redirect(base_url('admin/login'));
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('admin/login'));
    }
}
/* End of file Login.php */
