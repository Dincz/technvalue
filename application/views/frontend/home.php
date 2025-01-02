<?php $this->load->view('layout/header'); ?>

<!--==============================
    Hero Area
    ==============================-->
<section class="  ">
    <div class="vs-carousel hero-layout4" data-slide-show="1" data-fade="true" data-arrows="true"
        data-prev-arrow="far fa-arrow-up" data-next-arrow="far fa-arrow-down">
        <div>
            <div class="hero-bg" loading="lazy" data-bg-src="assets/img/hero/hero-4-1.png"></div>
            <!-- <div class="hero-img"><img src="assets/img/hero/hero-4-1-1.png" alt="hero"></div> -->
            <div class="hero-shape1"></div>
            <div class="hero-inner">
                <div class="hero-shape2"><img src="assets/img/hero/hero-shape-4-1.png" alt="bg shape" loading="lazy"></div>
                <div class="container">
                    <div class="hero-content">
                        <span class="hero-subtitle">We Make Your Company Brighter</span>
                        <h1 class="hero-title">Online Business</h1>
                        <h1 class="hero-title2">Solution For You</h1>
                        <div class="hero-btns">
                            <a href="#" id="quoteBtn" class="vs-btn style7">Get In Touch</a>
                            <!-- <a href="blog.html" class="vs-btn style10 mobile-white">Learn More</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="hero-bg" data-bg-src="assets/img/hero/hero-4-2.png" loading="lazy"></div>
            <div class="hero-img"><img src="assets/img/hero/hero-4-1-2.png" alt="hero" loading="lazy"></div>
            <div class="hero-shape1"></div>
            <div class="hero-inner">
                <div class="hero-shape2"><img src="assets/img/hero/hero-shape-4-1.png" loading="lazy" alt="bg shape"></div>
                <div class="container">
                    <div class="hero-content">
                        <span class="hero-subtitle">We Make Your Company Digital</span>
                        <h1 class="hero-title">Grow Business</h1>
                        <h1 class="hero-title2">Support For You</h1>
                        <div class="hero-btns">
                            <a href="about" class="vs-btn style7">Get In Touch</a>
                            <a href="blog.html" class="vs-btn style10 mobile-white">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="hero-bg" data-bg-src="assets/img/hero/hero-4-3.png" loading="lazy"></div>
            <div class="hero-img"><img src="assets/img/hero/hero-4-1-3.png" alt="hero" loading="lazy"></div>
            <div class="hero-shape1"></div>
            <div class="hero-inner">
                <div class="hero-shape2"><img src="assets/img/hero/hero-shape-4-1.png" loading="lazy" alt="bg shape"></div>
                <div class="container">
                    <div class="hero-content">
                        <span class="hero-subtitle">We Make Your Company Success</span>
                        <h1 class="hero-title">Digital Store</h1>
                        <h1 class="hero-title2">Provider For You</h1>
                        <div class="hero-btns">
                            <a href="about" class="vs-btn style7">Get In Touch</a>
                            <a href="blog.html" class="vs-btn style10 mobile-white">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- <div class="big-name d-none d-xxl-block">Crezvatic</div>    -->

<!-- whats new section  -->

