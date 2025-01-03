<?php if (isset($product) && count($product) > 0) : ?>
    <?php
    $product = $product; // Select the first product
    ?>

    <div class="breadcumb-wrapper background-image"
        data-bg-src="<?= base_url('uploads/banners/banner-1.jpg'); ?>" loading="lazy">
        <div class="container z-index-common revokenpm">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title currentLocation text-capitalize"><?php echo $product['p_name'] ?></h1>
                <div class="breadcumb-menu-wrap">
                </div>
            </div>
        </div>
    </div>

    <nav aria-label="breadcrumb ">
        <ol class="breadcrumb addingStyle d-none d-md-flex">
            <li class="breadcrumb-item"><a href="#"><i class="far fa-house"></i></a></li>
            <li class="breadcrumb-item"><a href="<?php echo base_url() . 'product-category/' . $product['c_id']; ?>" class="text-capitalize"><?php echo $product['category_seo_url'] ?></a></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="<?php echo base_url() . 'product-category/' . $product['c_id'] . '#subcategory-'  . $product['sc_id']; ?>" class="text-capitalize"><?php echo $product['subcategory_seo_url'] ?> </a></li>
        </ol>
    </nav>
    <section class="position-relative space-bottom" style="background-image: url(assets/img/bg/ab-bg-1-1.jpg);" loading="lazy">
        <div class="container z-index-common">
            <div class="row gx-60">
                <div class="col-lg-6 col-xl-5 mb-50 mb-lg-0 wow fadeInUp wow-animated m-0" data-wow-delay="0.2s">
                    <div class="img-box1">
                        <div class="img-1 mt-5">
                            <img src="<?php echo base_url('uploads/Product/' . $product['image']); ?>" class="img-responsive mt-0 limiting-height" alt="Product Image" loading="lazy">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-7 align-self-center wow fadeInUp wow-animated mt-5" data-wow-delay="0.3s">
                    <h2 class="sec-title4 text-left"><?php echo $product['p_name']; ?></h2>
                    <p class="mb-2 mt-1 pb-1 text-start txtsizing"><?php echo $product['description']; ?></p>

                    <div class="principal mx-4 mt-5">
                        <!-- <h5>Brand</h5> -->
                        <div class="d-flex adjustinginMobile">
                            <!-- <span class="logo_img"> <a><img src="<?php echo base_url('uploads/Brands/' . $product['brand']); ?>" alt="brand-logo"></a></span> -->
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

    <blockquote class="blockquote p-4 bg-light border rounded">
        <p class="mb-0"><?php echo $product['application']; ?></p>
    </blockquote>



    <div class="related-product mx-4 my-3 space-top">
        <h1 class="text-center">Related Products</h1>
    </div>
    <div class="container space-top">
        <div class="row vs-carousel" data-slide-show="3" data-lg-slide-show="3" data-md-slide-show="2"
            data-xs-arrows="false" data-sm-arrows="false" >
            <!-- Related products can be added here similarly -->
            <?php foreach ($products as $row) { ?>
                <div class="col-xl-4 product1">
                    <div class="project-style1 d-flex flex-column justify-content-center align-items-center" style="min-height:210px">
                        <div class="project-img">
                            <a href="<?php echo base_url('product-detail') ?>">
                                <img src="<?php echo base_url('uploads/Product/' . $row['image']); ?>" class="img-fluid relatedImg " alt="Product Image" loading="lazy">
                            </a>
                        </div>
                        <div class="project-content">
                            <h3 class="project-title h6 text-center">
                                <a class="text-inherit" href="#">
                                    <?php echo $row['p_name']; // Assuming 'p_name' contains the product name 
                                    ?>
                                </a>
                            </h3>
                            <a href="<?php echo base_url('product-detail/' . $row['seo_url']); ?>" class="vs-btn style3">
                                View Details<i class="far fa-arrow-right"></i>
                            </a>

                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

    <section class="cta-Banner z-index-common space background-image m-5"
        style="background-image: url('<?php echo base_url('assets/img/bg/cta-bg-1-1.png'); ?>');" loading="lazy">

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