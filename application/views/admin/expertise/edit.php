<?php $this->load->view('admin/layout/header'); ?>
<?php $this->load->view('admin/layout/sidebar'); ?>

<div class="content-body">
    <div class="container">
        <h1>Edit Expertise</h1>
        <form method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="icon" class="form-label">Icon</label>
                <input type="file" id="icon" name="icon" class="form-control-file">
                <img src="<?= base_url('uploads/icons/') . $expertise['icon']; ?>" alt="Current Icon"
                    style="width: 100px; margin-top: 10px;">
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" id="title" name="title" class="form-control"
                    value="<?= htmlspecialchars($expertise['title']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea id="description" name="description" class="form-control"
                    required><?= htmlspecialchars($expertise['description']); ?></textarea>
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select id="status" name="status" class="form-select">
                    <option value="1" <?= $expertise['status'] ? 'selected' : ''; ?>>Active</option>
                    <option value="0" <?= !$expertise['status'] ? 'selected' : ''; ?>>Inactive</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a class="btn btn-danger" href="<?php echo site_url('admin/expertise'); ?>">Back</a>
        </form>
    </div>
</div>
<?php $this->load->view('admin/layout/footer'); ?>