<section id="latest">
    <div class="container mt-5">
        <div class="row whatsNew">
            <!-- Section 1: What's New -->
            <div class="col-md-4 col-12 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="section-title m-0">What's New</h5>

                        <!-- Dynamically display each 'what's new' item -->
                        <?php if (!empty($whats_new)): ?>
                            <?php foreach ($whats_new as $new_item): ?>
                                <img src="<?php echo base_url('uploads/services/' . $new_item['w_image']); ?>"
                                    alt="<?php echo $new_item['w_title']; ?>" class="img-fluid mb-3 w-100" loading="lazy">
                                <h6 class="m-0"><?php echo $new_item['w_title']; ?></h6>
                                <p class="m-0"><strong><?php echo $new_item['w_description']; ?></strong></p>
                                <hr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <p>No updates available.</p>
                        <?php endif; ?>
                        <!-- <a href="<?php echo base_url() . 'product-category/1' ?>" class="btn view-all-btn">View All</a> -->
                    </div>
                </div>
            </div>


            <!-- Section 2: Exhibitions & Trainings -->
            <div class="col-md-4 col-12 mb-4 home ">
                <div class="tab d-flex text-center">
                    <div class="tablinks col-6 py-2 text-dark fw-medium" onclick="openTab(event, 'aimilShows')">Jobs
                    </div>
                    <div class="tablinks col-6 py-2 text-dark fw-medium" onclick="openTab(event, 'seminarTrainings')">
                        Seminar / Trainings
                    </div>
                </div>

                <!-- Tab content: Aimil at Shows -->
                <div class="middleContent position-relative card rounded">

                    <!-- Trying to convert first for each loop -->
                    <div id="aimilShows" class="tabcontent p-5">
                        <?php
                        foreach ($jobs as $job) {
                        ?>
                            <p class="m-0 fw-semibold recolor">Title: <?php echo $job->title; ?></p>
                            <p class="m-0 recolor">
                                <strong>Department: <?php echo $job->department; ?></strong><br>
                                Experience: <?php echo $job->experience; ?><br>
                                Location: <?php echo $job->location; ?>
                            </p>
                            <a href="<?php echo base_url() . 'job-detail/' . $job->page_name; ?>" class="text-danger">Read More »</a>
                            <hr>
                        <?php
                        }
                        ?>
                        <div class="bottom-0 position-absolute mb-4">
                            <a href="<?php echo base_url() ?>career" class="btn view-all-btn ">View All</a>
                        </div>
                    </div>


                    <!-- Tab content: Seminar / Trainings -->
                    <div id="seminarTrainings" class="tabcontent p-5">
                        <p class="fw-semibold m-0">Seminar / Trainings</p>
                        <p><strong>Technical Seminar on New Innovations</strong><br>
                            15/10/2024<br>Hyatt Regency, New Delhi</p>
                        <a href="#" class="text-danger">Read More »</a>
                        <hr>
                        <div class="bottom-0 position-absolute mb-4">
                            <a href="<?php echo base_url() ?>career" class="btn view-all-btn ">View All</a>
                        </div>

                    </div>
                </div>

            </div>
            <!-- Include Swiper CSS (Ensure this is in your <head> section or before the swiper initialization) -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.css" />

            <!-- Section 3: Aimil Updates (Slider) -->
            <div class="col-md-4 col-12 mb-4 whatsNew">
                <div class="card py-5">
                    <div class="card-body">
                        <h5 class="section-title">Technovalue Updates</h5>
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <?php if (!empty($technical_updates)): ?>
                                    <?php foreach ($technical_updates as $update): ?>
                                        <?php if ($update['status'] == 1): ?>
                                            <div class="swiper-slide">
                                                <img src="<?php echo base_url('uploads/services/' . $update['u_image']); ?>" alt="No Image Found <?php echo $update['u_id']; ?>">
                                                <strong><?php echo $update['u_title']; ?></strong>
                                                <p><?php echo $update['u_description']; ?></p>
                                            </div>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <p>No updates available.</p>
                                <?php endif; ?>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Swiper Initialization -->





        </div>
    </div>
</section>
<!--  new section end  -->

