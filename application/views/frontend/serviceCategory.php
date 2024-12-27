<!-- header start  -->
<?php $this->load->view('layout/header'); ?>
<!-- header end  -->

<div class="breadcumb-wrapper" data-bg-src="<?= base_url('uploads/banners/') . $banner['image']; ?>">

<div class="container z-index-common">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Services</h1>
            <div class="breadcumb-menu-wrap">
                <ul class="breadcumb-menu">
                    <li><a href="<?php echo site_url(); ?>">Home</a></li>
                    <li>Services</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!--==============================
    Service Area
    ==============================-->
<section class=" space-top space-extra-bottom">
    <div class="container   wow fadeInUp" data-wow-delay="0.2s">
        <div class="row">
            <?php
            // print_r($services);
            // exit();
            // echo($services[4]['hero_banner']);
            ?>
            <?php foreach ($services as $service): ?>
                <?php if ($service['status'] == 1): // Check if the FAQ is active ?>

                    <div class="col-md-6 col-lg-4">
                        <div class="service-style1 layout2">
                            <div class="service-bg" data-bg-src="assets/img/bg/sr-box-bg-1.png"></div>
                            <div class="service-icon"><img  src="<?= base_url('uploads/icons/') . $service['service_icon'];  ?>"
                                    alt="service-icon" style="max-width: 73%;"></div>
                            <h3 class="service-title h5"><a
                                    href="<?= base_url('service-details/' . $service['s_id']); ?>"><?= $service['service_title']; ?></a>
                            </h3>
                            <p class="service-text"><?= $service['service_short_description']; ?></p>
                            <a href="<?= base_url('service-details/' . $service['s_id']); ?>" class="vs-btn style3">Read More<i
                                    class="far fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>
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
    Work Process
    ==============================-->
<section class="process-wrap1 space-top space-extra-bottom" data-bg-src="assets/img/bg/process-bg-3-1.png">
    <div class="container   wow fadeInUp" data-wow-delay="0.2s">
        <div class="row justify-content-center text-center">


            <div class="col-xl-6">
                <div class="title-area">
                    <span class="sec-subtitle">What We Do For You</span>
                    <h2 class="sec-title4">Our Specialization</h2>
                </div>
            </div>
        </div>

        <div class="row justify-content-between">
            <?php foreach ($specialization as $special): ?>

                <div class="col-md-4 col-xl-auto process-style2">
                    <div class="process-arrow"><img src="assets/img/icon/process-arrow-2-1.png" alt="arrow"></div>
                    <?php
                    // print_r($data);
                    // // exit();
                    ?>
                    <div class="process-icon">
                        <img src="<?= base_url('uploads/icons/') . $special['specialization_icon']; ?>" alt="icon">
                        <span class="process-number"><?= $special['specialization_id']; ?></span>
                    </div>
                    <h3 class="process-title h5"><?= $special['specialization_title']; ?></h3>
                    <p class="process-text"><?= $special['specialization_description']; ?></p>

                </div>
            <?php endforeach; ?>

        </div>

    </div>
</section>
<!--==============================
    Testimonial Area
    ==============================-->
<section class=" space-top space-extra-bottom">
    <div class="container   wow fadeInUp" data-wow-delay="0.2s">
        <div class="row justify-content-between">
            <div class="col-lg-auto text-center text-lg-start">
                <div class="title-area">
                    <span class="sec-subtitle"><i class="fas fa-bring-forward"></i>Our Best Review’s</span>
                    <h2 class="sec-title4">Customer’s Feedback</h2>
                </div>
            </div>
            <div class="col-auto d-none d-lg-block">
                <div class="sec-btns">
                    <button class="vs-btn style4" data-slick-prev="#testislide1"><i
                            class="far fa-arrow-left"></i>Prev</button>
                    <button class="vs-btn style4" data-slick-next="#testislide1">Next<i
                            class="far fa-arrow-right"></i></button>
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


<!-- header start  -->
<?php $this->load->view('layout/footer'); ?>
<!-- header end  -->