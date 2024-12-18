<!--**********************************
            Footer start
        ***********************************-->
<div class="footer">
    <div class="copyright">
        <p>Copyright © Designed &amp; Developed by <a href="https://crezvatic.com/best-digital-marketing-agency-in-mumbai/" target="_blank">Crezvatic Digital</a> 2024</p>
    </div>
</div>
<!--**********************************
            Footer end
        ***********************************-->
<!--**********************************
           Support ticket button start
        ***********************************-->
<!--**********************************
           Support ticket button end
        ***********************************-->
</div>
<!--**********************************
        Main wrapper end
    ***********************************-->
<!--**********************************
        Scripts
    ***********************************-->
<!-- Required vendors -->
<script src="<?php echo asset_url() ?>admin/vendor/global/global.min.js"></script>
<script src="<?php echo asset_url() ?>admin/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script src="<?php echo asset_url() ?>admin/vendor/chart.js/Chart.bundle.min.js"></script>
<script src="<?php echo asset_url() ?>admin/js/custom.min.js"></script>
<script src="<?php echo asset_url() ?>admin/js/deznav-init.js"></script>
<script src="<?php echo asset_url() ?>admin/vendor/owl-carousel/owl.carousel.js"></script>
<!-- database  -->
<script src="<?php echo asset_url() ?>admin/vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="<?php echo asset_url() ?>admin/js/plugins-init/datatables.init.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.5/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.5/js/buttons.html5.min.js"></script>
<!-- Chart piety plugin files -->
<script src="<?php echo asset_url() ?>admin/vendor/peity/jquery.peity.min.js"></script>
<!-- Apex Chart -->
<script src="<?php echo asset_url() ?>admin/vendor/apexchart/apexchart.js"></script>
<!-- Dashboard 1 -->
<script src="<?php echo asset_url() ?>admin/js/dashboard/dashboard-1.js"></script>
<!-- Summernote -->
<script src="<?php echo asset_url() ?>admin/vendor/summernote/js/summern``````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````te.min.js"></script>
<!-- Summernote init -->
<script src="<?php echo asset_url() ?>admin/js/plugins-init/summernote-init.js"></script>
<!-- functionality script  -->
<script src="<?php echo asset_url() ?>admin/js/script.js"></script>
<script>
    const base_url = '<?php echo base_url(); ?>';

    function carouselReview() {
        /*  event-bx one function by = owl.carousel.js */
        jQuery('.event-bx').owlCarousel({
            loop: true,
            margin: 30,
            nav: true,
            center: true,
            autoplaySpeed: 3000,
            navSpeed: 3000,
            paginationSpeed: 3000,
            slideSpeed: 3000,
            smartSpeed: 3000,
            autoplay: false,
            navText: ['<i class="fa fa-caret-left" aria-hidden="true"></i>', '<i class="fa fa-caret-right" aria-hidden="true"></i>'],
            dots: true,
            responsive: {
                0: {
                    items: 1
                },
                720: {
                    items: 2
                },
                1150: {
                    items: 3
                },
                1200: {
                    items: 2
                },
                1749: {
                    items: 3
                }
            }
        })
    }
    jQuery(window).on('load', function() {
        setTimeout(function() {
            carouselReview();
        }, 1000);
    });
</script>
</body>

</html>