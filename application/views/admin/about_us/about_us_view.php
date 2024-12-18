<?php $this->load->view('admin/layout/header'); ?>
<?php $this->load->view('admin/layout/sidebar'); ?>

<div class="content-body">
    <section data-bg-src="assets/img/bg/about-bg-5-1.png">
        <div class="container container-style1">
            <div class="row flex-row-reverse align-items-center gx-5">
                <div class="col-lg-6 ">
                    <label for="" class="mark">About us image</label>
                    <img src="<?= base_url('uploads/about/') . $about['about_us_image']; ?>" class="img-fluid"
                        alt="about image">
                </div>
                <div class="col-lg-6 ">
                    <div class="about-box2">
                        <h2 class="sec-title3 h1">About Us</h2>
                        <label for="" class="mark">About us Description</label>
                        <p><?= $about['about_us_description']; ?></p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <div class="col-lg-6 ">
        <label for="" class="mark">Why Choose us image</label>
        <img src="<?= base_url('uploads/about/') . $about['why_choose_us_image']; ?>" class="img-fluid"
            alt="about image">
    </div>

    <section class="space-top space-extra-bottom" data-bg-src="assets/img/bg/testi-bg-4-1.png">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-5 text-center text-lg-start ">
                    <h2 class="sec-title3 h1">From the Desk of Director</h2>
                </div>
                <div class="col-auto d-none d-lg-block ">
                    <div class="sec-btns2 my-3">
                        <label for="" class="mark">Desk of director - Video Link</label>
                        <a href="<?= $about['dod_video_link']; ?>" class="vs-btn popup-video">Watch Video<i
                                class="fas fa-play"></i></a>
                    </div>
                </div>
            </div>
            <div class="row testi-style2-slide">
                <div class="col-xl-6 ">
                    <div class="testi-style2">
                        <label for="" class="mark">Desk of director - Person 1</label>
                        <div class="testi-body">
                            <div class="author-img"><img src="<?= base_url('uploads/about/') . $about['dod_image']; ?>"
                                    class="img-fluid" alt="Testimonial"></div>
                            <div class="media-body">
                                <p class="testi-text">“<?= $about['dod_comment']; ?>”</p>
                            </div>
                        </div>
                        <h3 class="testi-name"><?= $about['dod_name']; ?></h3>
                        <div class="testi-degi"><?= $about['dod_designation']; ?></div>
                    </div>
                </div>
                <div class="col-xl-6 ">
                    <div class="testi-style2">
                        <label for="" class="mark">Desk of director - Person 2</label>
                        <div class="testi-body">
                            <div class="author-img"><img
                                    src="<?= base_url('uploads/about/') . $about['dod_image_1']; ?>" class="img-fluid"
                                    alt="Testimonial"></div>
                            <div class="media-body">
                                <p class="testi-text">“<?= $about['dod_comment_1']; ?>”</p>
                            </div>
                        </div>
                        <h3 class="testi-name"><?= $about['dod_name_1']; ?></h3>
                        <div class="testi-degi"><?= $about['dod_designation_1']; ?></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container space-top space-extra-bottom d-flex">
        <div class="row text-center">
            <div class="col-xl-4 col-md-6 mb-4 gx-5  rounded-end">
                <div class="testi-style1">
                    <label for="" class="mark">Vision Description</label>
                    <div class="testi-icon"><i class="fal">Vision</i></div>
                    <p class="testi-text">“<?= $about['vision']; ?>”</p>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 mb-4 gx-5  rounded-end">
                <div class="testi-style1">
                    <label for="" class="mark">Mission Description</label>
                    <div class="testi-icon"><i class="fal">Mission</i></div>
                    <p class="testi-text">“<?= $about['mission']; ?>”</p>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 mb-4 gx-5 ">
                <div class="testi-style1">
                    <label for="" class="mark">Values Description</label>
                    <div class="testi-icon"><i class="fal">Values</i></div>
                    <p class="testi-text">“<?= $about['value']; ?>”</p>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center">
        <a class="btn btn-warning my-2 mx-5" href="<?= site_url('admin/about_us/edit/' . $about['id']); ?>">Edit</a>
    </div>
    <!-- <a class="btn btn-warning my-2 mx-5" href="<?= site_url('admin/about_us/edit/' . $about['id']); ?>">Edit</a> -->
</div>
<?php $this->load->view('admin/layout/footer'); ?>