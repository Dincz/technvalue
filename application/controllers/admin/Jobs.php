<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jobs extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('admin/Job_model');
        $this->load->helper(['url', 'form']);
        $this->load->library(['form_validation']);
    }

    public function index() {
        $data['jobs'] = $this->Job_model->get_all_jobs();
        $this->load->view('admin/jobs/lists', $data);
    }

    public function add() {
        if ($this->input->post()) {
            $this->form_validation->set_rules('title', 'Title', 'required');
            $this->form_validation->set_rules('department', 'Department', 'required');
            $this->form_validation->set_rules('location', 'Location', 'required');
            $this->form_validation->set_rules('responsibilities', 'Responsibilities', 'required');
            $this->form_validation->set_rules('experience', 'Experience', 'required');
            $this->form_validation->set_rules('qualification', 'Qualification', 'required');
            $this->form_validation->set_rules('page_name', 'Page Name', 'required');

            if ($this->form_validation->run()) {
                $data = [
                    'title' => $this->input->post('title'),
                    'department' => $this->input->post('department'),
                    'location' => $this->input->post('location'),
                    'responsibilities' => $this->input->post('responsibilities'),
                    'experience' => $this->input->post('experience'),
                    'qualification' => $this->input->post('qualification'),
                    'page_name' => $this->input->post('page_name'),
                    'STATUS' => 'active'
                ];

                // Handle image upload
                if ($_FILES['image']['error'] != 4) {
                    echo "<pre>";
                    echo "File Data:";
                    print_r($_FILES['image']);
                    echo "</pre>";
                
                    $upload_path = './uploads/career';
                    
                    // Check if directory exists
                    if (!is_dir($upload_path)) {
                        echo "Creating directory: " . $upload_path . "<br>";
                        mkdir($upload_path, 0777, true);
                    }
                    
                    // Check directory permissions
                    echo "Directory writable?: " . (is_writable($upload_path) ? 'Yes' : 'No') . "<br>";
                    echo "Directory exists?: " . (file_exists($upload_path) ? 'Yes' : 'No') . "<br>";
                    echo "Absolute path: " . realpath($upload_path) . "<br>";
                
                    $config['upload_path'] = $upload_path;
                    $config['allowed_types'] = 'gif|jpg|png|jpeg|webp';
                    $config['max_size'] = 2048;
                    
                    echo "Upload configuration:<br>";
                    print_r($config);
                    
                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);
                
                    if ($this->upload->do_upload('image')) {
                        $uploaded_image = $this->upload->data();
                        echo "Upload successful! Upload data:<br>";
                        print_r($uploaded_image);
                        
                        $image_url = $uploaded_image['file_name'];
                        
                        // Verify file exists after upload
                        $final_path = $upload_path . '/' . $image_url;
                        echo "Final file path: " . $final_path . "<br>";
                        echo "File exists after upload?: " . (file_exists($final_path) ? 'Yes' : 'No') . "<br>";
                        
                    } else {
                        echo "Upload failed! Errors:<br>";
                        echo $this->upload->display_errors();
                        echo "<br>Current working directory: " . getcwd();
                        
                        $this->session->set_flashdata('error', $this->upload->display_errors());
                        // Comment out redirect temporarily to see errors
                        // redirect(base_url('admin/jobs/add'));
                        return;
                    }
                } 
                
                // Comment out redirect temporarily to see if we get here
                echo "Made it to the end of the upload process";
                $data['image_url'] = $image_url;
           
                if ($this->Job_model->add_job($data)) {
                    redirect('admin/jobs');
                }
            }
        }
        
        $this->load->view('admin/jobs/addjobs');
    }

    public function edit($id) {
        $data['job'] = $this->Job_model->get_job($id);

        if ($this->input->post()) {
            $this->form_validation->set_rules('title', 'Title', 'required');
            $this->form_validation->set_rules('department', 'Department', 'required');
            $this->form_validation->set_rules('location', 'Location', 'required');
            $this->form_validation->set_rules('responsibilities', 'Responsibilities', 'required');
            $this->form_validation->set_rules('experience', 'Experience', 'required');
            $this->form_validation->set_rules('qualification', 'Qualification', 'required');
            $this->form_validation->set_rules('page_name', 'Page Name', 'required');

            if ($this->form_validation->run()) {
                $update_data = [
                    'title' => $this->input->post('title'),
                    'department' => $this->input->post('department'),
                    'location' => $this->input->post('location'),
                    'responsibilities' => $this->input->post('responsibilities'),
                    'experience' => $this->input->post('experience'),
                    'qualification' => $this->input->post('qualification'),
                    'page_name' => $this->input->post('page_name')
                ];

                if ($_FILES['image']['error'] != 4) {
                    $upload_path = './uploads/career';
                    if (!is_dir($upload_path)) {
                        mkdir($upload_path, 0777, true);
                    }
                    $config['upload_path'] = $upload_path;
                    $config['allowed_types'] = 'gif|jpg|png|jpeg|webp';
                    $config['max_size'] = 2048;
                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);
                
                    if ($this->upload->do_upload('image')) {
                        $uploaded_image = $this->upload->data();
                        
                        $image_url = $uploaded_image['file_name'];
                        
                    } else {
                        echo "Upload failed! Errors:<br>";
                        echo $this->upload->display_errors();
                        echo "<br>Current working directory: " . getcwd();
                        
                        $this->session->set_flashdata('error', $this->upload->display_errors());
                        // Comment out redirect temporarily to see errors
                        // redirect(base_url('admin/jobs/add'));
                        return;
                    }
                }
                $update_data['image_url'] = $image_url;

                if ($this->Job_model->update_job($id, $update_data)) {
                    redirect('admin/jobs');
                }
            }
        }
        // $upload_data = $this->upload->data();
        // $update_data['image_url'] = $upload_data['file_name'];
        $this->load->view('admin/jobs/editjobs', $data);
    }

    public function delete($id) {
        if ($this->Job_model->delete_job($id)) {
            redirect('admin/jobs');
        }
    }
}