<!-- Include Header and Sidebar -->
<?php $this->load->view('admin/layout/header'); ?>
<?php $this->load->view('admin/layout/sidebar'); ?>

<div class="content-body">
    <h1 class="mb-4">Home Section</h1>

    <!-- Toggle Button -->
    <button id="toggleButton" onclick="toggleEditMode(<?php echo $edit_mode ? 'false' : 'true'; ?>)"
        class="btn btn-primary mb-3">
        <?php echo $edit_mode ? 'Cancel' : 'Edit'; ?>
    </button>

    <?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success">
            <?php echo $this->session->flashdata('success'); ?>
        </div>
    <?php endif; ?>
    <?php if ($this->session->flashdata('error')): ?>
        <div class="alert alert-danger">
            <?php echo $this->session->flashdata('error'); ?>
        </div>
    <?php endif; ?>

    <!-- Display Mode -->
    <div id="displayMode" <?php echo $edit_mode ? 'style="display: none;"' : ''; ?>>
        <div class="card">
            <div class="card-header">
                <strong>Home Section</strong>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <strong>Hero Banner Image:</strong><br>
                        <?php if (isset($home_section['hero_banner']) && !empty($home_section['hero_banner'])): ?>
                            <video controls class="img-fluid w-75" style="max-width: 100%; height: auto;">
                                <source src="<?php echo base_url('uploads/heroBanner/' . $home_section['hero_banner']); ?>"
                                    type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        <?php else: ?>
                            <p>No image available.</p>
                        <?php endif; ?>
                    </div>

                    <div class="col-md-6 mb-3">
                        <strong>About Thumbnail:</strong><br>
                        <?php if (isset($home_section['about_thumbnail']) && !empty($home_section['about_thumbnail'])): ?>
                            <img class="w-75" src="<?php echo base_url('uploads/heroBanner/' . $home_section['about_thumbnail']); ?>"
                                alt="Th" class="img-fluid" style="max-width: 100%; height: auto;">
                        <?php else: ?>
                            <p>No image available.</p>
                        <?php endif; ?>
                    </div>

                    <div class="col-md-6 mb-3">
                        <strong>About Title:</strong>
                        <p><?php echo isset($home_section['about_title']) ? htmlspecialchars($home_section['about_title']) : 'No title available'; ?>
                        </p>
                    </div>

                    <div class="col-md-6 mb-3">
                        <strong>About Description:</strong>
                        <p><?php echo isset($home_section['about_description']) ? htmlspecialchars($home_section['about_description']) : 'No description available'; ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Mode -->
    <div id="editMode" <?php echo $edit_mode ? '' : 'style="display: none;"'; ?>>
        <div class="card">
            <div class="card-header">
                <strong>Edit Home Section</strong>
            </div>
            <div class="card-body">
                <form id="homeForm" action="<?php echo site_url('admin/home/update'); ?>" method="post"
                    enctype="multipart/form-data">
                    <input type="hidden" name="h_id"
                        value="<?php echo isset($home_section['h_id']) ? htmlspecialchars($home_section['h_id']) : '1'; ?>">

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <strong>Hero Banner Image:</strong><br>
                            <?php if (isset($home_section['hero_banner']) && !empty($home_section['hero_banner'])): ?>
                                <video controls class="img-fluid w-75" style="max-width: 100%; height: auto;">
                                <source src="<?php echo base_url('uploads/heroBanner/' . $home_section['hero_banner']); ?>"
                                    type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                            <?php endif; ?>
                            <input type="file" class="form-control mb-2" name="hero_banner">
                            <input type="hidden" name="existing_heroBanner_img"
                                value="<?php echo isset($home_section['hero_banner']) ? htmlspecialchars($home_section['hero_banner']) : ''; ?>">
                        </div>

                        <div class="col-md-6 mb-3">
                            <strong>About Thumbnail:</strong><br>
                            <?php if (isset($home_section['about_thumbnail']) && !empty($home_section['about_thumbnail'])): ?>
                                <img src="<?php echo base_url('uploads/heroBanner/' . $home_section['about_thumbnail']); ?>"
                                    alt="Current Thumbnail" class="img-fluid mb-3" style="max-width: 100%; height: auto;">
                            <?php endif; ?>
                            <input type="file" class="form-control mb-2" name="about_thumbnail">
                            <input type="hidden" name="existing_about_thumbnail"
                                value="<?php echo isset($home_section['about_thumbnail']) ? htmlspecialchars($home_section['about_thumbnail']) : ''; ?>">
                        </div>

                        <div class="col-md-6 mb-3">
                            <strong>About Title:</strong>
                            <input type="text" class="form-control" name="about_title"
                                value="<?php echo isset($home_section['about_title']) ? htmlspecialchars($home_section['about_title']) : ''; ?>">
                        </div>

                        <div class="col-md-6 mb-3">
                            <strong>About Description:</strong>
                            <textarea class="form-control"
                                name="about_description"><?php echo isset($home_section['about_description']) ? htmlspecialchars($home_section['about_description']) : ''; ?></textarea>
                        </div>

                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-success">Save</button>
                            <button type="button" onclick="toggleEditMode(false)"
                                class="btn btn-secondary">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Include Footer -->
<?php $this->load->view('admin/layout/footer'); ?>

<script>
    function toggleEditMode(editMode) {
        document.getElementById('displayMode').style.display = editMode ? 'none' : 'block';
        document.getElementById('editMode').style.display = editMode ? 'block' : 'none';
        document.getElementById('toggleButton').textContent = editMode ? 'Cancel' : 'Edit';
        document.getElementById('toggleButton').setAttribute('onclick', editMode ? 'toggleEditMode(false)' : 'toggleEditMode(true)');
    }
</script>