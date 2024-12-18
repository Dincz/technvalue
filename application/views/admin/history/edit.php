<?php $this->load->view('admin/layout/header'); ?>
<?php $this->load->view('admin/layout/sidebar'); ?>
<div class="content-body">
    <div class="container mt-4">
        <h1>Edit History Record</h1>
        <form method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $history->id; ?>">
            <div class="form-group">
                <label for="icon">Icon:</label>
                <input type="file" class="form-control-file" name="icon" id="icon">
                <small>Leave blank to keep the current icon.</small>
                <br>
                <?php if ($history->icon): ?>
                    <img src="<?= base_url('uploads/icons/' . $history->icon); ?>" alt="Current Icon"
                        style="width: 100px; height: auto;">
                <?php endif; ?>
            </div>
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" name="title" value="<?= $history->title; ?>" required>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea class="form-control" name="description" rows="4"
                    required><?= $history->description; ?></textarea>
            </div>
            <div class="form-group">
                <label for="status">Status:</label>
                <select class="form-control" name="status" id="status" required>
                    <option value="active" <?= ($history->status == 'active') ? 'selected' : ''; ?>>Active</option>
                    <option value="inactive" <?= ($history->status == 'inactive') ? 'selected' : ''; ?>>Inactive</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update history</button>
        </form>
        <a href="<?= site_url('admin/history/index'); ?>" class="btn btn-secondary mt-3">Back to List</a>
    </div>
</div>
<?php $this->load->view('admin/layout/footer'); ?>