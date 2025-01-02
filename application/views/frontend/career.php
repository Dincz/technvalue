<div class="breadcumb-wrapper" data-bg-src="<?= base_url('uploads/banners/banner-1.jpg') ?>" loading="lazy">

    <div class="container z-index-common">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Career</h1>
            <div class="breadcumb-menu-wrap">
                <ul class="breadcumb-menu">
                    <li><a href="<?php echo base_url() ?>">Home</a></li>
                    <li class="currentLocation">Career</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-12">
    <h1 class="text-center mt-4">Job Openings</h1>
    <div class="row filter-active2 wow fadeInUp wow-animated m-4" data-wow-delay="0.4s"
        style="visibility: visible; position: relative;">
        <?php foreach ($all_jobs as $index => $job): ?>
            <div class="col-md-3 col-lg-3 filter-item Business Finance" style="position: absolute;  top: 0px;">
                <div class="project-style3">
                    <div class="project-img">
                        <img src="uploads/career/<?php echo $job->image_url; ?>" alt="image" loading="lazy">
                    </div>
                    <div class="project-bottom">
                        <div class="media-body">
                            <h3 class="project-title"><a href="<?php echo base_url('job-detail/' . $job->page_name); ?>"
                                    style="font-size:17px; color:white"><?php echo htmlspecialchars($job->title); ?></a>
                            </h3>
                            <p style="color:white;">(<?php echo $job->location; ?>)</p>
                        </div>
                        <a href="<?php echo base_url('job-detail/' . $job->page_name); ?>" class="icon-btn style4"><i
                                class="fas fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>



<div class="container mt-5">
    <blockquote class="company-intro">
        <?php
        $plain_text = $content[0]->mkeditor;
        print_r($plain_text);
        ?>
    </blockquote>
</div>


<!-- Team Section  -->

<section class="team-qualities">
    <h1 class="text-center mx-4 my-4">Work Culture</h1>
    <!-- <div class="about-section">
        <p>
            TechnoValue’s culture is based on Creativity and Innovation. We endeavor to practice “something new,
            something better, something different” every day. Change is constant. Together, we turn everyday
            change into progress. A strategic vision does define a company’s success – its people who do. Our
            people are the growth engine of this organization and have helped define what TechnoValue is today.
        </p>
        <p>
            At TechnoValue, we provide our people a creative, collaborative environment that encourages
            initiative, drive, and a sense of professional fulfillment. We want our people to “be yourself at work”
            and recognize that diversity of thought is critical to success. We believe in cross-learning opportunities
            and make a real contribution to developing the business.
        </p>
    </div> -->

    <div class="about-section">
        <?php if ($work_culture_desc): ?>

                <p>
                    <?= htmlspecialchars($work_culture_desc->desc_1); ?>
                </p>
                <p>
                    <?= htmlspecialchars($work_culture_desc->desc_2); ?>
                </p>

        <?php endif; ?>
    </div>



    <div class="mb-5" id="weoffer">
        <div class="space-top space-extra-bottom background-image"
            style="background-image: url('assets/img/bg/process-bg-1-1.png');" loading="lazy">
            <div class="container">
                <?php if ($use_carousel): ?>
                    <div class="owl-carousel team-qualities-carousel">
                    <?php else: ?>
                        <div class="row">
                        <?php endif; ?>

                        <?php foreach ($qualities as $index => $quality): ?>
                            <div class="<?php echo $use_carousel ? '' : 'col-sm-6 col-lg-3'; ?> process-style1"
                                style="position: relative;">
                                <div class="process-icon"
                                    style="position: relative; z-index: 2;<?php if ($use_carousel): ?> padding: 30px;<?php endif; ?>">
                                    <div style="width: 54%;" class="d-inline">
                                        <img src="uploads/career/<?php echo $quality->icon; ?>" alt="icon">
                                    </div>
                                    <span
                                        class="process-number"><?php echo str_pad($index + 1, 2, '0', STR_PAD_LEFT); ?></span>
                                </div>
                                <h3 class="process-title h5"><?php echo $quality->title; ?></h3>
                                <p class="process-text"><?php echo $quality->description; ?></p>
                                <?php if ($index < count($qualities) - 1): ?>
                                    <div class="process-arrow"
                                        style="position: absolute; top: 43%; right: -75px; transform: translateY(-100%) <?php echo ($index % 2 == 1) ? 'rotateX(190deg)' : ''; ?>; z-index: 1;">
                                        <img src="assets/img/icon/process-arrow-1-1.png" alt="arrow">
                                    </div>
                                <?php endif; ?>
                            </div>
                        <?php endforeach; ?>

                        <?php if ($use_carousel): ?>
                        </div>
                    <?php else: ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<?php if ($use_carousel): ?>
    <script>
        $(document).ready(function () {
            $(".team-qualities-carousel").owlCarousel({
                loop: true,
                margin: 30,
                nav: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 4
                    }
                }
            });
        });
    </script>
<?php endif; ?>