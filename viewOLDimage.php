<?php
$this->load->view('admin/layout/header');
$this->load->view('admin/layout/sidebar');

?>



<div class="container-fluid py-5">
    <div class="row mb-4">
        <div class="col-12">
            <h1 class="text-center">Gallery</h1>
            <hr class="my-4">
            <div class="text-center">
                <a href="<?php echo site_url('gallery/upload'); ?>" class="btn btn-primary">Upload New Image</a>
            </div>
        </div>
    </div>
    
    <?php if (isset($images) && !empty($images)): ?>
        <div class="row">
            <?php foreach ($images as $image): ?>
                <div class="col-6 col-md-4 col-lg-3 col-xl-3 mb-4 ">
                    <div class="card h-100 shadow-sm">
                        <img src="<?php echo base_url('assets/img/gallery/' . $image); ?>" alt="Gallery Image" class="img-fluid rounded">
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php else: ?>
        <div class="alert alert-info" role="alert">
            <p class="mb-0">No images to display.</p>
        </div>
    <?php endif; ?>
</div>

<!--**********************************Content body End***********************************-->
<!--**********************************footer Start***********************************-->
<?php $this->load->view('admin/layout/footer'); ?>
<!--**********************************footer End***********************************-->




















<!-- ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------HOMEPAE BLOG PAGE REMOVED CONTENT----------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
<!-- HOMEPAE BLOG PAGE REMOVED CONTENT  -->

<!-- blogs section started here  -->

<!-- <section class="vs-blog-wrapper space-top space-extra-bottom">
    <div class="container">
        <div class="title-area text-center wow fadeInUp" data-wow-delay="0.2s">
            <h2 class="sec-title4">Blog</h2>
        </div>
        <div class="row vs-carousel wow fadeInUp" data-wow-delay="0.4s" data-slide-show="3" data-md-slide-show="2">
        <div class="col-md-6 col-lg-4 vs-blog blog-style3">
                <div class="blog-body ">
                    <div class="blog-img rounded">
                        <a href="blog-details.html"><img src="assets/img/blog/blog-5-1.png" alt="Blog Image"
                                class="w-100"></a>
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <a href="blog.html"><i class="far fa-folder"></i>Develop</a>
                            <a href="blog.html"><i class="fal fa-user"></i>David Smith</a>
                        </div>
                        <h3 class="blog-title h5"><a href="blog-details.html">Getting Improve Your Startup Growing
                                Business Ides</a></h3>
                        <a href="blog-details.html" class="link-btn">Read More<i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</section> -->







<!-- 

ABOUT US PAGE REMOVED CONTENT

-->



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

















<!-- 


--! REMOVED FROM HEADER 


-->
    <!--==============================
    Sidemenu
============================== -->
<!-- <div class="sidemenu-wrapper d-none d-lg-block  ">
        <div class="sidemenu-content">
            <button class="closeButton sideMenuCls"><i class="far fa-times"></i></button>
            <div class="widget  ">
                <div class="vs-widget-about">
                    <div class="footer-logo">
                        <a href="<?php echo base_url() ?>"><img src="<?php echo base_url() ?>assets/img/logo.png"
                                alt="Crezvatic" class="logo"></a>
                    </div>
                    <p class="footer-text">Intrinsicly evisculate emerging cutting edge scenarios redefine future-proof
                        e-markets demand line</p>
                    <div class="footer-social">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-behance"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
            <div class="widget  ">
                <h4 class="widget_title">Gallery Posts</h4>
                <div class="sidebar-gallery">
                    <div class="gallery-thumb">
                        <img src="<?php echo base_url() ?>assets/img/widget/gal-1-1.png" alt="Gallery Image"
                            class="w-100">
                    </div>
                    <div class="gallery-thumb">
                        <img src="<?php echo base_url() ?>assets/img/widget/gal-1-2.png" alt="Gallery Image"
                            class="w-100">
                    </div>
                    <div class="gallery-thumb">
                        <img src="<?php echo base_url() ?>assets/img/widget/gal-1-3.png" alt="Gallery Image"
                            class="w-100">
                    </div>
                    <div class="gallery-thumb">
                        <img src="<?php echo base_url() ?>assets/img/widget/gal-1-4.png" alt="Gallery Image"
                            class="w-100">
                    </div>
                    <div class="gallery-thumb">
                        <img src="<?php echo base_url() ?>assets/img/widget/gal-1-5.png" alt="Gallery Image"
                            class="w-100">
                    </div>
                    <div class="gallery-thumb">
                        <img src="<?php echo base_url() ?>assets/img/widget/gal-1-6.png" alt="Gallery Image"
                            class="w-100">
                    </div>
                </div>
            </div>
            <div class="widget  ">
                <h3 class="widget_title">Office Maps</h3>
                <div class="footer-map">
                    <iframe title="office location map"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d163720.11965853968!2d8.496481908353967!3d50.121347879150306!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47bd096f477096c5%3A0x422435029b0c600!2sFrankfurt%2C%20Germany!5e0!3m2!1sen!2sbd!4v1651732317319!5m2!1sen!2sbd"
                        width="200" height="180" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div> -->