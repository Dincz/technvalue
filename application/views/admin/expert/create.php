<?php $this->load->view('admin/layout/header'); ?>
<?php $this->load->view('admin/layout/sidebar'); ?>

<div class="content-body">
    <div class="container mt-4">
        <h1 class="mb-4">Add New Expert</h1>
        <form action="<?= site_url('admin/expert/create'); ?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" class="form-control-file" id="image" name="image" required>
            </div>
            <div class="form-group">
                <label for="designation">Designation</label>
                <input type="text" class="form-control" id="designation" name="designation" required>
            </div>
            <div class="form-group">
                <label for="facebook_link">Facebook Link</label>
                <input type="url" class="form-control" id="facebook_link" name="facebook_link">
            </div>
            <div class="form-group">
                <label for="linkdln_link">LinkedIn Link</label>
                <input type="url" class="form-control" id="linkdln_link" name="linkdln_link">
            </div>
            <div class="form-group">
                <label for="twitter_link">Twitter Link</label>
                <input type="url" class="form-control" id="twitter_link" name="twitter_link">
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select class="form-control" id="status" name="status">
                    <option value="active">Active</option>
                    <option value="inactive">Inactive</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Add Expert</button>
            <a href="<?= site_url('admin/expert'); ?>" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>

<?php $this->load->view('admin/layout/footer'); ?>