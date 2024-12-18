<?php $this->load->view('admin/layout/header'); ?>
<?php $this->load->view('admin/layout/sidebar'); ?>

<div class="content-body">
    <div class="container">
        <h1>Add Question</h1>
        <form method="post">
            <div class="mb-3">
                <label for="question" class="form-label">Question</label>
                <textarea id="question" name="question" class="form-control" required></textarea>
            </div>
            <div class="mb-3">
                <label for="answer" class="form-label">Answer</label>
                <textarea id="answer" name="answer" class="form-control" required></textarea>
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select id="status" name="status" class="form-select">
                    <option value="1">Active</option>
                    <option value="0">Inactive</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
            <a class="btn btn-danger" href="<?php echo site_url('admin/chooseus'); ?>">Back</a>
        </form>
    </div>

</div>
<?php $this->load->view('admin/layout/footer'); ?>
