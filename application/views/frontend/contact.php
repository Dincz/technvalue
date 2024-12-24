<div class="breadcumb-wrapper" data-bg-src="<?= base_url('uploads/banners/banner-1.jpg'); ?>">
    <div class="container z-index-common">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Contact</h1>
            <div class="breadcumb-menu-wrap">
                <ul class="breadcumb-menu">
                    <li><a href="<?php echo base_url() ?>">Home</a></li>
                    <li>Contact</li>
                </ul>
            </div>
        </div>
    </div>
</div>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechnoValue India Map Location</title>
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="https://unpkg.com/tippy.js@6"></script>
    <style>
        .map-container {
            position: relative;
            /* display: inline-block; */
          /* text-align:center ; */
        }
     

        .map-point {
            position: absolute;
            width: 20px;
            height: 20px;
            /* background-color: rgba(255, 0, 0, 0.5); */
            border-radius: 50%;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .map-point:hover {
            /* background-color: rgba(255, 0, 0, 0.8); */
        }

        .tippy-box {
            background-color: white;
            color: white;
            border-radius: 4px;
            font-size: 14px;
        }

        .tippy-content {
            padding: 10px;
        }
        .map{
            max-width: 100%!important;
        }
    </style>
</head>

<body>
    <div class="map-container ">
        <img class="map" src="assets/img/TechnoValueIndiaMapLocation-01.webp" alt="TechnoValue India Map" id="map-image">
    </div>

    <script>
        const locations = [
            {
                name: "Delhi Representative (Office)",
                coords: { x: 191, y: 204 },
                details: `
    <div class="card-body shadow">
     <div class="card-header bg-primary text-white">
                        <i class="fas fa-building  me-2"></i><span
                            class="title-text">Delhi Representative (Office)</span>
                    </div>
        <p class="contact-item m-0">
            <a href="tel:+910223501669" class="phone-link">
                <i class="fas fa-phone-alt me-2"></i>+91 022 35016690 - 718
            </a>
        </p>
        
        <!-- Mobile Call -->
        <p class="contact-item m-0">
            <a href="tel:+918879330481" class="phone-link">
                <i class="fas fa-mobile-alt me-2"></i>+91 8879330481
            </a>
        </p>
        
        <!-- WhatsApp -->
        <p class="contact-item m-0">
            <a href="https://wa.me/918879330481" class="phone-link">
                <i class="fab fa-whatsapp me-2" style="color: green;"></i>+91 8879330481
            </a>
            /
            <a href="https://wa.me/918879685687" class="phone-link">+91 8879685687</a>
            /
            <a href="https://wa.me/918657984017" class="phone-link">+91 8657984017</a>
        </p>
        
        <!-- Email -->
        <p class="contact-item m-0">
            <a href="mailto:sales@technovalue.in" class="phone-link">
                <i class="fas fa-envelope me-2"></i>sales@technovalue.in
            </a>
            /
            <a href="mailto:info@technovalue.in" class="phone-link">info@technovalue.in</a>
        </p>
        
        <!-- Address (Maps) -->
        <p class="contact-item">
            <a href="https://www.google.com/maps/search/?api=1&query=201/31-C.%20Ram%20Chander%20Gali%20no.1,%20Maujpur,%20Delhi-110053,%20India"
                target="_blank" class="phone-link">
                <i class="fas fa-map-marker-alt me-2"></i>201/31-C. Ram Chander Gali no.1, Maujpur, Delhi-110053, India
            </a>
        </p>
    </div>
`
            },
            {
                name: "Ahmedabad (Regional Office)",
                coords: { x: 94, y: 317 },
                details: `
    <div class="card-body shadow">
        <div class="card-header bg-primary text-white">
            <i class="fas fa-building me-2"></i><span class="title-text">Ahmedabad (Regional Office)</span>
        </div>
        <p class="contact-item m-0">
            <a href="tel:+910223501669" class="phone-link">
                <i class="fas fa-phone-alt me-2"></i>+91 022 35016690 - 718
            </a>
        </p>
        <p class="contact-item m-0">
            <a href="tel:+918879330481" class="phone-link">
                <i class="fas fa-mobile-alt me-2"></i>+91 8879330481
            </a>
        </p>
        <p class="contact-item m-0">
            <a href="https://wa.me/918879330481" class="phone-link">
                <i class="fab fa-whatsapp me-2" style="color: green;"></i>+91 8879330481
            </a>
            /
            <a href="https://wa.me/918879685687" class="phone-link">+91 8879685687</a>
            /
            <a href="https://wa.me/918657984017" class="phone-link">+91 8657984017</a>
        </p>
        <p class="contact-item m-0">
            <a href="mailto:sales@technovalue.in" class="phone-link">
                <i class="fas fa-envelope me-2"></i>sales@technovalue.in
            </a>
            /
            <a href="mailto:info@technovalue.in" class="phone-link">info@technovalue.in</a>
        </p>
        <p class="contact-item">
            <a href="https://www.google.com/maps/search/?api=1&query=603-604,%20Nobles%20Trade%20Center%20Opp.%20B.D.Rao%20Hall,%20Bhuyangdev,%20Ahmedabad,%20Gujarat%20-%20380052"
                target="_blank" class="phone-link">
                <i class="fas fa-map-marker-alt me-2"></i>603-604, Nobles Trade Center Opp. B.D.Rao Hall, Bhuyangdev, Ahmedabad, Gujarat - 380052
            </a>
        </p>
    </div>
`
            },
            {
                name: "Mumbai ( Sales & Service Office )",
                coords: { x: 110, y: 358 },
                details: `
    <div class="card-body shadow">
        <div class="card-header bg-primary text-white">
            <i class="fas fa-building me-2"></i><span class="title-text">Mumbai ( Sales & Service Office )</span>
        </div>
        <p class="contact-item m-0">
            <a href="tel:+910223501669" class="phone-link">
                <i class="fas fa-phone-alt me-2"></i>+91 022 35016690 - 718
            </a>
        </p>
        <p class="contact-item m-0">
            <a href="tel:+918879330481" class="phone-link">
                <i class="fas fa-mobile-alt me-2"></i>+91 8879330481
            </a>
        </p>
        <p class="contact-item m-0">
            <a href="https://wa.me/918879330481" class="phone-link">
                <i class="fab fa-whatsapp me-2" style="color: green;"></i>+91 8879330481
            </a>
            /
            <a href="https://wa.me/918879685687" class="phone-link">+91 8879685687</a>
            /
            <a href="https://wa.me/918657984017" class="phone-link">+91 8657984017</a>
        </p>
        <p class="contact-item m-0">
            <a href="mailto:sales@technovalue.in" class="phone-link">
                <i class="fas fa-envelope me-2"></i>sales@technovalue.in
            </a>
            /
            <a href="mailto:info@technovalue.in" class="phone-link">info@technovalue.in</a>
        </p>
        <p class="contact-item">
            <a href="https://www.google.com/maps/search/?api=1&query=Plot%20No.%20131,%20Sector%201A,%20Koparkhairane,%20Navi%20Mumbai-%20400709"
                target="_blank" class="phone-link">
                <i class="fas fa-map-marker-alt me-2"></i>Plot No. 131, Sector 1A, Koparkhairane, Navi Mumbai- 400709
            </a>
        </p>
    </div>
`
            },
            {
                name: "Goa Representative (Residential)",
                coords: { x: 131, y: 449 },
                details: `
    <div class="card-body shadow">
        <div class="card-header bg-primary text-white">
            <i class="fas fa-building me-2"></i><span class="title-text">Goa Representative (Residential)</span>
        </div>
        <p class="contact-item m-0">
            <a href="tel:+910223501669" class="phone-link">
                <i class="fas fa-phone-alt me-2"></i>+91 022 35016690 - 718
            </a>
        </p>
        <p class="contact-item m-0">
            <a href="tel:+918879330481" class="phone-link">
                <i class="fas fa-mobile-alt me-2"></i>+91 8879330481
            </a>
        </p>
        <p class="contact-item m-0">
            <a href="https://wa.me/918879330481" class="phone-link">
                <i class="fab fa-whatsapp me-2" style="color: green;"></i>+91 8879330481
            </a>
            /
            <a href="https://wa.me/918879685687" class="phone-link">+91 8879685687</a>
            /
            <a href="https://wa.me/918657984017" class="phone-link">+91 8657984017</a>
        </p>
        <p class="contact-item m-0">
            <a href="mailto:sales@technovalue.in" class="phone-link">
                <i class="fas fa-envelope me-2"></i>sales@technovalue.in
            </a>
            /
            <a href="mailto:info@technovalue.in" class="phone-link">info@technovalue.in</a>
        </p>
        <p class="contact-item">
            <a href="https://www.google.com/maps/search/?api=1&query=H.%20No.%20-%20288,%20Fondvem%20Ribandar,%20Tiswadi,%20Goa,%20Panaji,%20Goa%20-%20403006,%20India"
                target="_blank" class="phone-link">
                <i class="fas fa-map-marker-alt me-2"></i>H. No. - 288, Fondvem Ribandar, Tiswadi, Goa, Panaji, Goa - 403006, India
            </a>
        </p>
    </div>
`

            },
            {
                name: "Bengaluru ( Regional Office )",
                coords: { x: 166, y: 482 },
                details: `
    <div class="card-body shadow">
        <div class="card-header bg-primary text-white">
            <i class="fas fa-building me-2"></i><span class="title-text">Bengaluru ( Regional Office )</span>
        </div>
        <p class="contact-item m-0">
            <a href="tel:+910223501669" class="phone-link">
                <i class="fas fa-phone-alt me-2"></i>+91 022 35016690 - 718
            </a>
        </p>
        <p class="contact-item m-0">
            <a href="tel:+918879330481" class="phone-link">
                <i class="fas fa-mobile-alt me-2"></i>+91 8879330481
            </a>
        </p>
        <p class="contact-item m-0">
            <a href="https://wa.me/918879330481" class="phone-link">
                <i class="fab fa-whatsapp me-2" style="color: green;"></i>+91 8879330481
            </a>
            /
            <a href="https://wa.me/918879685687" class="phone-link">+91 8879685687</a>
            /
            <a href="https://wa.me/918657984017" class="phone-link">+91 8657984017</a>
        </p>
        <p class="contact-item m-0">
            <a href="mailto:sales@technovalue.in" class="phone-link">
                <i class="fas fa-envelope me-2"></i>
                sales@technovalue.in
            </a>
            /
            <a href="mailto:info@technovalue.in" class="phone-link">info@technovalue.in</a>
        </p>
        <p class="contact-item">
            <a href="https://www.google.com/maps/search/?api=1&query=5/1,%20flat%20no.%202e,%20Rich%20homes,%20Richmond%20Rd,%20Shanthala%20Nagar,%20Ashok%20Nagar,%20Bengaluru,%20Karnataka,%20560025"
                target="_blank" class="phone-link">
                <i class="fas fa-map-marker-alt me-2"></i>
                5/1, flat no. 2e, Rich homes, Richmond Rd, Shanthala Nagar, Ashok Nagar, Bengaluru, Karnataka, 560025
            </a>
        </p>
    </div>
`

            },
            {
                name: "Chennai Representative (Residential)",
                coords: { x: 216, y: 499 },
                details: `
            <div class="card-body shadow">
                <div class="card-header bg-primary text-white">
                    <i class="fas fa-building me-2"></i><span class="title-text">Chennai Representative (Residential)</span>
                </div>
                <p class="contact-item m-0">
                    <a href="tel:+910223501669" class="phone-link">
                        <i class="fas fa-phone-alt me-2"></i>+91 022 35016690 - 718
                    </a>
                </p>
                <p class="contact-item m-0">
                    <a href="tel:+918879330481" class="phone-link">
                        <i class="fas fa-mobile-alt me-2"></i>+91 8879330481
                    </a>
                </p>
                <p class="contact-item m-0">
                    <a href="https://wa.me/918879330481" class="phone-link">
                        <i class="fab fa-whatsapp me-2" style="color: green;"></i>+91 8879330481
                    </a>
                    /
                    <a href="https://wa.me/918879685687" class="phone-link">+91 8879685687</a>
                    /
                    <a href="https://wa.me/918657984017" class="phone-link">+91 8657984017</a>
                </p>
                <p class="contact-item">
                    <a href="mailto:sales@technovalue.in" class="phone-link">
                        <i class="fas fa-envelope me-2"></i>sales@technovalue.in
                    </a>
                    /
                    <a href="mailto:info@technovalue.in" class="phone-link">info@technovalue.in</a>
                </p>
                <p class="contact-item">
                    <a href="https://www.google.com/maps/search/?api=1&query=House%20No.%201-98/15/1,%20Ground%20Floor,%20Arunodaya%20Colony,%20Madhapur,%20Hyderabad,%20500081"
                        target="_blank" class="phone-link">
                        <i class="fas fa-map-marker-alt me-2"></i>House No. 1-98/15/1, Ground Floor, Arunodaya Colony, Madhapur, Hyderabad-500081
                    </a>
                </p>
            </div>
        `
            },
            {
                name: "Hyderabad Representative",
                coords: { x: 255, y: 550 },
                details: `
            <div class="card-body shadow">
                <div class="card-header bg-primary text-white">
                    <i class="fas fa-building me-2"></i><span class="title-text">Hyderabad Representative</span>
                </div>
                <p class="contact-item m-0">
                    <a href="tel:+910223501669" class="phone-link">
                        <i class="fas fa-phone-alt me-2"></i>+91 022 35016690 - 718
                    </a>
                </p>
                <p class="contact-item m-0">
                    <a href="tel:+918879330481" class="phone-link">
                        <i class="fas fa-mobile-alt me-2"></i>+91 8879330481
                    </a>
                </p>
                <p class="contact-item m-0">
                    <a href="https://wa.me/918879330481" class="phone-link">
                        <i class="fab fa-whatsapp me-2" style="color: green;"></i>+91 8879330481
                    </a>
                    /
                    <a href="https://wa.me/918879685687" class="phone-link">+91 8879685687</a>
                    /
                    <a href="https://wa.me/918657984017" class="phone-link">+91 8657984017</a>
                </p>
                <p class="contact-item">
                    <a href="mailto:sales@technovalue.in" class="phone-link">
                        <i class="fas fa-envelope me-2"></i>sales@technovalue.in
                    </a>
                    /
                    <a href="mailto:info@technovalue.in" class="phone-link">info@technovalue.in</a>
                </p>
                <p class="contact-item">
                    <a href="https://www.google.com/maps/search/?api=1&query=House%20No.%201-98/15/1,%20Ground%20Floor,%20Arunodaya%20Colony,%20Madhapur,%20Hyderabad,%20500081"
                        target="_blank" class="phone-link">
                        <i class="fas fa-map-marker-alt me-2"></i>House No. 1-98/15/1, Ground Floor, Arunodaya Colony, Madhapur, Hyderabad-500081
                    </a>
                </p>
            </div>
        `
            }
        ];

        function createMapPoints() {
            const mapContainer = document.querySelector('.map-container');
            const mapImage = document.getElementById('map-image');

            locations.forEach((location, index) => {
                const point = document.createElement('div');
                point.className = 'map-point';
                point.style.left = `${location.coords.x - 10}px`;
                point.style.top = `${location.coords.y - 10}px`;
                mapContainer.appendChild(point);

                tippy(point, {
                    content: location.details,
                    allowHTML: true,
                    interactive: true,
                    placement: 'bottom',
                });
            });
        }

        window.addEventListener('load', createMapPoints);
    </script>
</body>

</html>





<!-- PHP View File (contact.php) -->
<div class="container mt-4">
    <div class="row">
        <?php foreach ($contact as $contact): ?>
            <div class="col-md-4 mb-4">
                <div class="card contact-card">
                    <div class="card-header bg-primary text-white p-4">
                        <i class="fas fa-building  me-2"></i><span
                            class="title-text"><?php echo $contact['title']; ?></span>
                    </div>
                    <div class="card-body">
                        <p class="contact-item">
                            <a href="tel:<?= $contact['phone']; ?>" class="phone-link">
                                <i class="fas fa-phone-alt me-2"></i><?= $contact['phone']; ?>
                            </a>
                        </p>


                        <!-- Mobile Call -->
                        <p class="contact-item">
                            <a href="tel:<?= $contact['mobile']; ?>" class="phone-link">
                                <i class="fas fa-mobile-alt me-2"></i><?= $contact['mobile']; ?>
                            </a>
                        </p>

                        <!-- WhatsApp -->
                        <p class="contact-item">
                            <?php
                            $whatsapps = explode(' / ', $contact['whatsapp']); // Split the WhatsApp numbers
                            foreach ($whatsapps as $index => $whatsapp): ?>
                                <a href="https://wa.me/<?= trim($whatsapp); ?>" class="phone-link">
                                    <?php if ($index === 0): // Only add the icon for the first number 
                                                    ?>
                                        <i class="fab fa-whatsapp me-2" style="color: green;"></i>
                                    <?php endif; ?>
                                    <?= trim($whatsapp); ?>
                                </a>
                                <?php if ($index < count($whatsapps) - 1): // Add '/' only between numbers 
                                                ?>
                                    /
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </p>



                        <!-- Email -->
                        <p class="contact-item">
                            <?php
                            $emails = explode(' / ', $contact['email']); // Split the emails by ' / '
                            foreach ($emails as $index => $email): ?>
                                <a href="mailto:<?= trim($email); ?>" class="phone-link">
                                    <?php if ($index === 0): // Only add the icon for the first email 
                                                    ?>
                                        <i class="fas fa-envelope me-2"></i>
                                    <?php endif; ?>
                                    <?= trim($email); ?>
                                </a>
                                <?php if ($index < count($emails) - 1): // Add '/' only between emails 
                                                ?>
                                    /
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </p>


                        <!-- Address (Maps) -->
                        <p class="contact-item">
                            <a href="https://www.google.com/maps/search/?api=1&query=<?= urlencode($contact['address']); ?>"
                                target="_blank" class="phone-link">
                                <i class="fas fa-map-marker-alt me-2"></i><?= $contact['address']; ?>
                            </a>
                        </p>

                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<!--==============================
      Contact Form Area
    ==============================-->
<section class=" space-top space-extra-bottom">
    <div class="container d-flex text-center">
        <div class="col-lg-6 m-5">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3769.977622978157!2d73.00683627505293!3d19.108637582102673!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c0c850b3ffff%3A0xf3e7652372200957!2sTechnoValue%20Solutions%20Pvt%20Ltd!5e0!3m2!1sen!2sin!4v1727946323847!5m2!1sen!2sin"
                width="600" height="750" style="border:2px;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="col-lg-5 m-5 mx-4">
            <div class="contact-box">
                <h3 class="contact-box__title h4">Leave a Message</h3>
                <p class="contact-box__text">We’re Ready To Help You</p>
                <form class="contact-box__form ajax-contact2" action="mail.php" method="POST">
                    <div class="row gx-20">
                        <div class="col-md-6 form-group">
                            <input type="text" name="name" id="name2" placeholder="Your Name">
                            <!--<i class="fal fa-user"></i>-->
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="email" name="email" id="email2" placeholder="Email Address">
                            <!--<i class="fal fa-envelope"></i>-->
                        </div>
                        <div class="col-12 form-group">
                            <select name="subject" id="subject2">
                                <option selected disabled hidden>Select subject</option>
                                <option value="Web Development">Web Development</option>
                                <option value="UI Design">UI Design</option>
                                <option value="CMS Development">CMS Development</option>
                                <option value="Theme Development">Theme Development</option>
                                <option value="Wordpress Development">Wordpress Development</option>
                            </select>
                        </div>
                        <div class="col-12 form-group">
                            <textarea name="message" id="message2" placeholder="Type Your Message"></textarea>
                        </div>
                        <div class="col-12">
                            <button class="vs-btn">Submit Message<i class="far fa-arrow-right"></i></button>
                        </div>
                    </div>
                </form>
                <p class="form-messages mb-0 mt-3"></p>
            </div>
        </div>

    </div>
</section>