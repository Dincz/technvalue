<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

    public function index(){
        $data['contact'] = [
            [
                'title' => 'Chennai Representatives (Residential)',
                'phone' => '+91 022 35016690 - 718',
                'mobile' => '+91 8879330481',
                'whatsapp' => '+91 8879685687 / +91 8657984017',
                'email' => 'sales@technovalue.in / info@technovalue.in',
                'address' => 'House No. 1-98/15/1, Ground Floor, Madhapur, Hyderabad-500081.'
            ],
            [
                'title' => 'Mumbai Office (Commercial)',
                'phone' => '+91 022 40287590',
                'mobile' => '+91 9876543210',
                'whatsapp' => '+91 9876543211',
                'email' => 'mumbai@example.com',
                'address' => '123 Business Park, Andheri East, Mumbai-400069.'
            ],
            [
                'title' => 'Mumbai Office (Commercial)',
                'phone' => '+91 022 40287590',
                'mobile' => '+91 9876543210',
                'whatsapp' => '+91 9876543211',
                'email' => 'mumbai@example.com',
                'address' => '123 Business Park, Andheri East, Mumbai-400069.'
            ],
            [
                'title' => 'Mumbai Office (Commercial)',
                'phone' => '+91 022 40287590',
                'mobile' => '+91 9876543210',
                'whatsapp' => '+91 9876543211',
                'email' => 'mumbai@example.com',
                'address' => '123 Business Park, Andheri East, Mumbai-400069.'
            ],
            [
                'title' => 'Mumbai Office (Commercial)',
                'phone' => '+91 022 40287590',
                'mobile' => '+91 9876543210',
                'whatsapp' => '+91 9876543211',
                'email' => 'mumbai@example.com',
                'address' => '123 Business Park, Andheri East, Mumbai-400069.'
            ],
            [
                'title' => 'Mumbai Office (Commercial)',
                'phone' => '+91 022 40287590',
                'mobile' => '+91 9876543210',
                'whatsapp' => '+91 9876543211',
                'email' => 'mumbai@example.com',
                'address' => '123 Business Park, Andheri East, Mumbai-400069.'
            ],
            [
                'title' => 'Mumbai Office (Commercial)',
                'phone' => '+91 022 40287590',
                'mobile' => '+91 9876543210',
                'whatsapp' => '+91 9876543211',
                'email' => 'mumbai@example.com',
                'address' => '123 Business Park, Andheri East, Mumbai-400069.'
            ],
            [
                'title' => 'Mumbai Office (Commercial)',
                'phone' => '+91 022 40287590',
                'mobile' => '+91 9876543210',
                'whatsapp' => '+91 9876543211',
                'email' => 'mumbai@example.com',
                'address' => '12345 Business Park, Andheri East, Mumbai-400069.'
            ],
        ];

		$this->load->model('admin/Banner_model');
        $this->load->model('Home_model');

        $data['banner'] = $this->Banner_model->get_banner_by_page_name('contactus'); // Adjust the page name as needed
		$data['hierarchy'] = $this->Home_model->get_hierarchical_data();


        $this->load->view("layout/header.php", $data);
        $this->load->view("frontend/contact",$data);
        $this->load->view("layout/footer.php");
    }
}

