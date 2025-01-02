<?php $this->load->view('layout/header') ?>


<div class="breadcumb-wrapper" data-bg-src="<?= base_url('uploads/banners/') . $banner['image']; ?>" loading="lazy">

    <div class="container z-index-common">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">JOB DETAILS</h1>
            <div class="breadcumb-menu-wrap">
                <ul class="breadcumb-menu">
                    <li><a href="index.html">Home</a></li>
                    <li>Career</li>
                    <li class="currentLocation"><?php echo $content[0]->title; ?></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="container my-5">
    <div class="row p-4 border rounded shadow-sm">
        <div class="col-md-6 col-12">
            <div class="job-details">
                <h3 class="mb-4">Job Description</h3>

                <div class="mb-3">
                    <strong>Post for:</strong> <?php echo $content[0]->title; ?>
                </div>
                <div class="mb-3">
                    <strong>Department:</strong> <?php echo $content[0]->department; ?>
                </div>
                <div class="mb-3">
                    <strong>Location:</strong> <?php echo $content[0]->location; ?>
                </div>

                <h5 class="mt-4">Responsibilities:</h5>
                <ul class="list-unstyled">
                    <?php
                    $responsibilities = explode("\n", $content[0]->responsibilities);
                    foreach ($responsibilities as $responsibility) {
                        echo "<li>{$responsibility}</li>";
                    }
                    ?>
                </ul>

                <div class="mt-4">
                    <p><strong>Experience:</strong> <?php echo $content[0]->experience; ?></p>
                    <p><strong>Qualification:</strong> <?php echo $content[0]->qualification; ?></p>
                </div>
                <a href="#" id="jobapply" data-bs-toggle="modal" data-bs-target="#jobApplyModal"
                    class="btn btn-primary">Apply Now</a>
            </div>
        </div>

        <div class="col-12 col-md-6">
            <img src="<?php echo base_url('uploads/career/' . $content[0]->image_url); ?>"
                alt="<?php echo $content[0]->title; ?>" class="w-100">
        </div>
    </div>
</div>