<section class="container py-5">
    <h1 class="text-center pb-4">Featured Products</h1>

    <!-- Desktop View - Grid Layout -->
    <div class="d-none d-md-block">
        <div class="row justify-content-center align-items-stretch g-4">
            <?php foreach ($featured as $product): ?>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="card h-100 shadow-lg border-0 rounded overflow-hidden">
                        <div class="card-img-top position-relative">
                            <img src="<?php echo base_url('uploads/Product/' . htmlspecialchars($product['image'])); ?>"
                                alt="<?php echo htmlspecialchars($product['p_name']); ?>"
                                class="img-fluid w-100" loading="lazy">
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title mb-2 text-dark">
                                <a href="<?php base_url() ?>product-detail/<?php echo urlencode($product['seo_url']); ?>"
                                    class="text-decoration-none fw-bold">
                                    <?php echo htmlspecialchars($product['p_name']); ?>
                                </a>
                            </h5>
                        </div>
                        <div class="card-footer bg-white text-center">
                            <a href="<?php base_url() ?>product-detail/<?php echo $product['seo_url']; ?>"
                                class="btn btn-outline-primary btn-sm">
                                Read Details <i class="far fa-arrow-right ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- Mobile View - Slider -->
    <div class="d-block d-md-none">
        <div class="owl-carousel owl-theme">
            <?php foreach ($featured as $product): ?>
                <div class="item">
                    <div class="card h-100 shadow-lg border-0 rounded overflow-hidden">
                        <div class="card-img-top position-relative">
                            <img src="<?php echo base_url('uploads/Product/' . htmlspecialchars($product['image'])); ?>"
                                alt="<?php echo htmlspecialchars($product['p_name']); ?>"
                                class="img-fluid w-100" loading="lazy">
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title mb-2 text-dark">
                                <a href="<?php base_url() ?>product-detail/<?php echo urlencode($product['p_id']); ?>"
                                    class="text-decoration-none fw-bold">
                                    <?php echo htmlspecialchars($product['p_name']); ?>
                                </a>
                            </h5>
                        </div>
                        <div class="card-footer bg-white text-center">
                            <a href="<?php base_url() ?>product-detail/<?php echo $product['p_id']; ?>"
                                class="btn btn-outline-primary btn-sm">
                                Read Details <i class="far fa-arrow-right ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>






<!-- Our Client Section -->

<div class="container mb-30 text-center text-xl-start mb-50 mb-xl-0 wow fadeInUp" data-wow-delay="0.2s">
    <h1 class="border-title text-center pace-top space-extra-bottom">Our Clients</h1>
    <div class="owl-carousel" id="brandslide1">
        <?php if (!empty($client)): ?>
            <?php foreach ($client as $clients): ?>
                <?php if ($clients['status'] == 1): // Check if the (client) is active 
                ?>
                    <div class="vs-brand1">
                        <!-- Dynamically load image from the array -->
                        <img src="<?php echo base_url('uploads/brand/' . $clients['image']); ?>" alt="Client Logo" loading="lazy">
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        <?php else: ?>
            <p>No clients available.</p>
        <?php endif; ?>
    </div>
</div>





<section class="vs-blog-wrapper space-top space-extra-bottom">
    <div class="container">
        <div class="title-area text-center wow fadeInUp" data-wow-delay="0.2s">
            <!-- <span class="sec-subtitle2">Blog & News</span> -->
            <h2 class="sec-title4">Blogs</h2>
        </div>
        <div class="row  vs-carousel wow fadeInUp" data-wow-delay="0.4s" data-slide-show="3" data-md-slide-show="2" data-xs-dots="true" data-sm-dots="true">
            <?php foreach ($blog as $blog): ?>
                <div class="col-md-6 col-lg-4">
                    <div class="vs-blog blog-style1">
                        <div class="blog-img">
                            <img src="<?= base_url('uploads/blog/') . $blog['blog_small_image']; ?>" alt="Blog Image"
                                class="w-100" loading="lazy">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="<?php echo base_url('blog') ?>"><i class="far fa-calendar">
                                        <?= $blog['date']; ?></i></a>
                                <a href="<?php echo base_url('blog') ?>"><i class="fal fa-user"></i>
                                    <?= $blog['posted_by']; ?></a>
                            </div>
                            <h3 class="blog-title h5"><a
                                    href="<?= base_url('blog-details/' . $blog['id']); ?>"><?= $blog['title']; ?>
                                </a></h3>
                            <a href="<?= base_url('blog-details/' . $blog['id']); ?>" class="link-btn">Read Details<i
                                    class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!--==============================
    Testimonial Area
    ==============================-->
