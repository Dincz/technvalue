<?php $this->load->view('admin/layout/header'); ?>
<?php $this->load->view('admin/layout/sidebar'); ?>

<div class="content-body">
    <h1>Create New Item</h1>
    <form method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="w_image" class="form-label">Image</label><br>
            <input type="file" name="w_image" id="w_image" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea id="description" name="description" class="form-control" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Create</button>
        <a href="<?= site_url('admin/whatsnew') ?>" class="btn btn-secondary">Cancel</a>
    </form>
</div>

<?php $this->load->view('admin/layout/footer'); ?>