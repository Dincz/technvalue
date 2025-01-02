<style>
    .form-control:focus {
        box-shadow: none;
        border-color: #0d6efd;
    }

    .input-group-text {
        background: none;
        border-right: none;
    }

    .form-control {
        border-left: none;
    }

    .card-title {
        color: #fff;
    }

    .card {
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        max-width: 800px;
        margin: 0 auto;
    }

    .input-group {
        max-width: 300px;
        margin: 0 auto;
    }

    .form-label {
        margin-bottom: 0.2rem;
        font-weight: 500;
    }

    .input-container {
        margin-bottom: 1rem;
    }

    .input-container input {
        height: 35px !important;
    }
</style>
</head>

<body class="bg-light">
    <div class="container py-5">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h3 class="card-title text-center mb-0">Job Application Form</h3>
                <?php if (!empty($title)): ?>
                    <p class="text-center mb-0 mt-2">Position: <?php echo html_escape($title); ?></p>
                <?php endif; ?>
            </div>
            <div class="card-body">
                <?php if ($this->session->flashdata('success')): ?>
                    <div class="alert alert-success">
                        <?php echo $this->session->flashdata('success'); ?>
                    </div>
                <?php endif; ?>

                <?php if (isset($validation_errors) && $validation_errors): ?>
                    <div class="alert alert-danger">
                        <?php echo $validation_errors; ?>
                    </div>
                <?php endif; ?>

                <?php if (isset($upload_error) && $upload_error): ?>
                    <div class="alert alert-danger">
                        <?php echo $upload_error; ?>
                    </div>
                <?php endif; ?>

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
        </div>
    </div>