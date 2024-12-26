<?php $this->load->view('admin/layout/header'); ?>
<?php $this->load->view('admin/layout/sidebar'); ?>

<div class="content-body">
    <h1>Edit "What's New" Item</h1>
    <form method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control" value="<?= htmlspecialchars($whats_new['w_title']); ?>" required>
        </div>

        <div class="mb-3">
            <label for="w_image" class="form-label">Image</label><br>
            <?php if (!empty($whats_new['w_image'])): ?>
                <img src="<?= base_url('uploads/whats_new/' . $whats_new['w_image']); ?>" alt="Image" style="max-width: 200px; max-height: 150px; display: block; margin-bottom: 10px;">
            <?php endif; ?>
            <input type="file" name="w_image" id="w_image">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" id="description" class="form-control" required><?= htmlspecialchars($whats_new['w_description']); ?></textarea>
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select name="status" id="status" class="form-control">
                <option value="1" <?= $whats_new['status'] == 1 ? 'selected' : ''; ?>>Active</option>
                <option value="0" <?= $whats_new['status'] == 0 ? 'selected' : ''; ?>>Inactive</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="<?= site_url('admin/whatsnew') ?>" class="btn btn-secondary">Cancel</a>
    </form>
</div>

<?php $this->load->view('admin/layout/footer'); ?>

<script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create(document.querySelector('#description'))
        .catch(error => {
            console.error(error);
        });
</script>
