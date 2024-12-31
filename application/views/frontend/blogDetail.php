<?php $this->load->view('layout/header'); ?>


<div class="breadcumb-wrapper" data-bg-src="<?= base_url('uploads/banners/') . $banner['image']; ?>">
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
                        <img src="<?= base_url('uploads/blog/') . $blog['blog_big_image']; ?>" alt="Blog Image">
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

                        <!-- <blockquote class="vs-quote">
                            <p>Holisticly build technologies expanded array relationships productize professional
                                tailers rather mesh stand</p>
                            <cite>William Benjamin</cite>
                            <span class="quote-author">Top Author</span>
                        </blockquote> -->

                        <!-- <div class="row mt-30 d-flex g-3">
                            <div class="col-md-4 justify-content-around mb-30">
                                <img src="assets/img/blog/blog-s-1-6.png" alt="Blog image">
                            </div>
                            <div class="col-md-4 mb-30">
                                <img src="assets/img/blog/blog-s-1-7.png" alt="Blog image">
                            </div>
                            <div class="col-md-4 justify-content-around mb-30">
                                <img src="assets/img/blog/blog-s-1-6.png" alt="Blog image">
                            </div>
                        </div> -->

                    </div>
                    <div class="share-links clearfix  ">
                        <div class="row justify-content-between">
                            <!-- <div class="col-auto">
                                <span class="share-links-title">Tags</span>
                                <div class="tagcloud">
                                    <a href="<?php echo base_url('blog') ?>">Lawyer</a>
                                    <a href="<?php echo base_url('blog') ?>">Experts</a>
                                </div>
                            </div> -->
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
                    <!-- <div class="post-pagination  ">
                        <div class="row justify-content-between align-items-center">
                            <div class="col">
                                <div class="post-pagi-box prev">
                                    <a href="<?php echo base_url('blog-detail') ?>"><img src="assets/img/blog/page-1-1.png" alt="pagi"></a>
                                    <a href="<?php echo base_url('blog-detail') ?>">Previous Post</a>
                                </div>
                            </div>
                            <div class="col-auto d-none d-sm-block">
                                <a href="<?php echo base_url('blog') ?>" class="pagi-icon"><i class="fas fa-th"></i></a>
                            </div>
                            <div class="col">
                                <div class="post-pagi-box next">
                                    <a href="<?php echo base_url('blog-detail') ?>"><img src="assets/img/blog/page-1-2.png" alt="pagi"></a>
                                    <a href="<?php echo base_url('blog-detail') ?>">Next Post</a>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="blog-author  ">
                        <div class="media-img">
                            <img src="assets/img/blog/blog-author.png" alt="Blog Author Image">
                        </div>
                        <div class="media-body">
                            <h3 class="author-name h4">William Benjamin</h3>
                            <p class="author-degi">Author</p>
                            <p class="author-text">Re-engineer multimedia based internal or "organic" sources for
                                progressive vortals. Assertively leverage existing economically sound total linkage
                                whereas global best practices. </p>
                        </div>
                    </div> -->
                    <!-- <div class="vs-comments-wrap   ">
                        <h2 class="blog-inner-title">3 Comments</h2>
                        <ul class="comment-list">
                            <li class="vs-comment-item">
                                <div class="vs-post-comment">
                                    <div class="comment-avater">
                                        <img src="assets/img/blog/comment-author-1.png" alt="Comment Author">
                                    </div>
                                    <div class="comment-content">
                                        <span class="commented-on">22 April, 2022</span>
                                        <h4 class="name h4">Rosalina Kelian</h4>
                                        <p class="text">Collaboratively empower multifunctional e-commerce for
                                            prospective applications. Seamlessly productivate plug-and-play markets
                                            whereas synergistic scenarios.</p>
                                        <div class="reply_and_edit">
                                            <a href="blog-details.html" class="replay-btn"><i
                                                    class="fas fa-reply"></i>Replay</a>
                                        </div>
                                    </div>
                                </div>
                                <ul class="children">
                                    <li class="vs-comment-item">
                                        <div class="vs-post-comment">
                                            <div class="comment-avater">
                                                <img src="assets/img/blog/comment-author-2.png" alt="Comment Author">
                                            </div>
                                            <div class="comment-content">
                                                <span class="commented-on">23 April, 2022</span>
                                                <h4 class="name h4">John Deo</h4>
                                                <p class="text">Competently provide access to fully researched
                                                    methods of empowerment without sticky models. Credibly morph
                                                    front-end niche markets.</p>
                                                <div class="reply_and_edit">
                                                    <a href="blog-details.html" class="replay-btn"><i
                                                            class="fas fa-reply"></i>Replay</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="vs-comment-item">
                                <div class="vs-post-comment">
                                    <div class="comment-avater">
                                        <img src="assets/img/blog/comment-author-3.png" alt="Comment Author">
                                    </div>
                                    <div class="comment-content">
                                        <span class="commented-on">26 April, 2022</span>
                                        <h4 class="name h4">Tara sing</h4>
                                        <p class="text">Competently provide access to fully researched methods of
                                            empowerment without sticky models. Credibly morph front-end niche
                                            markets whereas 2.0 users. Enthusiastically seize team.</p>
                                        <div class="reply_and_edit">
                                            <a href="blog-details.html" class="replay-btn"><i
                                                    class="fas fa-reply"></i>Replay</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>  -->
                    <!-- Comment Form -->
                    <!-- <div class="vs-comment-form  ">
                        <div id="respond" class="comment-respond">
                            <div class="form-title">
                                <h3 class="blog-inner-title">Leave a Comment</h3>
                                <p class="form-text">Your email address will not be published. Required fields are
                                    marked*</p>
                            </div>
                            <div class="form-inner">
                                <div class="row gx-20">
                                    <div class="col-md-6 form-group">
                                        <input type="text" class="form-control" placeholder="Your Name">
                                        <i class="fal fa-user"></i>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <input type="email" class="form-control" placeholder="Your Email">
                                        <i class="fal fa-envelope"></i>
                                    </div>
                                    <div class="col-12 form-group">
                                        <textarea class="form-control" placeholder="Comment"></textarea>
                                        <i class="fal fa-pencil"></i>
                                    </div>
                                    <div class="col-12 ">
                                        <div class="custom-checkbox notice">
                                            <input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent"
                                                type="checkbox" value="yes">
                                            <label for="wp-comment-cookies-consent"> Save my name, email, and
                                                website in this browser for the next time I comment.</label>
                                        </div>
                                    </div>
                                    <div class="col-12 form-group mb-0">
                                        <button class="vs-btn">Post Comment<i class="far fa-arrow-right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
            <!-- <div class="col-lg-4">
                <aside class="sidebar-area">
                    <div class="widget widget_search   ">
                        <form class="search-form">
                            <input type="text" placeholder="Search Here">
                            <button type="submit"><i class="far fa-search"></i></button>
                        </form>
                    </div>
                    <div class="widget widget_categories   ">
                        <h3 class="widget_title">Categories</h3>
                        <ul>
                            <li>
                                <a href="blog.html">IT Solution</a>
                            </li>
                            <li>
                                <a href="blog.html">SEO Marketing</a>
                            </li>
                            <li>
                                <a href="blog.html">Website Development</a>
                            </li>
                            <li>
                                <a href="blog.html">Cloud Solution</a>
                            </li>
                            <li>
                                <a href="blog.html">Network Marketing</a>
                            </li>
                        </ul>
                    </div>
                    <div class="widget  ">
                        <h3 class="widget_title">Recent Posts</h3>
                        <div class="recent-post-wrap">
                            <div class="recent-post">
                                <div class="media-img">
                                    <a href="blog-details.html"><img src="assets/img/blog/recent-post-1-1.png"
                                            alt="Blog Image"></a>
                                </div>
                                <div class="media-body">
                                    <h4 class="post-title"><a class="text-inherit" href="blog-details.html">Richard
                                            McClintock, a Latin scholar from Hampden</a></h4>
                                    <div class="recent-post-meta">
                                        <a href="blog.html">09 Aug, 2022</a>
                                    </div>
                                </div>
                            </div>
                            <div class="recent-post">
                                <div class="media-img">
                                    <a href="blog-details.html"><img src="assets/img/blog/recent-post-1-2.png"
                                            alt="Blog Image"></a>
                                </div>
                                <div class="media-body">
                                    <h4 class="post-title"><a class="text-inherit" href="blog-details.html">Rapidio
                                            monetize wherea competitive good time</a></h4>
                                    <div class="recent-post-meta">
                                        <a href="blog.html">05 Mar, 2022</a>
                                    </div>
                                </div>
                            </div>
                            <div class="recent-post">
                                <div class="media-img">
                                    <a href="blog-details.html"><img src="assets/img/blog/recent-post-1-3.png"
                                            alt="Blog Image"></a>
                                </div>
                                <div class="media-body">
                                    <h4 class="post-title"><a class="text-inherit" href="blog-details.html">The
                                            placeholder text, beginning with the ipsum</a></h4>
                                    <div class="recent-post-meta">
                                        <a href="blog.html">20 Jan, 2022</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="widget widget_tag_cloud   ">
                        <h3 class="widget_title">Popular Tags</h3>
                        <div class="tagcloud">
                            <a href="blog.html">Advice</a>
                            <a href="blog.html">Author</a>
                            <a href="blog.html">Consulting</a>
                            <a href="blog.html">Crezvatic</a>
                            <a href="blog.html">Family</a>
                            <a href="blog.html">Health</a>
                            <a href="blog.html">Judge</a>
                            <a href="blog.html">Solution</a>
                        </div>
                    </div>
                </aside>
            </div> -->
        </div>
    </div>
</section>

<?php $this->load->view('layout/footer'); ?>