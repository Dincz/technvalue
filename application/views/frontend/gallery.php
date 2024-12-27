<?php $this->load->view('layout/header'); ?>
<div class="breadcumb-wrapper" data-bg-src="<?= base_url('uploads/banners/') . $banner['image']; ?>">
    <div class="container z-index-common">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Gallery Detail</h1>
            <div class="breadcumb-menu-wrap">
                <ul class="breadcumb-menu">
                    <li><a href="<?php echo base_url() ?>">Home</a></li>
                    <li><a href="<?php echo base_url() . 'gallery-category' ?>">Gallery</a></li>
                    <li class="currentLocation"><?php echo htmlspecialchars($titletodisplay); ?></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid py-5">
    <div class="row mb-4">
        <div class="col-12">
            <h1 class="text-center"><?php echo htmlspecialchars($titletodisplay); ?></h1>
            <hr class="my-4">
        </div>
    </div>

    <style>
        .list {
            columns: 300px;
            column-gap: 20px;
        }

        .list .card {
            display: inline-block;
            width: 100%;
        }
    </style>

    <?php if (isset($gallery_items) && !empty($gallery_items)): ?>
        <div class="list">
            <?php foreach ($gallery_items as $gallery_items): ?>
                <div class="card mb-4 shadow-sm">
                    <img src="<?php echo base_url('uploads/gallery/All_images/' . $gallery_items->images); ?>" alt="Gallery Image" class="img-fluid rounded">
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