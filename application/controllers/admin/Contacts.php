<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contacts extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/Contact_model');
    }

    // Display the list of contacts
    public function index()
    {
        $data['contacts'] = $this->Contact_model->get_contacts();
        $this->load->view('admin/contacts/index', $data);
    }

    // Show the form for creating a new contact
    public function create()
    {
        if ($this->input->post()) {
            $data = [
                'title' => $this->input->post('title'),
                'phone' => $this->input->post('phone'),
                'mobile' => $this->input->post('mobile'),
                'whatsapp' => $this->input->post('whatsapp'),
                'email' => $this->input->post('email'),
                'address' => $this->input->post('address')
            ];
            $this->Contact_model->insert_contact($data);
            redirect('admin/contacts');
        }
        $this->load->view('admin/contacts/create');
    }

    // Show the form for editing an existing contact
    public function edit($id)
    {
        $data['contact'] = $this->Contact_model->get_contact($id);

        if ($this->input->post()) {
            $update_data = [
                'title' => $this->input->post('title'),
                'phone' => $this->input->post('phone'),
                'mobile' => $this->input->post('mobile'),
                'whatsapp' => $this->input->post('whatsapp'),
                'email' => $this->input->post('email'),
                'address' => $this->input->post('address')
            ];
            $this->Contact_model->update_contact($id, $update_data);
            redirect('admin/contacts');
        }

        $this->load->view('admin/contacts/edit', $data);
    }

    // Delete a specific contact
    public function delete($id)
    {
        $this->Contact_model->delete_contact($id);
        redirect('admin/contacts');
    }
}
