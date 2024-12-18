<?php $this->load->view('layout/header'); ?>
<div class="breadcumb-wrapper" data-bg-src="<?= base_url('uploads/banners/') . $banner['image']; ?>">
    <div class="container z-index-common">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Gallery Detail</h1>
            <div class="breadcumb-menu-wrap">
                <ul class="breadcumb-menu">
                    <li><a href="<?php echo base_url() ?>">Home</a></li>
                    <li>Gallery Detail</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid py-5">
    <div class="row mb-4">
        <div class="col-12">
            <h1 class="text-center">Gallery</h1>
            <hr class="my-4">
        </div>
    </div>

    <?php if (isset($gallery_items) && !empty($gallery_items)): ?>
        <div class="row">
            <?php foreach ($gallery_items as $gallery_items): ?>
                <div class="col-6 col-md-4 col-lg-3 col-xl-3 mb-4">
                    <div class="card h-100 shadow-sm">
                        <!-- Display image -->
                        <img src="<?php echo base_url('uploads/gallery/All_images/' . $gallery_items->images); ?>" alt="Gallery Image" class="img-fluid rounded">

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