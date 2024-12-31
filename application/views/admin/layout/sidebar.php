<!--**********************************
            Sidebar start
***********************************-->
<div class="deznav">
    <div class="deznav-scroll">
        <!-- <a href="javascript:void(0)" class="add-menu-sidebar" data-toggle="modal" data-target="#addOrderModalside">+ New Event</a> -->
        <ul class="metismenu" id="menu">
            <!-- <li><a href="<?php echo base_url() ?>admin" class="ai-icon" aria-expanded="false">
                    <i class="fa-solid fa-chart-simple"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li> -->
            <?php
            $userData = $this->db->select('*')->from('admin_login')->where('email', $this->session->userdata('adminEmail'))->get()->row_array();

            ?>
            <?php
            if ($userData['type'] == 1) {
                ?>

                <!-- <li><a href="<?php echo base_url() ?>admin/category" class="ai-icon" aria-expanded="false">
                        <i class="fa-solid fa-chart-simple"></i>
                        <span class="nav-text">Category</span>
                    </a>
                </li>
                <li><a href="<?php echo base_url() ?>admin/Sub_category" class="ai-icon" aria-expanded="false">
                        <i class="fa-solid fa-chart-simple"></i>
                        <span class="nav-text">Sub category</span>
                    </a>
                </li> -->
                <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <i class="fa-solid fa-chart-simple"></i>
                        <span class="nav-text">Home Page</span>
                    </a>
                    <ul aria-expanded="false" class="mm-collapse">
                        <li><a href="<?php echo base_url() ?>admin/home">Home page</a></li>
                        <li><a href="<?php echo base_url() ?>admin/about_us">Whats New</a></li>
                        <li><a href="<?php echo base_url() ?>admin/chooseus">Update</a></li>
                        <li><a href="<?php echo base_url() ?>admin/whatsnew">Whats New section</a></li>
                        <li><a href="<?php echo base_url() ?>admin/technovalueupdates">Technovalue Updates section</a></li>
                        <!-- <li><a href="<?php echo base_url() ?>admin/history">History</a></li> -->
                        <!-- <li><a href="<?php echo base_url() ?>admin/expert">Meet Our Expert</a></li> -->
                    </ul>
                </li>
                <!-- <li><a href="<?php echo base_url() ?>admin/contacts" class="ai-icon" aria-expanded="false">
                        <i class="fa-solid fa-chart-simple"></i>
                        <span class="nav-text">Contact Us</span>
                    </a>
                </li> -->
                <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <i class="fa-solid fa-chart-simple"></i>
                        <span class="nav-text">About-Us</span>
                    </a>
                    <ul aria-expanded="false" class="mm-collapse">
                        <li><a href="<?php echo base_url() ?>admin/about_us">About-Us</a></li>
                        <li><a href="<?php echo base_url() ?>admin/chooseus">Choose Us</a></li>
                        <li><a href="<?php echo base_url() ?>admin/expertise">Expertise Or Achievements</a></li>
                        <li><a href="<?php echo base_url() ?>admin/history">History</a></li>
                        <li><a href="<?php echo base_url() ?>admin/expert">Meet Our Expert</a></li>
                    </ul>
                </li>
                <li><a href="javascript:void()" class="has-arrow ai-icon" aria-expanded="false">
                        <i class="fa-solid fa-chart-simple"></i>
                        <span class="nav-text">Product</span>
                    </a>
                    <ul aria-expanded="false" class="mm-collapse">
                        <li><a href="<?php echo base_url() ?>admin/product">Product</a></li>
                        <li><a href="<?php echo base_url() ?>admin/category">Product Category</a></li>
                        <li><a href="<?php echo base_url() ?>admin/Sub_category">Product Sub Category</a></li>
                        <!-- <li><a href="<?php echo base_url() ?>admin/faq">FAQs</a></li> -->
                    </ul>
                </li>
                <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <i class="fa-solid fa-chart-simple"></i>
                        <span class="nav-text">Gallery</span>
                    </a>
                    <ul aria-expanded="false" class="mm-collapse">
                        <li><a href="<?php echo base_url() ?>admin/gallery">gallery_category</a></li>
                        <li><a href="<?php echo base_url() ?>admin/gallery-image">gallery</a></li>
                    </ul>
                </li>
                <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <i class="fa-solid fa-chart-simple"></i>
                        <span class="nav-text">Career</span>
                    </a>
                    <ul aria-expanded="false" class="mm-collapse">
                        <li><a href="<?php echo base_url() ?>admin/Carrier_Content">HR Philosophy</a></li>
                        <li><a href="<?php echo base_url() ?>admin/TeamQualities">Work Culture</a></li>
                        <li><a href="<?php echo base_url() ?>admin/workculturedesc">Work Culture Description</a></li>
                        <li><a href="<?php echo base_url() ?>admin/jobs">Job openings</a></li>

                    </ul>
                </li>
                <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <i class="fa-solid fa-chart-simple"></i>
                        <span class="nav-text">Service</span>
                    </a>
                    <ul aria-expanded="false" class="mm-collapse">
                        <li><a href="<?php echo base_url() ?>admin/service">Services Info</a></li>
                        <li><a href="<?php echo base_url() ?>admin/specialization">Specialization</a></li>
                        <li><a href="<?php echo base_url() ?>admin/service_features">Service Features</a></li>
                        <li><a href="<?php echo base_url() ?>admin/faq">FAQs</a></li>
                    </ul>
                </li>
                <li><a href="<?php echo base_url() ?>admin/blog" aria-expanded="false">
                        <i class="fa-solid fa-chart-simple"></i>
                        <span class="nav-text">Blogs</span>
                    </a>
                </li>
                <li><a href="<?php echo base_url() ?>admin/partners" class="ai-icon" aria-expanded="false">
                        <i class="fa-solid fa-chart-simple"></i>
                        <span class="nav-text">Partners</span>
                    </a>
                </li>
                <li><a href="<?php echo base_url() ?>admin/clientele" class="ai-icon" aria-expanded="false">
                        <i class="fa-solid fa-chart-simple"></i>
                        <span class="nav-text">Clients</span>
                    </a>
                </li>

                
                <!-- <li><a href="<?php echo base_url() ?>admin/faq" aria-expanded="false">
                        <i class="fa-solid fa-chart-simple"></i>
                        <span class="nav-text">Faqs</span>
                    </a>
                </li> -->
                <li><a href="<?php echo base_url() ?>admin/customer_feedback" class="ai-icon" aria-expanded="false">
                        <i class="fa-solid fa-chart-simple"></i>
                        <span class="nav-text">Customer Feedback</span>
                    </a>
                </li>



                <?php
            }
            ?>

        </ul>
        <div class="copyright">
            <p><strong>Crezvatic CRM Dashboard</strong> ©2024 All Rights Reserved</p>
            <p>Made with <span class="heart"></span> by Team <a href="http://crezvatic.com/"
                    target="blank">Crezvatic</a></p>
        </div>
    </div>
</div>
<!--**********************************
            Sidebar end
***********************************-->