<!-- Job Apply Modal -->
<div class="modal fade" id="jobApplyModal" tabindex="-1" aria-labelledby="jobApplyModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="jobApplyModalLabel">Job Application Form</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url('JobApply') ?>" Method="post" enctype="multipart/form-data">

                    <div class="row justify-content-center">
                        <!-- Position Applied For -->
                        <div class="col-md-6 input-container">
                            <label class="form-label">Position Applied For</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-briefcase"></i></span>
                                <input type="text" class="form-control" name="position"
                                    value="<?php echo isset($title) ? html_escape($title) : ''; ?>" readonly>
                            </div>
                        </div>

                        <!-- Full Name -->
                        <div class="col-md-6 input-container">
                            <label class="form-label">Full Name</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                <input type="text" class="form-control" name="name"
                                    value="<?php echo set_value('name'); ?>" required>
                            </div>
                        </div>

                        <!-- Date of Birth -->
                        <div class="col-md-6 input-container">
                            <label class="form-label">Date of Birth</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                                <input type="date" class="form-control" name="dob"
                                    value="<?php echo set_value('dob'); ?>" required>
                            </div>
                        </div>

                        <!-- Gender -->
                        <div class="col-md-6 input-container">
                            <label class="form-label">Gender</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-venus-mars"></i></span>
                                <select class="form-select" name="gender" required>
                                    <option value="">Select Gender</option>
                                    <option value="male" <?php echo set_select('gender', 'male'); ?>>Male</option>
                                    <option value="female" <?php echo set_select('gender', 'female'); ?>>Female</option>
                                    <option value="other" <?php echo set_select('gender', 'other'); ?>>Other</option>
                                </select>
                            </div>
                        </div>

                        <!-- Phone -->
                        <div class="col-md-6 input-container">
                            <label class="form-label">Phone Number</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                <input type="tel" class="form-control" name="phone"
                                    value="<?php echo set_value('phone'); ?>" required>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="col-md-6 input-container">
                            <label class="form-label">Email Address</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                <input type="email" class="form-control" name="email"
                                    value="<?php echo set_value('email'); ?>" required>
                            </div>
                        </div>

                        <!-- Qualification -->
                        <div class="col-md-6 input-container">
                            <label class="form-label">Qualification</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-graduation-cap"></i></span>
                                <input type="text" class="form-control" name="qualification"
                                    value="<?php echo set_value('qualification'); ?>" required>
                            </div>
                        </div>

                        <!-- Experience -->
                        <div class="col-md-6 input-container">
                            <label class="form-label">Total Experience (Years)</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-briefcase"></i></span>
                                <input type="number" class="form-control" name="experience"
                                    value="<?php echo set_value('experience'); ?>" required>
                            </div>
                        </div>

                        <!-- Current Company -->
                        <div class="col-md-6 input-container">
                            <label class="form-label">Current Company</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-building"></i></span>
                                <input type="text" class="form-control" name="current_company"
                                    value="<?php echo set_value('current_company'); ?>" required>
                            </div>
                        </div>

                        <!-- Designation -->
                        <div class="col-md-6 input-container">
                            <label class="form-label">Current Designation</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-id-badge"></i></span>
                                <input type="text" class="form-control" name="designation"
                                    value="<?php echo set_value('designation'); ?>" required>
                            </div>
                        </div>

                        <!-- Department -->
                        <div class="col-md-6 input-container">
                            <label class="form-label">Department</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-sitemap"></i></span>
                                <input type="text" class="form-control" name="department"
                                    value="<?php echo set_value('department'); ?>">
                            </div>
                        </div>

                        <!-- Location -->
                        <div class="col-md-6 input-container">
                            <label class="form-label">Current Location</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                                <input type="text" class="form-control" name="location"
                                    value="<?php echo set_value('location'); ?>">
                            </div>
                        </div>

                        <!-- Current CTC -->
                        <div class="col-md-6 input-container">
                            <label class="form-label">Current CTC</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-dollar-sign"></i></span>
                                <input type="number" class="form-control" name="current_ctc"
                                    value="<?php echo set_value('current_ctc'); ?>" required>
                            </div>
                        </div>

                        <!-- Expected CTC -->
                        <div class="col-md-6 input-container">
                            <label class="form-label">Expected CTC</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-dollar-sign"></i></span>
                                <input type="number" class="form-control" name="expected_ctc"
                                    value="<?php echo set_value('expected_ctc'); ?>" required>
                            </div>
                        </div>

                        <!-- Notice Period -->
                        <div class="col-md-6 input-container">
                            <label class="form-label">Notice Period (Days)</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-clock"></i></span>
                                <input type="number" class="form-control" name="notice_period"
                                    value="<?php echo set_value('notice_period'); ?>" required>
                            </div>
                        </div>

                        <!-- Resume Upload -->
                        <div class="col-md-6 input-container">
                            <label class="form-label">Upload Resume</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-file-upload"></i></span>
                                <input type="file" class="form-control" name="resume" accept=".pdf,.doc,.docx" required>
                            </div>
                            <small class="text-muted">Accepted formats: PDF, DOC, DOCX (Max size: 5MB)</small>
                        </div>

                        <!-- Submit Button -->
                        <div class="col-12 text-center mt-4">
                            <button type="submit" class="btn btn-primary px-5">
                                Submit Application <i class="fas fa-paper-plane ms-2"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

<script>
    $('#jobApplyForm').on('submit', function (e) {
        e.preventDefault(); // Prevent default form submission

        var formData = new FormData(this);

        // Use AJAX to submit the form asynchronously
        $.ajax({
            url: '<?= site_url('JobApply/index') ?>',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function (response) {
                alert('Application submitted successfully!');
                $('#jobApplyModal').modal('hide');
                window.location.href = '<?= site_url('thankyou') ?>';
            },
            error: function (xhr, status, error) {
                console.error(error);
                alert('An error occurred. Please try again.');
            }
        });
    });
</script>