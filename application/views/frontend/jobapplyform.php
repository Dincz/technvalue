<div class="col-lg-8 mb-30 formdiv">

    <div class="contact-box">
        <h3 class="contact-box__title h4">Apply Now</h3>
        <!-- <p class="contact-box__text">We’re Ready To Help You</p> -->
        <form class="contact-box__form ajax-contact" action="mail.php" method="POST">
            <div class="row gx-20 form-main">
                <!-- <div class=" col-12 bgformimg mx-0">
                <img src="assets\img\bg\formbg.webp" class="w-100 pb-3" alt="Form Background">
            </div> -->
                <div class="col-md-6 form-group">
                    <input type="text" name="position" id="position" placeholder="Position Applied For" required>
                    <i class="fal fa-briefcase  "></i>
                </div>
                <div class="col-md-6 form-group">
                    <input type="text" name="name" id="name" placeholder="Enter Your Full Name" required>
                    <i class="fal fa-user"></i>
                </div>
                <div class="col-md-6 form-group">
                    <input type="date" name="dob" id="dob" placeholder="Enter Your Date of Birth" required>
                    <!-- <i class="fal fa-time"></i> -->
                </div>
                <div class="col-6 form-group">
                    <select name="gender" id="gender">
                        <option selected disabled hidden>Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="female">Other</option>

                    </select>
                </div>
                <div class="col-md-6 form-group">
                    <input type="number" name="phoneno" id="phoneno" placeholder="Enter Your Mob No." required>
                    <i class="fal fa-phone"></i>
                </div>

                <div class="col-md-6 form-group">
                    <input type="email" name="email" id="email" placeholder="Email Address" required>
                    <i class="fal fa-envelope"></i>
                </div>
                <div class="col-md-6 form-group">
                    <input type="text" name="Qualification" id="Qualification" placeholder="Enter Your Qualifications"
                        required>
                    <i class="fal fa-graduation-cap"></i></i>
                </div>
                <div class="col-md-6 form-group">
                    <input type="number" name="experience" id="experience"
                        placeholder="Enter Your Total Experience in Yrs" required>
                    <i class="fal fa-briefcase"></i>
                </div>
                <div class="col-md-6 form-group">
                    <input type="text" name="currentcompany" id="currentcompany" placeholder="Current Company" required>
                    <i class="fal fa-briefcase"></i>
                </div>
                <div class="col-md-6 form-group">
                    <input type="text" name="designation" id="designation" placeholder="Designation" required>
                    <i class="fal fa-briefcase"></i>
                </div>
                <div class="col-md-6 form-group">
                    <input type="address" name="department" id="department" placeholder="Enter Your Department">
                    <i class="fal fa-briefcase"></i>
                </div>
                <div class="col-md-6 form-group">
                    <input type="text" name="country" id="country" placeholder="Enter Your Country">
                    <i class="fal fa-globe"></i>
                </div>
                <div class="col-md-6 form-group">
                    <input type="address" name="location" id="location" placeholder="Enter Your Location">
                    <i class="fal fa-location"></i>
                </div>
                <div class="col-md-6 form-group">
                    <input type="number" name="currentctc" id="currentctc" placeholder="Enter Your Current CTC"
                        required>
                    <i class="fal fa-dollar-sign"></i>
                </div>
                <div class="col-md-6 form-group">
                    <input type="number" name="expectedctc" id="expectedctc" placeholder="Enter Your Expected CTC"
                        required>
                    <i class="fal fa-dollar-sign"></i>
                </div>
                <div class="col-md-6 form-group">
                    <input type="number" name="noticeperiod" id="noticeperiod"
                        placeholder="Enter Your Notice Period (Days)" required>
                    <i class="fal fa-calendar-day"></i>
                </div>
                <div class="col-md-6 form-group resupload mt-3">
                    <label for="resume">Upload your Resume:</label>
                    <input type="file" class="mt-3" name="resume" id="resume" required>
                    <!-- <i class="fal fa-coin"></i> -->
                </div>

                <div class="col-12">
                    <button class="vs-btn">Apply Now<i class="far fa-arrow-right"></i></button>
                </div>
                <!-- <div class="bgformimg mx-0 pb-4">
                <img src="assets\img\bg\formbg.webp" class="w-100 h-50" alt="Form Background">
            </div> -->
            </div>
        </form>
        <p class="form-messages mb-0 mt-3"></p>
    </div>
</div>