<div class="breadcumb-wrapper" data-bg-src="<?= base_url('uploads/banners/') . $banner['image']; ?>" loading="lazy">
    <div class="container z-index-common">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Gallery Category</h1>
            <div class="breadcumb-menu-wrap">
                <ul class="breadcumb-menu">
                    <li><a href="<?php echo base_url() ?>">Home</a></li>
                    <li>Gallery Category</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<section class="space-top space-extra-bottom background-image"
    style="background-image: url(&quot;assets/img/bg/sr-bg-1-1.png&quot;);" loading="lazy">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-8 col-xl-6 wow fadeInUp wow-animated" data-wow-delay="0.2s"
                style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                <div class="title-area">
                    <span class="sec-subtitle">Our gallery</span>
                    <h2 class="sec-title h1">Take a look at our company</h2>
                </div>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            <?php foreach ($gallery_items as $item): ?>
                <div class="col">
                    <div class="card h-100 border-0 rounded-3 overflow-hidden position-relative gallery-item"
                        style="transition: all 0.3s ease;">
                        <div class="card-img background-image ratio ratio-4x3"
                            style="background-image: url('<?php echo base_url('uploads/gallery/All_images/' . $item['background_image']); ?>');" loading="lazy">
                        </div>
                        <div class="card-img-overlay d-flex flex-column justify-content-end p-4 text-white"
                            style="background-color: rgba(0, 0, 0, 0.1); transition: background-color 0.3s ease;">
                            <h3 class="card-title h4 text-uppercase mb-3 d-flex align-items-center justify-content-center"
                                style="opacity: 0; transform: translateY(20px); transition: opacity 0.3s ease, transform 0.3s ease; height: 100%;">
                                <a href="<?php echo base_url($item['see_more_link']); ?>"
                                    class="text-white text-decoration-none">
                                    <?php echo $item['title']; ?>
                                </a>
                            </h3>
                            <a href="<?php echo base_url($item['see_more_link']); ?>"
                                class="btn btn-outline-light btn-sm align-self-start ms-1"
                                style="opacity: 0; transform: translateY(20px); transition: opacity 0.3s ease, transform 0.3s ease;">
                                See More <i class="fas fa-long-arrow-alt-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <script>
            document.querySelectorAll('.gallery-item').forEach(item => {
                item.addEventListener('mouseenter', () => {
                    item.querySelector('.card-img-overlay').style.backgroundColor = 'rgba(0, 0, 0, 0.7)';
                    item.querySelectorAll('.card-title, .btn').forEach(el => {
                        el.style.opacity = '1';
                        el.style.transform = 'translateY(0)';
                    });
                });
                item.addEventListener('mouseleave', () => {
                    item.querySelector('.card-img-overlay').style.backgroundColor = 'rgba(0, 0, 0, 0.1)';
                    item.querySelectorAll('.card-title, .btn').forEach(el => {
                        el.style.opacity = '0';
                        el.style.transform = 'translateY(20px)';
                    });
                });
            });
        </script>
    </div>
</section>


<!-- 
417 311 
387 × 374 px
387 × 374 px -->