<?php $this->load->view('admin/layout/header'); ?>
<?php $this->load->view('admin/layout/sidebar'); ?>

<div class="content-body">
    <h1>Edit Technovalue Update</h1>
    <form method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control" value="<?= htmlspecialchars($update['u_title']); ?>" required>
        </div>

        <div class="mb-3">
            <label for="u_image" class="form-label">Image</label>
            <?php if ($update['u_image']): ?>
                <img src="<?= base_url('uploads/services/' . $update['u_image']); ?>" alt="Image" style="max-width: 200px; display: block;">
            <?php endif; ?>
            <input type="file" name="u_image" id="u_image" class="file-form-control">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea id="description" name="description" class="form-control" required><?= htmlspecialchars($update['u_description']); ?></textarea>
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select name="status" id="status" class="form-control">
                <option value="1" <?= $update['status'] == 1 ? 'selected' : ''; ?>>Active</option>
                <option value="0" <?= $update['status'] == 0 ? 'selected' : ''; ?>>Inactive</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="<?= site_url('admin/technovalueupdates') ?>" class="btn btn-secondary">Cancel</a>
    </form>
</div>

<?php $this->load->view('admin/layout/footer'); ?>
