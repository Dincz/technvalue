<?php $this->load->view('layout/header') ?>


<div class="breadcumb-wrapper" data-bg-src="<?= base_url('uploads/banners/') . $banner['image']; ?>">

    <div class="container z-index-common">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">JOB DETAILS</h1>
            <div class="breadcumb-menu-wrap">
                <ul class="breadcumb-menu">
                    <li><a href="<?php echo base_url() ?>"></a>Home</></li>
                    <li><a href="<?php echo base_url() . 'career' ?>">Career</li>
                    <li class="currentLocation"><?php echo $content[0]->title; ?></li>
                </ul>
            </div>
        </div>
    </div>
</div>


<div class="container my-5">
    <div class="row p-4 border rounded shadow-sm">
        <div class="col-md-6 col-12">
            <div class="">
                <h3 class="mb-4">Job Description</h3>

                <div class="mb-3">
                    <strong>Post for:</strong> <?php echo $content[0]->title; ?>
                </div>
                <div class="mb-3">
                    <strong>Department:</strong> <?php echo $content[0]->department; ?>
                </div>
                <div class="mb-3">
                    <strong>Location:</strong> <?php echo $content[0]->location; ?>
                </div>

                <h5 class="mt-4">Responsibilities:</h5>
                <ul class="list-unstyled">
                    <?php
                    $responsibilities = explode("\n", $content[0]->responsibilities);
                    foreach ($responsibilities as $responsibility) {
                        echo "<li>{$responsibility}</li>";
                    }
                    ?>
                </ul>

                <div class="mt-4">
                    <p><strong>Experience:</strong> <?php echo $content[0]->experience; ?></p>
                    <p><strong>Qualification:</strong> <?php echo $content[0]->qualification; ?></p>
                </div>
                <a href="<?php echo base_url('apply/' . $content[0]->id); ?>" class="vs-btn style3">Apply Now</a>
            </div>
        </div>
        <div class="col-12 col-md-6 ">
            <img src="<?php echo base_url('uploads/career/' . $content[0]->image_url); ?>" alt="<?php echo $content[0]->title; ?>" class="w-100">
        </div>
    </div>
</div>

<?php $this->load->view('layout/footer') ?>