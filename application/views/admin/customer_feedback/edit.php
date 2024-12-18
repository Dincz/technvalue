<?php $this->load->view('admin/layout/header'); ?>
<?php $this->load->view('admin/layout/sidebar'); ?>
<div class="content-body">
    <div class="container mt-4">
        <h1>Edit Customer Feedback</h1>
        <form method="POST">
            <div class="form-group">
                <label for="feedback">Feedback:</label>
                <textarea class="form-control" name="feedback" rows="4" required><?= $feedback->feedback; ?></textarea>
            </div>
            <div class="form-group">
                <label for="customer_name">Customer Name:</label>
                <input type="text" class="form-control" name="customer_name" value="<?= $feedback->customer_name; ?>"
                    required>
            </div>
            <div class="form-group">
                <label for="customer_designation">Customer Designation:</label>
                <input type="text" class="form-control" name="customer_designation"
                    value="<?= $feedback->customer_designation; ?>" required>
            </div>
            <div class="form-group">
                <label for="status">Status:</label>
                <select class="form-control" name="status" required>
                <option value="1" <?php echo $feedback->status ? 'selected' : ''; ?>>Active</option>
                <option value="0" <?php echo !$feedback->status ? 'selected' : ''; ?>>Inactive</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update Feedback</button>
        </form>
        <a href="<?= site_url('admin/customer_feedback/index'); ?>" class="btn btn-secondary mt-3">Back to List</a>
    </div>
</div>
<?php $this->load->view('admin/layout/footer'); ?>