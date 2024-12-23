<div class="breadcumb-wrapper" data-bg-src="<?= base_url('uploads/banners/') . $banner['image']; ?>">
    <div class="container z-index-common">
        <div class="breadcumb-content">
            <!-- Display the category name dynamically -->
            <h1 class="breadcumb-title">
                <?php echo isset($category['c_name']) ? $category['c_name'] : 'Product Category'; ?></h1>
            <div class="breadcumb-menu-wrap">
                <ul class="breadcumb-menu">
                    <li><a href="<?php echo base_url() ?>">Home</a></li>
                    <li><?php echo isset($category['c_name']) ? $category['c_name'] : 'Product Category'; ?></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="product-heading">
    <h1 class="text-center my-4">
        <?php echo isset($category['c_name']) ? $category['c_name'] : 'Product Category Page'; ?></h1>
</div>

<div class="contain">
    <?php if (isset($subcategories) && !empty($subcategories)): ?>
        <?php foreach ($subcategories as $subcategory): ?>
            <!-- Display subcategory name dynamically and add anchor link -->
            <div id="subcategory-<?php echo $subcategory['sc_id']; ?>" class="related-product">
                <h1 class="mx-5">
                    <a href="#subcategory-<?php echo $subcategory['sc_id']; ?>" class="scroll-to-subcategory "
                        style="color:black">
                        <?php echo isset($subcategory['sc_name']) ? $subcategory['sc_name'] : 'Sub Category'; ?>
                    </a>
                </h1>
            </div>

            <!-- Owl Carousel container for subcategory products -->
            <div class="container space-extra-bottom">
                <div class="owl-carousel owl-theme" id="productsubcategory<?php echo $subcategory['sc_id']; ?>">
                    <?php
                    // Fetch and display products for each subcategory
                    $products_in_subcategory = array_filter($products, function ($product) use ($subcategory) {
                        return $product['sc_id'] == $subcategory['sc_id'];
                    });

                    if (!empty($products_in_subcategory)): ?>
                        <?php foreach ($products_in_subcategory as $product): ?>
                            <div class="col-xl-4 product1">
                                <div class="project-style1" style="min-height:210px">
                                    <div class="project-img">
                                        <a href="<?php echo base_url('product-detail/' . $product['p_id']); ?>">
                                            <img src="<?php echo base_url('uploads/Product/' . $product['image']); ?>" class="img-fluid"
                                                alt="Product Image">
                                        </a>
                                    </div>
                                    <div class="project-content text-center px-0">
                                        <h3 class="project-title h6">
                                            <a class="text-inherit"
                                                href="<?php echo base_url('product-detail/' . $product['p_id']); ?>">
                                                <?php echo isset($product['p_name']) ? $product['p_name'] : 'Product'; ?>
                                            </a>
                                        </h3>
                                        <a href="<?php echo base_url('product-detail/' . $product['p_id']); ?>" class="vs-btn style3">
                                            View Details<i class="far fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <p>No products available for this subcategory.</p>
                    <?php endif; ?>
                </div>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p>No subcategories available.</p>
    <?php endif; ?>
</div>
<!-- Initialize the Owl Carousel slider -->
<script>
    $(document).ready(function () {
        // Initialize Owl Carousel for each subcategory
        <?php foreach ($subcategories as $subcategory): ?>
            $('#productsubcategory<?php echo $subcategory['sc_id']; ?>').owlCarousel({
                loop: false,  // Make the carousel loop
                margin: 50,  // Space between items
                nav: true,   // Enable next/prev buttons
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    768: {
                        items: 2
                    },
                    1000: {
                        items: 3
                    },
                    1200: {
                        items: 4
                    }
                }
            });
        <?php endforeach; ?>
    });
</script>