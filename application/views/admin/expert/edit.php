<?php $this->load->view('admin/layout/header'); ?>
<?php $this->load->view('admin/layout/sidebar'); ?>

<div class="content-body">
    <div class="container">
        <h1>Edit Expert</h1>
        <form method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" id="image" name="image" class="form-control">
                <img src="<?= base_url('uploads/team/') . $expert['image']; ?>" alt="Current Image"
                    style="width: 100px; margin-top: 10px;">
                <small class="form-text text-muted">Leave blank if you do not want to change the image.</small>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" id="name" name="name" class="form-control"
                    value="<?= htmlspecialchars($expert['name']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="designation" class="form-label">Designation</label>
                <input type="text" id="designation" name="designation" class="form-control"
                    value="<?= htmlspecialchars($expert['designation']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="facebook_link" class="form-label">Facebook Link</label>
                <input type="url" id="facebook_link" name="facebook_link" class="form-control"
                    value="<?= htmlspecialchars($expert['facebook_link']); ?>">
            </div>
            <div class="mb-3">
                <label for="linkdln_link" class="form-label">LinkedIn Link</label>
                <input type="url" id="linkdln_link" name="linkdln_link" class="form-control"
                    value="<?= htmlspecialchars($expert['linkdln_link']); ?>">
            </div>
            <div class="mb-3">
                <label for="twitter_link" class="form-label">Twitter Link</label>
                <input type="url" id="twitter_link" name="twitter_link" class="form-control"
                    value="<?= htmlspecialchars($expert['twitter_link']); ?>">
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select id="status" name="status" class="form-select">
                <option value="1" <?= $expert['status'] ? 'selected' : ''; ?>>Active</option>
                <option value="0" <?= !$expert['status'] ? 'selected' : ''; ?>>Inactive</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update Expert</button>
            <a class="btn btn-danger" href="<?php echo site_url('admin/expert'); ?>">Back</a>
        </form>
    </div>
</div>

<?php $this->load->view('admin/layout/footer'); ?>