<?php $this->load->view('admin/layout/header'); ?>
<?php $this->load->view('admin/layout/sidebar'); ?>

<div class="content-body">
    <div class="container mt-5">
        <h3>Add New Feature</h3>
        <form method="post">
            <div class="form-group">
                <label for="features">Feature:</label>
                <input type="text" name="features" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="status">Status:</label>
                <select class="form-control" name="status" id="status">
                    <option value="1" selected>Active</option>
                    <option value="0">Inactive</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
            <a href="<?= site_url('admin/service_features'); ?>" class="btn btn-secondary">Cancel</a>
        </form>
    </div>

</div>
<?php $this->load->view('admin/layout/footer'); ?>