<?php $this->load->view('admin/layout/header'); ?>
<?php $this->load->view('admin/layout/sidebar'); ?>

<div class="content-body">
    <section class="vs-blog-wrapper space-top space-extra-bottom">
        <div class="container">
            <h1>Edit Banner</h1>
            <form  method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="image">Image :</label>
                    <input type="file" id="image" name="image" class="form-control-file"
                        value="<?php echo htmlspecialchars($banner['image']); ?>" required>
                </div>
                <div class="mb-3">
                    <label for="page_name">Page Name:</label>
                    <input type="text" id="page_name" name="page_name" class="form-control"
                        value="<?php echo htmlspecialchars($banner['page_name']); ?>" required>
                </div>
                <div class="mb-3">
                    <label for="status">Status:</label>
                    <select id="status" name="status" class="form-select">
                        <option value="1" <?php echo $banner['status'] ? 'selected' : ''; ?>>Active</option>
                        <option value="0" <?php echo !$banner['status'] ? 'selected' : ''; ?>>Inactive</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Update Banner</button>
            </form>
            <div class="mt-3">
                <a href="<?php echo site_url('admin/banner'); ?>" class="btn btn-secondary">Back to Banners</a>
            </div>
        </div>
    </section>
</div>

<?php $this->load->view('admin/layout/footer'); ?>