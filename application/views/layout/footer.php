<footer class="footer-wrapper footer-layout1 background-image"
    style="background-image: url(<?php echo base_url() ?>&quot;assets/img/shape/bg-footer-1-1.png&quot;);">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-sm footer-info_group">
                    <div class="footer-info">
                        <div class="footer-info_icon"><i class="fal fa-map-marker-alt"></i></div>
                        <div class="media-body">
                            <span class="footer-info_label">Office Address</span>
                            <div class="footer-info_link">Plot No. 131, Sector 4A, Sector 1A, Kopar Khairane, Navi Mumbai, Maharashtra 400709
</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm footer-info_group">
                    <div class="footer-info">
                        <div class="footer-info_icon"><i class="fal fa-clock"></i></div>
                        <div class="media-body">
                            <span class="footer-info_label">Working Hours</span>
                            <div class="footer-info_link">Weekdays 9:30 to 6:00 PM  2nd and 4th Saturday is off ( Sunday off ) </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm footer-info_group">
                    <div class="footer-info">
                        <div class="footer-info_icon"><i class="fal fa-phone-volume"></i></div>
                        <div class="media-body">
                            <span class="footer-info_label">Contact Us</span>
                            <div class="footer-info_link"><a
                                    href="mailto:info@technovalue.in">info@technovalue.in</a>
                                    <a href="mailto:sales@technovalue.in">sales@technovalue.in</a><br>
                                    <a href="tel:+91 88793 30481 ">+91 88793 30481 </a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="widget-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-6 col-lg-4 col-xl-auto">
                    <div class="widget footer-widget">
                        <h3 class="widget_title">About Us</h3>
                        <div class="vs-widget-about">
                            <p class="footer-text">Intrinsicly evisculate emerging cutting edge scenarios redefine
                                future-proof e-markets demand line</p>
                            <div class="footer-social">
                                <a href="https://www.facebook.com/technovaluesolutions2019"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://twitter.com/technovalue123"><i class="fab fa-twitter"></i></a>
                                <a href="https://www.instagram.com/technovaluesolutions/"><i class="fab fa-instagram"></i></a>
                                <a href="https://www.linkedin.com/company/103670109/admin/dashboard/"><i class="fab fa-linkedin"></i></a>
                                <!--<a href="#"><i class="fab fa-youtube"></i></a>-->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-2 col-xl-auto">
                    <div class="widget widget_nav_menu  footer-widget">
                        <h3 class="widget_title">Links</h3>
                        <div class="menu-all-pages-container">
                            <ul class="menu">
                                <li><a href="about-us">About Us</a></li>
                                <li><a href="about-us">Our Mission</a></li>
                                <li><a href="about-us">Meet The Teams</a></li>
                                <li><a href="about-us">Our Projects</a></li>
                                <li><a href="contact">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-2 col-xl-auto">
                    <div class="widget widget_nav_menu  footer-widget">
                        <h3 class="widget_title">Explore</h3>
                        <div class="menu-all-pages-container">
                            <ul class="menu">
                                <li><a href="#">What we Offer</a></li>
                                <li><a href="#">Our Story</a></li>
                                <li><a href="#">Latest Posts</a></li>
                                <li><a href="#">Help Center</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-auto">
                    <div class="widget footer-widget">
                        <h3 class="widget_title">Office Maps</h3>
                        <div class="footer-map">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3770.013680791891!2d73.00552365898322!3d19.107055750925735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c0c850b3ffff%3A0xf3e7652372200957!2sTechnoValue%20Solutions%20Private%20Limited!5e0!3m2!1sen!2sin!4v1734942791210!5m2!1sen!2sin"
                                width="200" height="180" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-wrap">
        <div class="container">
            <p class="copyright-text">Copyright <i class="fal fa-copyright"></i> 2024 <a class="text-white"
                    href="index.html">Crezvatic</a>. All rights reserved by <a class="text-white"
                    href="#">Crezvatic</a>.</p>
        </div>
    </div>
</footer>

<!-- Get a quote float button -->
<a href="#" id="quoteBtn" class="btn btn-primary floating-button">Get a Quote</a>

<!-- Bootstrap Modal -->
<div class="modal fade" id="quoteModal" tabindex="-1" aria-labelledby="quoteModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="quoteModalLabel">Get a Quote</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="contact-box__form ajax-contact" id="quoteForm" action="mail.php" method="POST">
                    <div class="row g-3 mx-3">
                        <div class="col-md-6 form-group">
                            <input type="text" name="name" id="name" class="form-control"
                                placeholder="Enter Your Full Name" required>
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="text" name="company_name" id="company_name" class="form-control"
                                placeholder="Enter Your Company Name" required>
                            <i class="fas fa-building"></i>
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="number" name="zipcode" id="zipcode" class="form-control"
                                placeholder="Enter Your Zipcode">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="text" name="country" id="country" class="form-control"
                                placeholder="Enter Your Country">
                            <i class="fas fa-globe"></i>
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="text" name="city" id="city" class="form-control" placeholder="Enter Your City"
                                required>
                            <i class="fas fa-city"></i>
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="text" name="state" id="state" class="form-control"
                                placeholder="Enter Your State" required>
                            <i class="fas fa-map"></i>
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="email" name="email" id="email" class="form-control" placeholder="Email Address"
                                required>
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="tel" name="contactno" id="contactno" class="form-control"
                                placeholder="Enter Your Contact No." required>
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="col-12 form-group">
                            <input type="text" name="address" id="address" class="form-control"
                                placeholder="Enter Your Address">
                            <i class="fas fa-home"></i>
                        </div>
                        <div class="col-12 form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="terms_condition" required>
                                <label class="form-check-label" for="terms_condition">
                                    We would like to receive regular updates of products, news and events of TechnoValue
                                    Solutions. By submitting this form, you accept the terms and conditions of this
                                    website.
                                </label>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" form="quoteForm" class="btn btn-primary">Get Quote <i
                        class="fas fa-arrow-right"></i></button>
            </div>
        </div>
    </div>
