

<div class="breadcumb-wrapper" data-bg-src="<?= base_url('uploads/banners/') . $banner['image']; ?>">
<div class="container z-index-common">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Product Category</h1>
            <div class="breadcumb-menu-wrap">
                <ul class="breadcumb-menu">
                    <li><a href="<?php echo base_url() ?>">Home</a></li>
                    <li>Product Category</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="product-heading">
    <h1 class="text-center my-4">Product Category Page</h1>
</div>

<div class="contain">
    <div class="related-product">
        <h1 class="mx-5">Sub Category 1.1</h1>
    </div>

    <!-- Owl Carousel container -->
    <div class="container space-extra-bottom">
        <div class="owl-carousel owl-theme" id="productsubcategory">
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
</div>


<div class="contain">
    <div class="related-product">
        <h1 class="mx-5">Sub Category 1.2</h1>
    </div>
    <div class="container space-extra-bottom">
        <div class="owl-carousel owl-theme " id="productsubcategory1">
            <div class="col-xl-4 product1">
                <div class="project-style1">
                    <div class="project-img">
                        <a href="<?php echo base_url('product-detail') ?>">
                            <img src="assets/img/product/techno-product.png" alt="image">
                        </a>
                    </div>
                    <div class="project-content">
                        <h3 class="project-title h6"><a class="text-inherit" href="#">IT Software Solution</a></h3>
                        <a href="<?php echo base_url('product-detail') ?>" class="vs-btn style3">View Details<i
                                class="far fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 product1">
                <div class="project-style1">
                    <div class="project-img">
                        <a href="<?php echo base_url('product-detail') ?>">
                            <img src="assets/img/product/techno-product.png" alt="image">
                        </a>
                    </div>
                    <div class="project-content">
                        <h3 class="project-title h6"><a class="text-inherit" href="#">IT Software Solution</a></h3>
                        <a href="<?php echo base_url('product-detail') ?>" class="vs-btn style3">View Details<i
                                class="far fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 product1">
                <div class="project-style1">
                    <div class="project-img">
                        <a href="<?php echo base_url('product-detail') ?>">
                            <img src="assets/img/product/techno-product.png" alt="image">
                        </a>
                    </div>
                    <div class="project-content">
                        <h3 class="project-title h6"><a class="text-inherit" href="#">IT Software Solution</a></h3>
                        <a href="<?php echo base_url('product-detail') ?>" class="vs-btn style3">View Details<i
                                class="far fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 product1">
                <div class="project-style1">
                    <div class="project-img">
                        <a href="<?php echo base_url('product-detail') ?>">
                            <img src="assets/img/product/techno-product.png" alt="image">
                        </a>
                    </div>
                    <div class="project-content">
                        <h3 class="project-title h6"><a class="text-inherit" href="#">IT Software Solution</a></h3>
                        <a href="<?php echo base_url('product-detail') ?>" class="vs-btn style3">View Details<i
                                class="far fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 product1">
                <div class="project-style1">
                    <div class="project-img">
                        <a href="<?php echo base_url('product-detail') ?>">
                            <img src="assets/img/product/techno-product.png" alt="image">
                        </a>
                    </div>
                    <div class="project-content">
                        <h3 class="project-title h6"><a class="text-inherit" href="#">IT Software Solution</a></h3>
                        <a href="<?php echo base_url('product-detail') ?>" class="vs-btn style3">View Details<i
                                class="far fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 product1">
                <div class="project-style1">
                    <div class="project-img">
                        <a href="<?php echo base_url('product-detail') ?>">
                            <img src="assets/img/product/techno-product.png" alt="image">
                        </a>
                    </div>
                    <div class="project-content">
                        <h3 class="project-title h6"><a class="text-inherit" href="#">IT Software Solution</a></h3>
                        <a href="<?php echo base_url('product-detail') ?>" class="vs-btn style3">View Details<i
                                class="far fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 product1">
                <div class="project-style1">
                    <div class="project-img">
                        <a href="<?php echo base_url('product-detail') ?>">
                            <img src="assets/img/product/techno-product.png" alt="image">
                        </a>
                    </div>
                    <div class="project-content">
                        <h3 class="project-title h6"><a class="text-inherit" href="#">IT Software Solution</a></h3>
                        <a href="<?php echo base_url('product-detail') ?>" class="vs-btn style3">View Details<i
                                class="far fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <!-- Repeat similar product blocks -->
        </div>
    </div>
</div>