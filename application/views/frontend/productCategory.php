<div class="breadcumb-wrapper" data-bg-src="<?= base_url('uploads/banners/') . $banner['image']; ?>">
    <div class="container z-index-common">
        <div class="breadcumb-content">
            <!-- Display the category name dynamically -->
            <h1 class="breadcumb-title">
                <?php echo isset($category['c_name']) ? $category['c_name'] : 'Product Category'; ?></h1>
            <div class="breadcumb-menu-wrap">
                <ul class="breadcumb-menu">
                    <li><a href="<?php echo base_url() ?>">Home</a></li>
                    <li class="currentLocation"><?php echo isset($category['c_name']) ? $category['c_name'] : 'Product Category'; ?></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="product-heading">
    <h1 class="text-center my-4 text-primary text-capitalize border-bottom w-auto " >
        <?php echo isset($category['c_name']) ? $category['c_name'] : 'Product Category Page'; ?></h1>
</div>


<div class="contain">
    <?php if (isset($subcategories) && !empty($subcategories)): ?>
        <?php foreach ($subcategories as $subcategory): ?>
            <!-- Display subcategory name dynamically and add anchor link -->
            <div id="subcategory-<?php echo $subcategory['sc_id']; ?>" class="related-product">
                <h1 class="mx-5">
                    <a href="#subcategory-<?php echo $subcategory['sc_id']; ?>" class="scroll-to-subcategory text-capitalize" style="color:black">
                        <?php echo isset($subcategory['sc_name']) ? $subcategory['sc_name'] : ' Sub Category '; ?>
                    </a>
                </h1>
            </div>

            <?php
            // Fetch products for the current subcategory
            $products_in_subcategory = array_filter($products, function ($product) use ($subcategory) {
                return $product['sc_id'] == $subcategory['sc_id'];
            });

            // Group products by type (if available)
            $products_by_type = [];
            foreach ($products_in_subcategory as $product) {
                $type = isset($product['type']) ? $product['type'] : 'None'; // 'None' for products without a type
                $products_by_type[$type][] = $product;
            }

            // Loop through types (including 'None' for products without a type)
            foreach ($products_by_type as $type => $products_for_type):
                // Shortened ID using the first letter of the type and subcategory ID
                $short_id = strtolower(substr($type, 0, 1)) . $subcategory['sc_id'];
            ?>
                <!-- Only display type name if it's not 'None' -->
                <?php if ($type != 'None'): ?>
                    <h3 class="mx-5 px-5 text-secondary text-capitalize">( <?php echo $type ?> )</h3>
                <?php endif; ?>

                <!-- Owl Carousel container for products of a specific type -->
                <div class="container space-extra-bottom">
                    <div class="owl-carousel owl-theme" id="productsubcategory-<?php echo $short_id; ?>">
                        <?php if (!empty($products_for_type)): ?>
                            <?php foreach ($products_for_type as $product): ?>
                                <div class="item">
                                    <div class="col-xl-4 product1">
                                        <div class="project-style1" style="min-height:210px">
                                            <div class="project-img">
                                                <a href="<?php echo base_url('product-detail/' . $product['p_id']); ?>">
                                                    <img src="<?php echo base_url('uploads/Product/' . $product['image']); ?>" class="img-fluid" alt="Product Image">
                                                </a>
                                            </div>
                                            <div class="project-content text-center px-0">
                                                <h3 class="project-title h6">
                                                    <a class="text-inherit text-capitalize" href="<?php echo base_url('product-detail/' . $product['p_id']); ?>">
                                                        <?php echo isset($product['p_name']) ? $product['p_name'] : 'Product'; ?>
                                                    </a>
                                                </h3>
                                                <a href="<?php echo base_url('product-detail/' . $product['p_id']); ?>" class="vs-btn style3">
                                                    View Details<i class="far fa-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <p>No products available for this type.</p>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endforeach; ?>
    <?php else: ?>
        <p>No subcategories available.</p>
    <?php endif; ?>
</div>


<!-- Initialize the Owl Carousel slider -->
<script>
    $(document).ready(function() {
        // Initialize Owl Carousel for each subcategory and type
        <?php foreach ($subcategories as $subcategory): ?>
            <?php
            // Group products by type for the current subcategory
            $products_in_subcategory = array_filter($products, function ($product) use ($subcategory) {
                return $product['sc_id'] == $subcategory['sc_id'];
            });
            $products_by_type = [];
            foreach ($products_in_subcategory as $product) {
                $type = isset($product['type']) ? $product['type'] : 'None';
                $products_by_type[$type][] = $product;
            }
            ?>
            <?php foreach ($products_by_type as $type => $products_for_type): ?>
                var sanitizedType = "<?php echo strtolower(substr($type, 0, 1)) . $subcategory['sc_id']; ?>";

                $('#productsubcategory-<?php echo strtolower(substr($type, 0, 1)) . $subcategory['sc_id']; ?>').owlCarousel({
                    loop: false, 
                    margin: 50, 
                    nav: false, 
                    dots: true, 
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
        <?php endforeach; ?>
    });
</script>
