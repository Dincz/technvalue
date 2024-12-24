<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller
{

    public function index()
    {
        $data['contact'] = [
            [
                'title' => 'Mumbai Head office',
                'phone' => '+91 88793 30481',
                'mobile' => '+91 88793 30481',
                'whatsapp' => '+91 88793 30481',
                'email' => 'info@technovalue.in / sales@technovalue.in',
                'address' => 'TechnoValue Solutions Pvt. Ltd. Plot no - 131, Sector - 1-A Koparkhairne
Navi Mumbai 400709'
            ],
            [
                'title' => 'Ahmedabad Regional Office',
                'phone' => '+91 9099938969',
                'mobile' => '+91 9099938969',
                'whatsapp' => '+91 9099938969',
                'email' => 'northsales@technovalue.in',
                'address' => '603-604, Nobles Trade Center Opp. B.D.Rao Hall, Bhuyangdev,Ahmedabad,
Gujarat – 380052'
            ],
            [
                'title' => 'Banglore Regional Office',
                'phone' => '+91 88793 30483',
                'mobile' => '+91 88793 30483',
                'whatsapp' => '+91 88793 30483',
                'email' => 'mumbai@example.com',
                'address' => '5/1, flat no. 2e, Rich homes, Richmond Rd, Shanthala Nagar,
Ashok Nagar, Bengaluru, Karnataka, 560025.'
            ],
            [
                'title' => 'Hyderabad Regional Office',
                'phone' => '+91 7330982244',
                'mobile' => '+91 7330982244',
                'whatsapp' => '+91 7330982244',
                'email' => 'hyderabadsales@technovalue.in',
                'address' => 'Flat No 101,Swami Residence Sri Aurobindo colony, near sharada Vidya
Mandir High School, Miyapur- 500049'
            ],
            [
                'title' => 'Delhi Regional Office',
                'phone' => '+91 9136912707',
                'mobile' => '+91 9136912707',
                'whatsapp' => '+91 9136912707',
                'email' => 'prashantsharma@technovalue.in',
                'address' => 'H.No.: 201/31-C Ram Chander Gali No.1 Maujpur, Delhi-110053'
            ]
        ];

        $this->load->model('admin/Banner_model');
        $this->load->model('Home_model');

        $data['banner'] = $this->Banner_model->get_banner_by_page_name('contactus'); // Adjust the page name as needed
        $data['hierarchy'] = $this->Home_model->get_hierarchical_data();


        $this->load->view("layout/header.php", $data);
        $this->load->view("frontend/contact", $data);
        $this->load->view("layout/footer.php");
    }
}

