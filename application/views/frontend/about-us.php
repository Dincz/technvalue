<?php $this->load->view('layout/header'); ?>
<!--==============================
    Breadcumb
============================== -->
<div class="breadcumb-wrapper " data-bg-src="<?= base_url('uploads/banners/banner-1.jpg'); ?>">
    <div class="container z-index-common">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">About Us</h1>
            <div class="breadcumb-menu-wrap">
                <ul class="breadcumb-menu">
                    <li><a href="index.html">Home</a></li>
                 <li>About Us</li>
                </ul>
            </div>
        </div>
    </div>
</div>


<!--==============================
    About Us
    ==============================-->
    <section class="py-5 mb-5 nopaddingformobile"></section>
        <div class="container" id="ourstory">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <?= $about[0]['about_us_description']; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
    <br>
<!--==============================
    From the Desk of Director
    ==============================-->
<section class=" space-top space-extra-bottom" data-bg-src="assets/img/bg/testi-bg-4-1.png">
    <div class="container  wow fadeInUp" data-wow-delay="0.2s">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-5 text-center text-lg-start">
                <div class="title-area">
                    <h2 class="sec-title4">From the Desk of Director</h2>
                </div>
            </div>
            <div class="col-auto d-none d-lg-block">
                <div class="sec-btns2">
                    <a href="<?= $about[0]['dod_video_link']; ?>" class="vs-btn popup-video">Watch Video<i
                            class="fas fa-play"></i></a>
                </div>
            </div>
        </div>
        <div class="row testi-style2-slide vs-carousel" data-slide-show="2" data-md-slide-show="2" data-xs-dots="true" data-sm-dots="true">
            <div class="col-xl-6">
                <div class="testi-style2">
                    <div class="testi-body">
                        <!-- <div class="author-img"><img src="<?= base_url('uploads/about/') . $about[0]['dod_image']; ?>"
                                alt="Testimonial">
                        </div> -->
                        <div class="media-body">
                            <p class="testi-text">“<?= $about[0]['dod_comment']; ?>”</p>
                        </div>
                    </div>
                    <h3 class="testi-name"><?= $about[0]['dod_name']; ?></h3>
                    <div class="testi-degi"><?= $about[0]['dod_designation']; ?></div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="testi-style2">
                    <div class="testi-body">
                        <!-- <div class="author-img"><img src="<?= base_url('uploads/about/') . $about[0]['dod_image_1']; ?>"
                                alt="Testimonial">
                        </div> -->
                        <div class="media-body">
                            <p class="testi-text">“<?= $about[0]['dod_comment_1']; ?>”</p>
                        </div>
                    </div>
                    <h3 class="testi-name"><?= $about[0]['dod_name_1']; ?></h3>
                    <div class="testi-degi"><?= $about[0]['dod_designation_1']; ?></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class=" space-top space-extra-bottom" data-bg-src="assets/img/bg/faq-3-1.png">
    <div class="container">
        <div class="row gx-80">
            <div class="col-lg-6 col-xxl-auto mb-50 mb-lg-0  wow fadeInUp" data-wow-delay="0.2s">
                <img src="<?= base_url('uploads/about/') . $about[0]['why_choose_us_image']; ?>" alt="faq img">
            </div>
            <div class="col-lg-6 col-xxl  wow fadeInUp" data-wow-delay="0.4s">
                <div class="title-area mb-4 pb-1">
                    <!-- <span class="sec-subtitle2"><i class="fal fa-arrow-right"></i>Why Choose Us</span> -->
                    <h2 class="sec-title4">Why Choose Us...</h2>
                </div>
                <div class="accordion accordion-style2" id="faqVersion3">
                    <?php foreach ($chooseUs as $index => $chooseUs): ?>
                        <?php if ($chooseUs['status'] == 1): // Check if the item is active ?>
                            <div class="accordion-item">
                                <div class="accordion-header" id="heading<?= $index; ?>">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse<?= $index; ?>" aria-expanded="false"
                                        aria-controls="collapse<?= $index; ?>">
                                        <?= htmlspecialchars($chooseUs['question']); ?>
                                    </button>
                                </div>
                                <div id="collapse<?= $index; ?>" class="accordion-collapse collapse"
                                    aria-labelledby="heading<?= $index; ?>" data-bs-parent="#faqVersion3">
                                    <div class="accordion-body">
                                        <pre><?= htmlspecialchars($chooseUs['answer']); ?></pre>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>


            </div>
        </div>
    </div>
