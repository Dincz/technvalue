<?php if (isset($product) && count($product) > 0) : ?>
    <?php
    $product = $product; // Select the first product
    ?>

    <div class="breadcumb-wrapper background-image"
       data-bg-src="<?= base_url('uploads/banners/banner-1.jpg'); ?>">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Product Detail</h1>
                <div class="breadcumb-menu-wrap">
                    <ul class="breadcumb-menu">
                        <li><a href="<?php echo base_url() ?>">Home</a></li>
                        <li>Product Detail</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <section class="position-relative space-bottom" style="background-image: url(assets/img/bg/ab-bg-1-1.jpg);">
        <div class="container z-index-common">
            <div class="row gx-60">
                <div class="col-lg-6 col-xl-5 mb-50 mb-lg-0 wow fadeInUp wow-animated" data-wow-delay="0.2s">
                    <div class="img-box1">
                        <div class="img-1 mt-5">
                            <img src="<?php echo base_url('uploads/Product/' . $product['image']); ?>" class="img-fluid" alt="Product Image">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-7 align-self-center wow fadeInUp wow-animated mt-5" data-wow-delay="0.3s">
                    <h2 class="sec-title h1"><?php echo $product['p_name']; ?></h2>
                    <p class="mb-2 mt-1 pb-1"><?php echo $product['description']; ?></p>

                    <div class="principal mx-4 mt-5">
                        <h5>Brand</h5>
                        <div class="d-flex ">
                            <span class="logo_img"> <a><img src="<?php echo base_url('uploads/Brands/' . $product['brand']); ?>" alt="brand-logo"></a></span>
                            <div class="downbtn">
                                <button class="vs-btn style5 mx-5">Download PDF</button>
                            </div>
                            <div class="downbtn">
                                <button class="vs-btn style5">Request a Quote</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <blockquote>
        <!-- <h3>Features and Benefits:</h3> -->
        <br>
            <p><?php echo $product['features']; ?></p>
            <!-- <p><strong>Applications:</strong></p> -->
            <p><?php echo $product['application']; ?></p>
            <br>
    </blockquote>

    <div class="vs-blog blog-single">
        <h1 class="text-center">Product Video</h1>
        <div class="blog-img text-center m-5">
            <a href="<?php echo base_url("product-category") ?>"><img src="<?php echo base_url("assets/img/blog/blog-s-1-4.png") ?>" alt="Blog Image"></a>
            <a href="<?php echo $product['video_link']; ?>" class="play-btn popup-video"><i class="fas fa-play"></i></a>
        </div>
    </div>

    <div class="related-product mx-4 my-3">
        <h1 class="text-center">Related Products</h1>
    </div>
    <div class="container space-extra-bottom">
        <div class="row vs-carousel" data-slide-show="3" data-lg-slide-show="3" data-md-slide-show="2">
            <!-- Related products can be added here similarly -->
            <?php foreach ($products as $row) { ?>
                <div class="col-xl-4 product1">
                    <div class="project-style1">
                        <div class="project-img">
                            <a href="<?php echo base_url('product-detail') ?>">
                                <img src="<?php echo base_url('uploads/Product/' . $row['image']); ?>" class="img-fluid" alt="Product Image">
                            </a>
                        </div>
                        <div class="project-content">
                            <h3 class="project-title h6">
                                <a class="text-inherit" href="#">
                                    <?php echo $row['p_name']; // Assuming 'p_name' contains the product name 
                                    ?>
                                </a>
                            </h3>
                            <a href="<?php echo base_url('product-detail/' . $row['p_id']); ?>" class="vs-btn style3">
                                View Details<i class="far fa-arrow-right"></i>
                            </a>

                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

    <section class="z-index-common space background-image m-5"
        style="background-image: url('<?php echo base_url('assets/img/bg/cta-bg-1-1.png'); ?>');">

        <div class="container">
            <div class="row text-center text-lg-start align-items-center justify-content-between">
                <div class="col-lg-auto">
                    <span class="sec-subtitle text-white">We are here to answer your questions 24/7</span>
                    <h2 class="h1 sec-title cta-title1">Need A Consultation?</h2>
                </div>
                <div class="col-lg-auto">
                    <a href="contact.html" class="vs-btn">Get A Quote<i class="far fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

<?php else : ?>
    <p>Product not found.</p>
<?php endif; ?>
