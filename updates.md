// application/controllers/Gallery.php
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('gallery_model');
        $this->load->helper('url');
    }

    public function index() {
        $data['images'] = $this->gallery_model->get_images();
        $this->load->view('gallery/index', $data);
    }

    public function upload() {
        if ($this->input->method() == 'post') {
            $config['upload_path'] = './assets/img/gallery/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = 2048; // 2MB

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('image')) {
                $image_data = $this->upload->data();
                $this->gallery_model->add_image($image_data['file_name']);
                redirect('gallery');
            } else {
                $data['error'] = $this->upload->display_errors();
                $this->load->view('gallery/upload', $data);
            }
        } else {
            $this->load->view('gallery/upload');
        }
    }
}

// application/models/Gallery_model.php
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_images() {
        $query = $this->db->get('gallery_images');
        return $query->result_array();
    }

    public function add_image($filename) {
        $data = array(
            'filename' => $filename,
            'uploaded_at' => date('Y-m-d H:i:s')
        );
        return $this->db->insert('gallery_images', $data);
    }
}

// application/views/gallery/index.php
<?php $this->load->view('layout/header'); ?>

<div class="container-fluid py-5">
    <div class="row mb-4">
        <div class="col-12">
            <h1 class="text-center">Gallery</h1>
            <hr class="my-4">
            <div class="text-center">
                <a href="<?php echo site_url('gallery/upload'); ?>" class="btn btn-primary">Upload New Image</a>
            </div>
        </div>
    </div>

    <?php if (isset($images) && !empty($images)): ?>
        <div class="row">
            <?php foreach ($images as $image): ?>
                <div class="col-6 col-md-4 col-lg-3 col-xl-3 mb-4 ">
                    <div class="card h-100 shadow-sm">
                        <img src="<?php echo base_url('assets/img/gallery/' . $image['filename']); ?>" alt="Gallery Image" class="img-fluid rounded">
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php else: ?>
        <div class="alert alert-info" role="alert">
            <p class="mb-0">No images to display.</p>
        </div>
    <?php endif; ?>
</div>

<?php $this->load->view('layout/footer'); ?>

// application/views/gallery/upload.php
<?php $this->load->view('layout/header'); ?>

<div class="container py-5">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h2 class="text-center mb-4">Upload New Image</h2>
            <?php if(isset($error)): ?>
                <div class="alert alert-danger"><?php echo $error; ?></div>
            <?php endif; ?>
            <?php echo form_open_multipart('gallery/upload'); ?>
                <div class="mb-3">
                    <label for="image" class="form-label">Choose Image</label>
                    <input type="file" class="form-control" id="image" name="image" required>
                </div>
                <button type="submit" class="btn btn-primary">Upload</button>
                <a href="<?php echo site_url('gallery'); ?>" class="btn btn-secondary">Back to Gallery</a>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>

<?php $this->load->view('layout/footer'); ?>

<!-- web developer claude -->