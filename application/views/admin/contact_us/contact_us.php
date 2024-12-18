<!--**********************************Header & sidebar start***********************************-->
<?php
$this->load->view('admin/layout/header');
$this->load->view('admin/layout/sidebar');
?>

<!--**********************************Content body start****************************-->
<div class="content-body">
    <h1 class="mb-4">Contact Information</h1>

    <!-- Toggle Button -->
    <button id="toggleButton" onclick="toggleEditMode(true)" class="btn btn-primary mb-3">Edit</button>

    <?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success">
            <?php echo $this->session->flashdata('success'); ?>
        </div>
    <?php endif; ?>

    <!-- Display Mode -->
    <div id="displayMode">
        <div class="card">
            <div class="card-header">
                <strong>Contact Information</strong>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <strong>Hero Banner Image:</strong><br>
                        <?php if (isset($data[0]['heroBanner_img']) && !empty($data[0]['heroBanner_img'])): ?>
                            <img src="<?php echo base_url('uploads/heroBanner/' . $data[0]['heroBanner_img']); ?>" alt="Banner Image" class="img-fluid" style="max-width: 100%; height: auto;">
                        <?php else: ?>
                            <p>No image available.</p>
                        <?php endif; ?>
                    </div>

                    <div class="col-md-6 mb-3">
                        <strong>Content:</strong>
                        <p><?php echo isset($data[0]['content']) ? htmlspecialchars($data[0]['content']) : 'No content available'; ?></p>
                    </div>

                    <div class="col-md-6 mb-3">
                        <strong>Office Address:</strong>
                        <p><?php echo isset($data[0]['office_address']) ? htmlspecialchars($data[0]['office_address']) : 'No address available'; ?></p>
                    </div>

                    <div class="col-md-6 mb-3">
                        <strong>Phone Number:</strong>
                        <p><?php echo isset($data[0]['phone_no']) ? htmlspecialchars($data[0]['phone_no']) : 'No phone number available'; ?></p>
                    </div>

                    <div class="col-md-6 mb-3">
                        <strong>Email Address:</strong>
                        <p><?php echo isset($data[0]['email_id']) ? htmlspecialchars($data[0]['email_id']) : 'No email available'; ?></p>
                    </div>

                    <div class="col-md-6 mb-3">
                        <strong>Map URL:</strong><br>
                        <a href="<?php echo isset($data[0]['map_url']) ? htmlspecialchars($data[0]['map_url']) : '#'; ?>" target="_blank">
                            <?php echo isset($data[0]['map_url']) ? htmlspecialchars($data[0]['map_url']) : 'No map URL available'; ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Mode -->
    <div id="editMode" style="display: none;">
        <div class="card">
            <div class="card-header">
                <strong>Edit Contact Information</strong>
            </div>
            <div class="card-body">
                <form id="contactForm" action="<?php echo site_url('admin/contact_us/update'); ?>" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <strong>Hero Banner Image:</strong><br>
                            <?php if (isset($data[0]['heroBanner_img']) && !empty($data[0]['heroBanner_img'])): ?>
                                <img src="<?php echo base_url('uploads/heroBanner/' . $data[0]['heroBanner_img']); ?>" alt="Current Banner" class="img-fluid mb-3" style="max-width: 100%; height: auto;">
                            <?php endif; ?>
                            <input type="file" class="form-control mb-2" name="heroBanner_img">
                            <input type="hidden" name="existing_heroBanner_img" value="<?php echo isset($data[0]['heroBanner_img']) ? htmlspecialchars($data[0]['heroBanner_img']) : ''; ?>">
                        </div>

                        <div class="col-md-6 mb-3">
                            <strong>Content:</strong>
                            <input type="text" class="form-control" name="content" value="<?php echo isset($data[0]['content']) ? htmlspecialchars($data[0]['content']) : ''; ?>">
                        </div>

                        <div class="col-md-6 mb-3">
                            <strong>Office Address:</strong>
                            <input type="text" class="form-control" name="office_address" value="<?php echo isset($data[0]['office_address']) ? htmlspecialchars($data[0]['office_address']) : ''; ?>">
                        </div>

                        <div class="col-md-6 mb-3">
                            <strong>Phone Number:</strong>
                            <input type="text" class="form-control" name="phone_no" value="<?php echo isset($data[0]['phone_no']) ? htmlspecialchars($data[0]['phone_no']) : ''; ?>">
                        </div>

                        <div class="col-md-6 mb-3">
                            <strong>Email Address:</strong>
                            <input type="email" class="form-control" name="email_id" value="<?php echo isset($data[0]['email_id']) ? htmlspecialchars($data[0]['email_id']) : ''; ?>">
                        </div>

                        <div class="col-md-6 mb-3">
                            <strong>Map URL:</strong>
                            <input type="text" class="form-control" name="map_url" value="<?php echo isset($data[0]['map_url']) ? htmlspecialchars($data[0]['map_url']) : ''; ?>">
                        </div>

                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-success">Save</button>
                            <button type="button" onclick="toggleEditMode(false)" class="btn btn-secondary">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--**********************************Content body End***********************************-->

<!--**********************************footer Start***********************************-->
<?php $this->load->view('admin/layout/footer'); ?>
<!--**********************************footer End***********************************-->

<script>
function toggleEditMode(editMode) {
    document.getElementById('displayMode').style.display = editMode ? 'none' : 'block';
    document.getElementById('editMode').style.display = editMode ? 'block' : 'none';
    document.getElementById('toggleButton').textContent = editMode ? 'Cancel' : 'Edit';
    document.getElementById('toggleButton').setAttribute('onclick', editMode ? 'toggleEditMode(false)' : 'toggleEditMode(true)');
}
</script>
