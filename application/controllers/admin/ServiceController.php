<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ServiceController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/ServiceModel');
        $this->load->library(['upload', 'form_validation']);
    }

    // Display all services
    public function index()
    {
        $data['services'] = $this->ServiceModel->get_all_services();
        $this->load->view('admin/service/index', $data);
    }

    // Create a new service
    public function create()
    {
        if ($this->input->post()) {
            $this->form_validation->set_rules('service_title', 'Service Title', 'required|trim');
            $this->form_validation->set_rules('service_short_description', 'Short Description', 'required|trim');

            if ($this->form_validation->run() == false) {
                $this->session->set_flashdata('error', validation_errors());
                redirect('admin/service/create');
            } else {
                // Configure upload for service image
                $config['upload_path'] = './uploads/services/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['overwrite'] = 1;
                $this->upload->initialize($config);

                // Upload the main service image
                if ($this->upload->do_upload('service_image')) {
                    $upload_data = $this->upload->data();
                    $service_image = $upload_data['file_name'];
                } else {
                    $upload_error = $this->upload->display_errors();
                    $this->session->set_flashdata('error', $upload_error);
                    redirect('admin/service/create');
                }

                // Configure upload for service icon
                $config['upload_path'] = './uploads/icons/';
                $this->upload->initialize($config);

                // Upload the service icon
                if ($this->upload->do_upload('service_icon')) {
                    $upload_data = $this->upload->data();
                    $service_icon = $upload_data['file_name'];
                } else {
                    $upload_error = $this->upload->display_errors();
                    $this->session->set_flashdata('error', $upload_error);
                    redirect('admin/service/create');
                }
                
                $data = [
                    'service_icon' => $service_icon,
                    'service_title' => $this->input->post('service_title'),
                    'service_short_description' => $this->input->post('service_short_description'),
                    'service_full_description' => $this->input->post('service_full_description'),
                    'seo_url' => $this->input->post('seo_url'),
                    'service_image' => $service_image,
                    'working_hours_mon_fri' => $this->input->post('working_hours_mon_fri'),
                    'working_hours_sat' => $this->input->post('working_hours_sat'),
                    'working_hours_sun' => $this->input->post('working_hours_sun'),
                    'status' => $this->input->post('status')
                ];
                print_r($data);
                $this->ServiceModel->insert_service($data);
                $this->session->set_flashdata('success', 'Service has been added successfully.');
                redirect('admin/service');
            }
        }

        $this->load->view('admin/service/create');
    }


    // Edit an existing service
    public function edit($id)
    {
        $data['service'] = $this->ServiceModel->get_service($id);
        // print_r($data['service']); // Debugging: Print the service data
        // exit();

        if ($this->input->post()) {
            $this->form_validation->set_rules('service_title', 'Service Title', 'required|trim');
            $this->form_validation->set_rules('service_short_description', 'Short Description', 'required|trim');

            if ($this->form_validation->run() == false) {
                $this->session->set_flashdata('error', validation_errors());
                redirect('admin/service/edit/' . $id);
            } else {
                $update_data = [
                    // 'service_icon' => $this->input->post('service_icon'),
                    'service_title' => $this->input->post('service_title'),
                    'service_short_description' => $this->input->post('service_short_description'),
                    'service_full_description' => $this->input->post('service_full_description'),
                    'seo_url' => $this->input->post('seo_url'),
                    'working_hours_mon_fri' => $this->input->post('working_hours_mon_fri'),
                    'working_hours_sat' => $this->input->post('working_hours_sat'),
                    'working_hours_sun' => $this->input->post('working_hours_sun'),
                    'status' => $this->input->post('status') ? 1 : 0
                ];

                print_r($update_data); // Debugging: Print the data to be updated

                if ($_FILES['service_image']['name']) {
                    $config['upload_path'] = './uploads/services/';
                    $config['allowed_types'] = '*';
                    $config['overwrite'] = 1;
                    $this->upload->initialize($config);

                    if ($this->upload->do_upload('service_image')) {
                        $upload_data = $this->upload->data();
                        $update_data['service_image'] = $upload_data['file_name'];
                    } else {
                        $upload_error = $this->upload->display_errors();
                        $this->session->set_flashdata('error', $upload_error);
                        redirect('admin/service/edit/' . $id);
                    }
                }

                if ($_FILES['service_icon']['name']) {
                    $config['upload_path'] = './uploads/icons/';
                    $config['allowed_types'] = '*';
                    $config['overwrite'] = 1;
                    $this->upload->initialize($config);

                    if ($this->upload->do_upload('service_icon')) {
                        $upload_data = $this->upload->data();
                        $update_data['service_icon'] = $upload_data['file_name'];
                    } else {
                        $upload_error = $this->upload->display_errors();
                        $this->session->set_flashdata('error', $upload_error);
                        redirect('admin/service/edit/' . $id);
                    }
                }

                print_r($update_data); // Debugging: Print updated data before saving

                $this->ServiceModel->update_service($id, $update_data);
                $this->session->set_flashdata('success', 'Service has been updated successfully.');
                redirect('admin/service');
            }
        }

        $this->load->view('admin/service/edit', $data );
    }


    // Delete a service
    public function delete($id)
    {
        $this->ServiceModel->delete_service($id);
        $this->session->set_flashdata('success', 'Service has been deleted successfully.');
        redirect('admin/service');
    }
}
