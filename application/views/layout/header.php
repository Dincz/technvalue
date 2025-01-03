<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Technovalue Solutions</title>
    <meta name="author" content="vecuro">
    <meta name="description" content="Crezvatic">
    <meta name="keywords" content="Crezvatic" />
    <meta name="robots" content="INDEX,FOLLOW">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicons - Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" sizes="57x57" href=" <?php echo base_url() ?>assets/img/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href=" <?php echo base_url() ?>assets/img/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href=" <?php echo base_url() ?>assets/img/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href=" <?php echo base_url() ?>assets/img/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href=" <?php echo base_url() ?>assets/img/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href=" <?php echo base_url() ?>assets/img/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href=" <?php echo base_url() ?>assets/img/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href=" <?php echo base_url() ?>assets/img/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href=" <?php echo base_url() ?>assets/img/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href=" <?php echo base_url() ?>assets/img/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href=" <?php echo base_url() ?>assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href=" <?php echo base_url() ?>assets/img/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url() ?>assets/img/favicons/favicon-16x16.png">
    <link rel="manifest" href="<?php echo base_url() ?>assets/img/favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!--==============================
      Google Fonts
    ============================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Exo:wght@400;500;600;700&family=Fira+Sans:wght@400;500&display=swap"
        rel="stylesheet">

    <!--==============================
        All CSS File
    ============================== -->
    <!-- Bootstrap -->
    <!-- <link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/animate.css"> -->
    <!-- <link rel="stylesheet" href="assets/css/app.min.css"> -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
    <!-- Fontawesome Icon -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/fontawesome.min.css">
    <!-- Layerslider -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/layerslider.min.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/magnific-popup.min.css">
    <!-- Slick Slider -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/slick.min.css">
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">

    <!-- Owl carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body class="home-four">


    <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->



    <!--********************************
           Code Start From Here 
    ******************************** -->




    <!--==============================
     Preloader
  ==============================-->
    <!-- <div class="preloader  ">
        <button class="vs-btn preloaderCls">Cancel Preloader </button>
        <div class="preloader-inner">
            <span class="loader"></span>
        </div>
    </div> -->
    <!--==============================
    Mobile Menu
  ============================== -->



    <div class="vs-menu-wrapper mobileMenu">

        <div class="vs-menu-area text-center">
            <!-- Toggle button with an initial "hamburger" icon -->
            <button class="vs-menu-toggle"><i class="fal fa-bars"></i></button>
            <!-- <div class="mobile-logo">
            <a href="<?php echo base_url() ?>"><img src="<?php echo base_url() ?>assets/img/logo.png" alt="Crezvatic" class="logo"></a>
        </div> -->
            <!-- Mobile Menu -->
            <div class="vs-mobile-menu">
                <ul>
                    <li><a href="<?php echo base_url() ?>">Home</a></li>
                    <li><a href="<?php echo base_url('about-us') ?>">About Us</a></li>
                    <li class="menu-item-has-children">
                        <a href="service-category">Service</a>
                    </li>
                    <li class="menu-item-has-children mega-menu-wrap px-0">
                        <!-- Products Dropdown Toggle -->
                        <div class="products-dropdown-toggle d-flex justify-content-center "
                            onclick="toggleProductsDropdown(this)">
                            <span class="products-title text-primary">Products</span>
                            <i class="fa fa-caret-down arrIcon"></i>
                        </div>

                        <!-- Mega Menu with Categories -->
                        <ul class="mega-menu">
                            <div class="row">
                                <? ?>
                                <?php

                                if (isset($hierarchy) && is_array($hierarchy) && !empty($hierarchy)):
                                    foreach ($hierarchy as $category):
                                        if (isset($category['category_name']) || isset($category['category_seo_url'])):
                                ?>
                                            <li class="col-12 category-item">
                                                <!-- Category Title -->
                                                <div class="category-title d-flex justify-content-between"
                                                    onclick="toggleCategoryDropdown(this)">
                                                    <span class="category-name text-left">
                                                        <a href="<?php echo site_url('product-category/' . (isset($category['category_seo_url']) ? $category['category_seo_url'] : '')); ?>"
                                                            class="category-title text-capitalize p-0 m-0 text-start">
                                                            <?php echo isset($category['category_name']) ? $category['category_name'] : 'Category ' . $category['category_seo_url']; ?>
                                                        </a>
                                                    </span>
                                                    <i class="fa fa-caret-down arrIcon"></i>
                                                </div>

                                                <!-- Subcategories under category -->
                                                <div class="subcategories">
                                                    <?php
                                                    if (isset($category['subcategories']) && is_array($category['subcategories'])):
                                                        foreach ($category['subcategories'] as $subcategory):
                                                    ?>
                                                            <div class="subcategory-item">
                                                                <div class="subcategory-title d-flex justify-content-between"
                                                                    onclick="toggleSubcategoryDropdown(this)">
                                                                    <span class="subcategory-name border-bottom">
                                                                        <a href="<?php echo site_url('product-category/' . (isset($category['category_seo_url']) ? $category['category_seo_url'] : '') . '#subcategory-' . substr(preg_replace('/[^a-zA-Z0-9_-]/', '', strtolower(str_replace(' ', '-', $subcategory['subcategory_seo_url']))), 0, 10)); ?>">
                                                                            <?php echo isset($subcategory['subcategory_name']) ? $subcategory['subcategory_name'] : 'Subcategory'; ?>
                                                                        </a>
                                                                    </span>
                                                                    <i class="fa fa-caret-down arrIcon"></i>
                                                                </div>

                                                                <!-- Products under subcategory -->
                                                                <ul class="products-list">
                                                                    <?php if (isset($subcategory['products']) && is_array($subcategory['products'])): ?>
                                                                        <?php foreach ($subcategory['products'] as $product): ?>
                                                                            <li class="product-item">
                                                                                <a class="text-secondary text-capitalize"
                                                                                    href="<?php echo site_url('product-detail/' . (isset($product['product_seo_url']) ? $product['product_seo_url'] : '')); ?>">
                                                                                    <?php echo isset($product['product_name']) ? $product['product_name'] : 'Product'; ?>
                                                                                </a>
                                                                            </li>
                                                                        <?php endforeach; ?>
                                                                    <?php endif; ?>
                                                                </ul>
                                                            </div>
                                                        <?php endforeach; ?>
                                                    <?php endif; ?>
                                                </div>
                                            </li>
                                    <?php
                                        endif;
                                    endforeach;
                                else:
                                    ?>
                                    <li class="col-12">
                                        <p>No products available</p>
                                    </li>
                                <?php endif; ?>
                            </div>
                        </ul>
                    </li>
                    <li><a href="<?php echo base_url('gallery-category') ?>">Gallery</a></li>
                    <li><a href="<?php echo base_url('partners') ?>">Partners</a></li>
                    <li><a href="<?php echo base_url('blog') ?>">Blog</a></li>
                    <li><a href="<?php echo base_url('contact') ?>">Contact</a></li>
                    <li><a href="<?php echo base_url('career') ?>">Careers</a></li>
                </ul>
            </div>
        </div>
    </div>


    <!--==============================
        Header Area
    ==============================-->
    <header class="vs-header header-layout5">
        <div class="header-shape1"></div>
        <div class="header-top">
            <div class="container">
                <div class="row align-items-center justify-content-between gx-20">
                    <div class="col-auto">
                        <div class="col-auto header-links style-white">

                            <li class="emai"><i class="far fa-envelope"></i><a
                                    href="mailto:sales@technovalue.in">sales@technovalue.in
                                </a></li>

                        </div>
                    </div>
                    <div class="col d-none d-md-block">
                        <div class="header-links style-white">

                            <li><i class="far fa-map-marker-alt"></i> Kopar Khairane, Navi Mumbai, Maharashtra 400709
                            </li>

                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="header-social style-white">
                            <a href="https://www.facebook.com/technovaluesolutions2019">
                                <i class="fab fa-facebook-f"></i></a>
                            <a href="https://twitter.com/technovalue123">
                                <i class="fab fa-twitter"></i></a>
                            <!-- <a href="https://www.linkedin.com/company/technovaluesolutions/posts/?feedView=all&amp;viewAsMember=true"> -->
                            <a href="https://www.linkedin.com/company/18785771/admin/dashboard/">
                                <i class="fab fa-linkedin"></i></a>
                            <a href="https://www.instagram.com/technovaluesolutions/">
                                <i class="fab fa-instagram"></i></a>
                            <a href="https://pin.it/5a44BTUK7">
                                <i class="fab fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sticky-wrapper">
            <div class="sticky-active">
                <div class="menu-area">
                    <div class="container customCont">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-lg-2 col-6 ">
                                <div class="header-logo p-3">
                                    <a href="<?php echo base_url() ?>"><img
                                            src="<?php echo base_url() ?>assets/img/logo.png" alt="Crezvatic"
                                            class="logo"></a>
                                </div>
                            </div>
                            <div class="col-10  text-end text-xl-center">
                                <nav class="main-menu menu-style4 d-none d-lg-block">
                                    <ul>
                                        <li>
                                            <a href="<?php echo base_url() ?>">Home</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url('about-us') ?>">About Us</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url("service-category") ?>">Service</a>
                                            <!-- <ul class="sub-menu"> -->
                                            <!-- <li><a href="service.html">Service</a></li> -->
                                            <!-- </ul> -->
                                        </li>
                                        <!-- <li><a href="<?php echo base_url("service-details") ?>">Service Details</a></li> -->

                                        <li class="menu-item-has-children mega-menu-wrap">
                                            <a href="#">Products</a>
                                            <ul class="mega-menu">
                                                <div class="row">
                                                    <?php
                                                    if (isset($hierarchy) && is_array($hierarchy) && !empty($hierarchy)):
                                                        foreach ($hierarchy as $category):
                                                            if (isset($category['category_name']) || isset($category['category_seo_url'])):
                                                    ?>
                                                                <li class="col-3 ">
                                                                    <!-- Update the anchor link to redirect to the category page -->
                                                                    <a href="<?php echo site_url('product-category/' . (isset($category['category_seo_url']) ? $category['category_seo_url'] : '')); ?>"
                                                                        class="category-title text-capitalize">
                                                                        <?php echo isset($category['category_name']) ? $category['category_name'] : 'Category ' . $category['category_seo_url']; ?>
                                                                    </a>
                                                                    <div class="submenu-wrapper">
                                                                        <ul class="submenu custom-scrollbar initially-visible">
                                                                            <?php
                                                                            if (isset($category['subcategories']) && is_array($category['subcategories'])):
                                                                                $count = 0;
                                                                                foreach ($category['subcategories'] as $subcategory):
                                                                                    $visibility_class = $count >= 5 ? 'initially-hidden' : '';
                                                                                    $count++;
                                                                            ?>
                                                                                    <li
                                                                                        class="subcategory-item <?php echo $visibility_class; ?>">
                                                                                        <a href="javascript:void(0);"
                                                                                            class="subcategory-link d-flex align-items-center justify-content-between">
                                                                                            <!-- Subcategory name with redirection -->
                                                                                            <span
                                                                                                class="subcategory-name d-flex justify-content-between ">
                                                                                                <a class="d-inline p-0 fw-bold text-capitalize"
                                                                                                    href="<?php echo site_url('product-category/' . (isset($category['category_seo_url']) ? $category['category_seo_url'] : '') . '#subcategory-' . substr(preg_replace('/[^a-zA-Z0-9_-]/', '', strtolower(str_replace(' ', '-', $subcategory['subcategory_seo_url']))), 0, 10)); ?>">
                                                                                                    <?php echo isset($subcategory['subcategory_name']) ? $subcategory['subcategory_name'] : 'Subcategory'; ?>
                                                                                                </a>
                                                                                                <i class="fa fa-caret-down arrIcon"
                                                                                                    style="color: black;"
                                                                                                    onclick="toggleProducts(this)"></i>
                                                                                            </span>

                                                                                            <!-- Arrow icon with dropdown toggle action -->

                                                                                        </a>
                                                                                        <?php
                                                                                        if (isset($subcategory['products']) && is_array($subcategory['products'])):
                                                                                        ?>
                                                                                            <ul class="products custom-scrollbar">
                                                                                                <?php foreach ($subcategory['products'] as $product): ?>
                                                                                                    <li class="product-item">
                                                                                                        <a
                                                                                                            class=" text-secondary text-capitalize"
                                                                                                            href="<?php echo site_url('product-detail/' . (isset($product['product_seo_url']) ? $product['product_seo_url'] : '')); ?>">
                                                                                                            <?php echo isset($product['product_name']) ? $product['product_name'] : 'Product'; ?>
                                                                                                        </a>
                                                                                                    </li>
                                                                                                <?php endforeach; ?>
                                                                                            </ul>
                                                                                        <?php endif; ?>
                                                                                    </li>
                                                                            <?php
                                                                                endforeach;
                                                                            endif;
                                                                            ?>
                                                                        </ul>

                                                                    </div>
                                                                </li>
                                                        <?php
                                                            endif;
                                                        endforeach;
                                                    else:
                                                        ?>
                                                        <li class="col-12">
                                                            <p>No products available</p>
                                                        </li>
                                                    <?php endif; ?>
                                                </div>

                                            </ul>
                                        </li>

                                        <li class="">
                                            <a href="<?php echo base_url("gallery-category") ?>">Gallery</a>
                                            <!-- <ul class="sub-menu"> -->
                                            <!-- </ul> -->
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url('partners') ?>">Partners</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url('blog') ?>">Blog</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url("contact") ?>">Contact</a>
                                            <!-- <ul class="sub-menu"> -->
                                            <!-- </ul> -->
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url('career') ?>">Careers</a>
                                        </li>

                                    </ul>
                                </nav>
                                <!-- <button class="vs-menu-toggle d-inline-block d-lg-none"><i
                                        class="fal fa-bars"></i></button> -->
                            </div>
                            <!-- <div class="col-auto d-none d-xxxl-block">
                                <div class="header-info style2">
                                    <div class="header-info_icon">
                                        <img src="assets/img/icon/tel-1-2.png" alt="call icon">
                                    </div>
                                    <div class="media-body">
                                        <span class="header-info_label">Call Now</span>
                                        <div class="header-info_link"><a href="tel:+89012562156">+89(0) 1256 2156</a>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- <div class="col-auto d-none d-xl-block">
                                <div class="header-btns">
                                    <a href="#" class="vs-btn style7">GET QUOTE<i class="far fa-arrow-right"></i></a>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <script>
        function toggleProducts(element) {
            // Get the subcategory link
            const subcategoryLink = element;
            const productsList = element.nextElementSibling;

            // Toggle active class on subcategory link
            subcategoryLink.classList.toggle('active');

            // Toggle products visibility
            if (productsList) {
                productsList.classList.toggle('show');
            }

            // Close other open products in the same category
            const category = element.closest('.col-3');
            const otherProducts = category.querySelectorAll('.products.show');
            const otherActiveLinks = category.querySelectorAll('.subcategory-link.active');

            otherProducts.forEach(product => {
                if (product !== productsList) {
                    product.classList.remove('show');
                }
            });

            otherActiveLinks.forEach(activeLink => {
                if (activeLink !== subcategoryLink) {
                    activeLink.classList.remove('active');
                }
            });
        }

        // Handle scroll indicator visibility
        document.querySelectorAll('.submenu').forEach(submenu => {
            submenu.addEventListener('scroll', function() {
                const scrollIndicator = this.parentElement.querySelector('.scroll-indicator');
                if (scrollIndicator) {
                    if (this.scrollHeight - this.scrollTop === this.clientHeight) {
                        scrollIndicator.style.opacity = '0';
                    } else {
                        scrollIndicator.style.opacity = '1';
                    }
                }
            });
        });

        // Close products when clicking outside menu
        document.addEventListener('click', function(e) {
            if (!e.target.closest('.mega-menu')) {
                document.querySelectorAll('.products.show').forEach(product => {
                    product.classList.remove('show');
                });
                document.querySelectorAll('.subcategory-link.active').forEach(link => {
                    link.classList.remove('active');
                });
            }
        });

        // Prevent menu from closing when clicking inside
        document.querySelector('.mega-menu').addEventListener('click', function(e) {
            e.stopPropagation();
        });
    </script>