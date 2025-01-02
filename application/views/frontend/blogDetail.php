<?php $this->load->view('layout/header'); ?>


<div class="breadcumb-wrapper" data-bg-src="<?= base_url('uploads/banners/') . $banner['image']; ?>" loading="lazy">
    <div class="container z-index-common">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Blog Detail</h1>
            <div class="breadcumb-menu-wrap">
                <ul class="breadcumb-menu">
                    <li><a href="<?php echo base_url() ?>">Home</a></li>
                    <li>Blog</li>
                    <li class="currentLocation"><?php $blog['title']?></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<section class="vs-blog-wrapper blog-details space-top space-extra-bottom">
    <div class="container">
        <div class="row gx-0">
            <div class="col-lg-12">
                <div class="vs-blog blog-single">
                    <div class="blog-img">
                        <img src="<?= base_url('uploads/blog/') . $blog['blog_big_image']; ?>" alt="Blog Image" loading="lazy">
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <a href="<?php echo base_url('blog') ?>"><i
                                    class="far fa-calendar"></i><?= $blog['date']; ?></a>
                            <a href="<?php echo base_url('blog') ?>"><i
                                    class="fal fa-user"></i><?= $blog['posted_by']; ?></a>
                        </div>
                        <h2 class="blog-title"><?= $blog['title']; ?></h2>
                        <p><?= $blog['description']; ?></p>

                      

                    </div>
                    <div class="share-links clearfix  ">
                        <div class="row justify-content-between">

                            <div class="col-auto text-end">
                                <span class="share-links-title">Social Links</span>
                                <ul class="social-links">
                                    <li><a href="<?= $blog['facebook_link']; ?>" target="_blank"><i
                                                class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="<?= $blog['twitter_link']; ?>" target="_blank"><i
                                                class="fab fa-twitter"></i></a></li>
                                    <li><a href="<?= $blog['instagram_link']; ?>" target="_blank"><i
                                                class="fab fa-instagram"></i></a></li>
                                    <li><a href="<?= $blog['linkdln_link']; ?>" target="_blank"><i
                                                class="fab fa-linkedin"></i></a></li>
                                </ul><!-- End Social Share -->
                            </div><!-- Share Links Area end -->
                        </div>
                    </div> <!-- Post Pagination Style -->
                   
                </div>
            </div>
           
        </div>
    </div>
</section>

<?php $this->load->view('layout/footer'); ?>