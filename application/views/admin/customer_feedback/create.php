<?php $this->load->view('admin/layout/header'); ?>
<?php $this->load->view('admin/layout/sidebar'); ?>
<div class="content-body">
    <div class="container mt-4">
        <h1>Add Customer Feedback</h1>
        <form method="POST">
            <div class="form-group">
                <label for="feedback">Feedback:</label>
                <textarea class="form-control" name="feedback" rows="4" required></textarea>
            </div>
            <div class="form-group">
                <label for="customer_name">Customer Name:</label>
                <input type="text" class="form-control" name="customer_name" required>
            </div>
            <div class="form-group">
                <label for="customer_designation">Customer Designation:</label>
                <input type="text" class="form-control" name="customer_designation" required>
            </div>
            <div class="form-group">
                <label for="status">Status:</label>
                <select class="form-control" name="status" required>
                    <option value="active">Active</option>
                    <option value="inactive">Inactive</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Add Feedback</button>
        </form>
        <a href="<?= site_url('admin/customer_feedback/index'); ?>" class="btn btn-secondary mt-3">Back to List</a>
    </div>
</div>
<?php $this->load->view('admin/layout/footer'); ?>