</div>
<!-- Scroll To Top -->
<a href="#" class="scrollToTop scroll-btn"><i class="far fa-arrow-up"></i></a>



<!--********************************
            Code End  Here 
    ******************************** -->


<!--==============================
        All Js File
    ============================== -->
<!-- Jquery -->
<script src="<?php echo base_url() ?>assets/js/vendor/jquery-3.6.0.min.js"></script>
<!-- Slick Slider -->
<!-- <script src="assets/js/app.min.js"></script> -->
<script src="<?php echo base_url() ?>assets/js/slick.min.js"></script>
<!-- Bootstrap -->
<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
<!-- WOW.js Animation -->
<script src="<?php echo base_url() ?>assets/js/wow.min.js"></script>
<!-- Magnific Popup -->
<script src="<?php echo base_url() ?>assets/js/jquery.magnific-popup.min.js"></script>
<!-- Isotope Filter -->
<script src="<?php echo base_url() ?>assets/js/imagesloaded.pkgd.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/isotope.pkgd.min.js"></script>
<!-- Main Js File -->
<script src="<?php echo base_url() ?>assets/js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@latest/swiper-bundle.min.js"></script>

<!-- owl-carousel -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script>
    function toggleProducts(element) {
        // Get the next sibling element (the products list)
        var productsList = element.nextElementSibling;

        // Toggle display of the products list
        if (productsList.style.display === "block") {
            productsList.style.display = "none";
        } else {
            productsList.style.display = "block";
        }
    }

</script>
<script>
    $(document).ready(function () {
        $('#brandslide1').owlCarousel({
            items: 5, // Number of items visible
            loop: true, // Infinite loop
            margin: 10, // Space between items
            autoplay: true, // Enable auto-slide
            autoplayTimeout: 2000, // Time interval between slides (in milliseconds)
            autoplayHoverPause: false, // Continue autoplay even when hovered (set to true if you want to pause on hover)
            responsive: {
                0: {
                    items: 2 // Number of items on small screens
                },
                600: {
                    items: 4 // Number of items on medium screens
                },
                1000: {
                    items: 5 // Number of items on large screens
                }
            }
        });
    });

</script>
<script>
    $(document).ready(function () {
        $('#productsubcategory').owlCarousel({
            items: 3, // Adjust the number of visible items
            loop: true, // Infinite loop
            margin: 25, // Space between items
            dots: true, // Show dots at the bottom
            nav: false, // Show navigation arrows
            navText: ["<i class='far fa-arrow-left'></i>", "<i class='far fa-arrow-right'></i>"], // Custom arrow icons
            autoplay: false, // Disable autoplay
            responsive: {
                0: {
                    items: 1 // 1 item on small screens
                },
                600: {
                    items: 2 // 2 items on medium screens
                },
                1000: {
                    items: 3 // 3 items on large screens
                }
            }
        });
    });
</script>
<script>
    $(document).ready(function () {
        $('#productsubcategory1').owlCarousel({
            items: 3, // Adjust the number of visible items
            loop: true, // Infinite loop
            margin: 25, // Space between items
            dots: true, // Show dots at the bottom
            nav: false, // Show navigation arrows
            navText: ["<i class='far fa-arrow-left'></i>", "<i class='far fa-arrow-right'></i>"], // Custom arrow icons
            autoplay: false, // Disable autoplay
            responsive: {
                0: {
                    items: 1 // 1 item on small screens
                },
                600: {
                    items: 2 // 2 items on medium screens
                },
                1000: {
                    items: 3 // 3 items on large screens
                }
            }
        });
    });
</script>
<!-- Quote Form Pop up -->

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var quoteBtn = document.getElementById('quoteBtn');
        var quoteModal = new bootstrap.Modal(document.getElementById('quoteModal'));

        quoteBtn.addEventListener('click', function (e) {
            e.preventDefault();
            quoteModal.show();
        });

        document.getElementById('quoteForm').addEventListener('submit', function (e) {
            e.preventDefault();
            // Here you would typically send the form data to the server
            alert('Form submitted! We will get back to you soon.');
            quoteModal.hide();
        });
    });

</script>


</body>

</html>