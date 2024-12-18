<?php $this->load->view('admin/layout/header'); ?>
<?php $this->load->view('admin/layout/sidebar'); ?>

<div class="content-body">
    <div class="container">
        <h1>Edit Specialization</h1>
        <form method="post"  enctype="multipart/form-data">
            <div class="mb-3">
                <label for="specialization_title" class="form-label">Specialization Title</label>
                <input type="text" id="specialization_title" name="specialization_title" class="form-control"
                    value="<?= htmlspecialchars($specialization['specialization_title']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="specialization_description" class="form-label">Description</label>
                <textarea id="specialization_description" name="specialization_description" class="form-control"
                    required><?= htmlspecialchars($specialization['specialization_description']); ?></textarea>
            </div>
            <div class="mb-3">
                <label for="specialization_icon" class="form-label">Icon</label>
                <input type="file" id="specialization_icon" name="specialization_icon" class="form-control-file">
                <img src="<?= base_url('uploads/icons/') . $specialization['specialization_icon']; ?>"
                    alt="Current Icon" style="width: 100px; margin-top: 10px;">
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select id="status" name="status" class="form-select">
                    <option value="1" <?= $specialization['status'] ? 'selected' : ''; ?>>Active</option>
                    <option value="0" <?= !$specialization['status'] ? 'selected' : ''; ?>>Inactive</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a class="btn btn-danger" href="<?= site_url('admin/specialization'); ?>">Back</a>
        </form>
    </div>
</div>

<?php $this->load->view('admin/layout/footer'); ?>