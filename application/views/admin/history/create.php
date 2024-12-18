<?php $this->load->view('admin/layout/header'); ?>
<?php $this->load->view('admin/layout/sidebar'); ?>
<div class="content-body">
    <div class="container mt-4">
        <h1>Add New History Record</h1>
        <form method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="icon">Icon:</label>
                <input type="file" class="form-control-file" name="icon" id="icon" required>
            </div>
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" name="title" required>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea class="form-control" name="description" rows="4" required></textarea>
            </div>
            <div class="form-group">
                <label for="status">Status:</label>
                <select class="form-control" name="status" id="status" required>
                    <option value="active">Active</option>
                    <option value="inactive">Inactive</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Add Record</button>
        </form>
        <a href="<?= site_url('admin/history/index'); ?>" class="btn btn-secondary mt-3">Back to List</a>
    </div>
</div>
<?php $this->load->view('admin/layout/footer'); ?>