</section>

<!-- Vision, Mission and Values -->

<div class="container space-top space-extra-bottom d-flex" id="mission-vision">
    <div class="row">
        <div class="col-xl-4">
            <div class="testi-style1">
                <div class="testi-icon"><i class="fal">Vision</i></div>
                <p class="testi-text"><?= $about[0]['vision']; ?></p>
                <!-- <h3 class="testi-name h6">David Smith</h3>
                    <div class="testi-degi">SEO Customer</div> -->
            </div>
        </div>
        <div class="col-xl-4">
            <div class="testi-style1">
                <div class="testi-icon"><i class="fal ">Mission</i></div>
                <p class="testi-text"><?= $about[0]['mission']; ?></p>
                <!-- <h3 class="testi-name h6">Floki Gustaf</h3>
                    <div class="testi-degi">UI Customer</div> -->
            </div>
        </div>
        <div class="col-xl-4">
            <div class="testi-style1">
                <div class="testi-icon"><i class="fal ">Values</i></div>
                <p class="testi-text"><?= $about[0]['value']; ?></p>
                <!-- <h3 class="testi-name h6">Jesper Karl</h3>
                    <div class="testi-degi">SEO Customer</div> -->
            </div>
        </div>
    </div>
</div>
<!--==============================
    expertise and achievements
    ==============================-->
<section class="space-extra-bottom">
    <div class="container   wow fadeInUp" data-wow-delay="0.2s">
        <div class="row justify-content-center text-center">
            <div class="col-xl-12">
                <div class="title-area">
                    <!-- <span class="sec-subtitle">Great Team Members</span> -->
                    <h2 class="sec-title4">Expertise</h2>
                </div>
            </div>
        </div>
        <div class="row vs-carousel" data-slide-show="3" data-md-slide-show="2" data-xs-dots="true" data-sm-dots="true">
        <?php $serial = 1; // Initialize serial number ?>
            <?php foreach ($expertise as $item): ?>
                <?php if ($item['status']): // Check if the status is active ?>
                    <div class="col-md-6 col-lg-4">
                        <div class="service-style1 layout3">
                            <div class="service-bg" data-bg-src="assets/img/bg/sr-box-bg-1.png"></div>
                            <div class="service-top">
                                <div class="service-icon">
                                    <img src="<?= base_url('uploads/icons/') . $item['icon']; ?>" alt="Features">
                                </div>
                                <span class="service-number"><?= $serial++; // Increment serial number ?></span>
                            </div>
                            <h3 class="service-title h5"><a><?= htmlspecialchars($item['title']); ?></a></h3>
                            <p class="service-text"><?= htmlspecialchars($item['description']); ?></p>
                            <!-- <a href="service-details.html" class="link-btn">Read More<i
                            class="far fa-long-arrow-right"></i></a> -->
                        </div>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>

    </div>
</section>

<!-- History -->
<div class="  ">
    <div class="space-top space-extra-bottom" data-bg-src="assets/img/bg/process-bg-1-1.png">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="title-area">
                        <!-- <span class="sec-subtitle">Great Team Members</span> -->
                        <h2 class="sec-title4 text-center">Our History</h2>
                    </div>
                </div>
                <div class="row vs-carousel team-zigzag" data-slide-show="4" data-ml-slide-show="3"
                    data-lg-slide-show="3" data-md-slide-show="2" data-xs-dots="true" data-sm-dots="true">
                    <?php foreach ($history as $history): ?>
                        <div class="col-sm-6 col-lg-3 process-style1">
                            <div class="process-arrow"><img src="assets/img/icon/process-arrow-1-1.png" alt="arrow">
                            </div>
                            <div class="process-icon">
                                <img src="<?= base_url('uploads/icons/') . $history['icon']; ?>" alt="icon">
                                <span class="process-number"><?= $history['id']; ?></span>
                            </div>
                            <h3 class="process-title h5"><?= $history['title']; ?></h3>
                            <p class="process-text"><?= $history['description']; ?></p>
                        </div>
                    <?php endforeach; ?>

                </div>

            </div>
        </div>
    </div>
</div>

<!--==============================
    CTA Area
    ==============================-->
    <section class="z-index-common space" data-bg-src="assets/img/bg/cta-bg-1-2.png">
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
<!--==============================
    Team Area
    ==============================-->
