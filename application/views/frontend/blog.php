<?php $this->load->view('layout/header'); ?>

<h1 class="blog-top-title">Blogs</h1>

<section class="vs-blog-wrapper space-extra-bottom">
    <div class="container">
        <div class="row">
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

<?php $this->load->view('layout/footer'); ?>