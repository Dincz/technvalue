<?php $this->load->view('admin/layout/header'); ?>
<?php $this->load->view('admin/layout/sidebar'); ?>

<div class="content-body">
    <div class="container mt-5">
        <h3>Edit Feature</h3>
        <form method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="features">Feature:</label>
                <input type="text" name="features" class="form-control"
                    value="<?= htmlspecialchars($feature['features']); ?>" required>
            </div>
            <div class="form-group">
            <label for="status" class="form-label">Status</label>
                <select id="status" name="status" class="form-control">
                <option value="1" <?= $feature['status'] ? 'selected' : ''; ?>>Active</option>
                <option value="0" <?= !$feature['status'] ? 'selected' : ''; ?>>Inactive</option>
                </select>
            </div>

            <button type="submit" class="btn btn-warning">Update</button>
            <a href="<?= site_url('admin/service_features'); ?>" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>
<?php $this->load->view('admin/layout/footer'); ?>