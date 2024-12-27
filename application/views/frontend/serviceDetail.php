<!-- header start  -->
<?php $this->load->view('layout/header'); ?>
<!-- header end  -->

<!--==============================
    Breadcumb
============================== -->
<div class="breadcumb-wrapper" data-bg-src="<?= base_url('uploads/banners/') . $banner['image']; ?>">

    <div class="container z-index-common">
        <div class="breadcumb-content">
        <h1 class="breadcumb-title">Service Details</h1>
            <div class="breadcumb-menu-wrap ">
                <ul class="breadcumb-menu lessing-margin">
                    <li><a href="<?= base_url()?>">Home</a></li>
                    <li><a href="<?= base_url(). 'service-category'?>">Services</a></li>
                    <li class="currentLocation"><?php echo htmlspecialchars($services['service_title']); ?></li>
                </ul>
            </div>
        </div>
    </div>
</div>



<!--==============================
    Service Area
==============================-->
<section class="space-top space-extra-bottom">
    <div class="container">
        <div class="row flex-row-reverse">
            <div class="col-lg-8">

                <?php if (!empty($services['service_image'])): ?>
                    <div class="mb-3 pb-3">
                        <img src="<?= base_url('uploads/services/' . $services['service_image']) ?>" 
                             alt="<?= htmlspecialchars($services['service_title']) ?>" 
                             class="img-fluid">
                    </div>
                <?php endif; ?>

                <h2 class="h4"><?= htmlspecialchars($services['service_title']) ?></h2>
                <div class="service-description">
                <?php echo ($services['service_full_description']) ?>
                </div>

                <!-- Service Features -->
                <?php if (!empty($features)): ?>
                    <div class="row gx-0 mb-4 pb-2 pt-3 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="col-xl-12">
                            <div class="service-list-box">
                                <h3 class="h5 title">Service Features</h3>
                                <div class="list-style3">
                                    <ul>
                                        <?php foreach ($features as $feature): ?>
                                            <?php if ($feature['status'] == 1): ?>
                                                <div>
                                                    <i class="fal fa-check-circle"></i>
                                                    <?= htmlspecialchars($feature['features']) ?>
                                                </div>
                                            <?php endif; ?>
                                        </ul>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

                <!-- FAQ Section -->
                <?php if (!empty($faq)): ?>
                    <div class="accordion accordion-style1 layout2 wow fadeInUp" data-wow-delay="0.2s" id="faqVersion1">
                        <?php foreach ($faq as $index => $faq_item): ?>
                            <?php if ($faq_item['status'] == 1): ?>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading<?= $index ?>">
                                        <button class="accordion-button <?= $index !== 0 ? 'collapsed' : '' ?>" 
                                                type="button" 
                                                data-bs-toggle="collapse" 
                                                data-bs-target="#collapse<?= $index ?>" 
                                                aria-expanded="<?= $index === 0 ? 'true' : 'false' ?>" 
                                                aria-controls="collapse<?= $index ?>">
                                            <?= htmlspecialchars($faq_item['faq_question']) ?>
                                        </button>
                                    </h2>
                                    <div id="collapse<?= $index ?>" 
                                         class="accordion-collapse collapse <?= $index === 0 ? 'show' : '' ?>" 
                                         aria-labelledby="heading<?= $index ?>" 
                                         data-bs-parent="#faqVersion1">
                                        <div class="accordion-body">
                                            <p><?= nl2br(htmlspecialchars($faq_item['faq_answer'])) ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>


            <!-- Sidebar -->
            <div class="col-lg-4">
                <aside class="service-sidebar">
                    <!-- Working Hours Widget -->
                    <div class="widget">
                        <h3 class="widget_title">Working Hours</h3>
                        <div class="widget-workhours">
                            <ul>
                                <?php if (!empty($services['working_hours_mon_fri'])): ?>
                                    <li class="text-theme"><i class="fal fa-clock"></i><?= htmlspecialchars($services['working_hours_mon_fri']) ?></li>
                                <?php endif; ?>
                                <?php if (!empty($services['working_hours_sat'])): ?>
                                    <li class="text-theme"><i class="fal fa-clock"></i><?= htmlspecialchars($services['working_hours_sat']) ?></li>
                                <?php endif; ?>
                                <?php if (!empty($services['working_hours_sun'])): ?>
                                    <li class="text-theme"><i class="fal fa-clock"></i><?= htmlspecialchars($services['working_hours_sun']) ?></li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>

                    <!-- Query Box -->
                    <div class="quote-box" data-bg-src="<?= base_url('assets/img/widget/quote-box.png') ?>">
                        <h3 class="quote-box__title">Have Any Query?</h3>
                        <a href="<?= base_url('contact') ?>" class="vs-btn">Get A Quote<i class="far fa-arrow-right"></i></a>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>

<!-- footer start  -->
<?php $this->load->view('layout/footer'); ?>
<!-- footer end  -->