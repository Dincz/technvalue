<?php
$this->load->view('admin/layout/header');
$this->load->view('admin/layout/sidebar');

?>



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
                        <img src="<?php echo base_url('assets/img/gallery/' . $image); ?>" alt="Gallery Image" class="img-fluid rounded">
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

<!--**********************************Content body End***********************************-->
<!--**********************************footer Start***********************************-->
<?php $this->load->view('admin/layout/footer'); ?>
<!--**********************************footer End***********************************-->