<!--**********************************Header & sidebar start***********************************-->
<?php
$this->load->view('admin/layout/header');
$this->load->view('admin/layout/sidebar');

    ?>
<!--**********************************Header & sidebar end***********************************-->
<!--**********************************Content body start****************************-->

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

    <!--**********************************Content body End***********************************-->
    <!--**********************************footer Start***********************************-->
    <?php $this->load->view('admin/layout/footer'); ?>
    <!--**********************************footer End***********************************-->