<section class=" space-to space-extra-bottom">
    <div class="container   wow fadeInUp" data-wow-delay="0.2s">
        <div class="row justify-content-between">
            <div class="col-lg-auto text-center text-lg-start">
                <div class="title-area">
                    <h2 class="sec-title4">Customer’s Feedback</h2>
                </div>
            </div>
        </div>
        <div class="row vs-carousel" data-slide-show="3" data-md-slide-show="2" id="testislide1">
            <?php foreach ($customer_feedback as $feedback): ?>

                <div class="col-xl-4">
                    <div class="testi-style1">
                        <div class="testi-icon"><i class="fal fa-quote-right"></i></div>
                        <p class="testi-text"><?= $feedback['feedback']; ?></p>
                        <h3 class="testi-name h6"><?= $feedback['customer_name']; ?></h3>
                        <div class="testi-degi"><?= $feedback['customer_designation']; ?></div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- gallery section  -->
<section class="space-extra-bottom">
    <h2 class="sec-title4 text-center">Gallery</h2>

    <div class="container wow fadeInUp" data-wow-delay="0.2s">
        <div class="row justify-content-between align-items-end mb-3">
            <div class="col-lg-auto text-center text-lg-start">
                <div class="title-area">
                    <!-- <span class="sec-subtitle"><i class="fas fa-bring-forward"></i>Our LATEST PROJECTS</span> -->
                    <!-- <h2 class="sec-title4 ">Gallery</h2> -->
                </div>
            </div>
            <div class="col-auto d-none d-lg-block">
                <div class="sec-btns">
                    <button class="vs-btn style4" data-slick-prev="#projectslide1"><i
                            class="far fa-arrow-left"></i>Prev</button>
                    <button class="vs-btn style4" data-slick-next="#projectslide1">Next<i
                            class="far fa-arrow-right"></i></button>
                </div>
            </div>
        </div>
    </div>

    <div class="container overflow-hidden px-xxl-0">
        <div class="row vs-carousel" data-slide-show="4" data-ml-slide-show="3" data-lg-slide-show="3"
            data-md-slide-show="2" id="projectslide1" data-xs-dots="true" data-sm-dots="true">

            <?php foreach ($gallery_items as $item): ?>
                <div class="col-xl-3">
                    <div class="project-style2">
                        <div class="card h-100 shadow-sm">
                            <div class="card-img-wrapper" style="height: 250px; overflow: hidden;">
                                <img src="<?php echo base_url('uploads/gallery/All_images/' . $item['background_image']); ?>"
                                    alt="project"
                                    class="img-fluid w-100 h-100 rounded"
                                    style="object-fit: cover;" loading="lazy">
                            </div>
                            <div class="project-shape"></div>
                        </div>
                        <div class="project-content rounded">
                            <span class="project-label"><?php echo $item['title']; ?></span>
                            <h3 class="project-title h5">
                                <a href="<?php echo base_url($item['see_more_link']); ?>" class="text-reset">See More</a>
                            </h3>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>


<!-- <?php
        // Output the floating button
        $buttonLink = "tel:+1234567890";
        echo '<a href="' . $buttonLink . '" class="floating-button">';
        echo '<i class="fas fa-phone"></i>';
        echo '</a>';
        ?> -->

<!--==============================
            Footer Area
    ==============================-->

<?php $this->load->view('layout/footer') ?>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    function openTab(evt, tabName) {
        var i, tabcontent, tablinks;

        // Hide all tab contents
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }

        // Remove "active" class from all tablinks
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }

        // Show the current tab content and add "active" class to the clicked button
        document.getElementById(tabName).style.display = "block";
        evt.currentTarget.className += " active";
    }

    // Set default tab to be active
    document.getElementsByClassName("tablinks")[0].click();
</script>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.js"></script>
            <script>
                var swiper = new Swiper('.swiper-container', {
                    slidesPerView: 1,
                    spaceBetween: 10,
                    pagination: {
                        el: '.swiper-pagination',
                        clickable: true,
                        renderBullet: function(index, className) {
                            return '<span class="' + className + '">' + (index + 1) + '</span>';
                        },
                    },
                    autoplay: {
                        delay: 3000,
                        disableOnInteraction: false,
                    },
                    loop: true
                });
            </script>