<section class=" space-top space-extra-bottom" data-bg-src="assets/img/bg/team-bg-5-1.png" id="moe">
    <div class="container  wow fadeInUp" data-wow-delay="0.2s">
        <div class="title-area text-center">
            <h2 class="sec-title4">Meet Our Experts</h2>
        </div>
    </div>
    <div class="container container-style3 wow fadeInUp" data-wow-delay="0.3s">
        <div class="row vs-carousel team-zigzag" data-slide-show="4" data-ml-slide-show="3" data-lg-slide-show="3"
            data-md-slide-show="2" data-xs-dots="true" data-sm-dots="true">
            <?php foreach ($meet_our_expert as $moe): ?>
                <div class="col-xl-3 team-style3">
                    <div class="team-img">
                        <a><img src="<?= base_url('uploads/team/') . $moe['image']; ?>" alt="image"></a>
                    </div>
                    <div class="team-content">
                        <h3 class="team-title"><a class="text-inherit"><?= htmlspecialchars($moe['name']); ?></a></h3>
                        <p class="team-degi"><?= htmlspecialchars($moe['designation']); ?></p>
                        <div class="team-social">
                            <!-- <a href="<?= htmlspecialchars($moe['facebook_link']); ?>"><i class="fab fa-facebook-f"></i></a> -->
                            <!-- <a href="<?= htmlspecialchars($moe['twitter_link']); ?>"><i class="fab fa-twitter"></i></a> -->
                            <a href="<?= htmlspecialchars($moe['linkdln_link']); ?>"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

</section>
<!-- Why Choose Us  -->




<!--==============================
    Blog Area
    ==============================-->
<!-- <section class="vs-blog-wrapper space-top space-extra-bottom">
        <div class="container  wow fadeInUp" data-wow-delay="0.2s">
            <div class="row justify-content-center text-center">
                <div class="col-xl-6">
                    <div class="title-area">
                        <span class="sec-subtitle">Weekly Updates</span>
                        <h2 class="sec-title3 h1">Weekly Latest Updates</h2>
                    </div>
                </div>
            </div>
            <div class="row vs-carousel" data-slide-show="3" data-md-slide-show="2">
                <div class="col-xl-4">
                    <div class="vs-blog blog-style1">
                        <div class="blog-img">
                            <img src="assets/img/blog/blog-1-1.png" alt="Blog Image" class="w-100">
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <a href="blog.html"><i class="far fa-calendar"></i>24 Feb, 2022</a>
                                    <a href="blog.html"><i class="fal fa-user"></i>by admin</a>
                                </div>
                                <h3 class="blog-title h5"><a href="blog-details.html">Contrary to popular belief ipsum
                                        is not simply </a></h3>
                                <a href="blog-details.html" class="link-btn">Read Details<i
                                        class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="vs-blog blog-style1">
                        <div class="blog-img">
                            <img src="assets/img/blog/blog-1-4.png" alt="Blog Image" class="w-100">
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <a href="blog.html"><i class="far fa-calendar"></i>30 Mar, 2022</a>
                                    <a href="blog.html"><i class="fal fa-user"></i>by admin</a>
                                </div>
                                <h3 class="blog-title h5"><a href="blog-details.html">Lorem ipsum placeholder text
                                        commonly used</a></h3>
                                <a href="blog-details.html" class="link-btn">Read Details<i
                                        class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="vs-blog blog-style1">
                        <div class="blog-img">
                            <img src="assets/img/blog/blog-1-2.png" alt="Blog Image" class="w-100">
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <a href="blog.html"><i class="far fa-calendar"></i>31 Jul, 2022</a>
                                    <a href="blog.html"><i class="fal fa-user"></i>by admin</a>
                                </div>
                                <h3 class="blog-title h5"><a href="blog-details.html">From its medieval to the digital
                                        learn everything</a></h3>
                                <a href="blog-details.html" class="link-btn">Read Details<i
                                        class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="vs-blog blog-style1">
                        <div class="blog-img">
                            <img src="assets/img/blog/blog-1-3.png" alt="Blog Image" class="w-100">
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <a href="blog.html"><i class="far fa-calendar"></i>26 Aug, 2022</a>
                                    <a href="blog.html"><i class="fal fa-user"></i>by admin</a>
                                </div>
                                <h3 class="blog-title h5"><a href="blog-details.html">Global Business Goal Make Life
                                        Easy From Tech</a></h3>
                                <a href="blog-details.html" class="link-btn">Read Details<i
                                        class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->


<?php $this->load->view('layout/footer'); ?>
