<?php $this->load->view('admin/layout/header'); ?>
<?php $this->load->view('admin/layout/sidebar'); ?>

<div class="content-body">
    <div class="container">
        <h1>Add Expertise</h1>
        <form method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="icon" class="form-label">Icon</label><br>
                <input type="file" id="icon" name="icon"  required>
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" id="title" name="title" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea id="description" name="description" class="form-control" required></textarea>
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select id="status" name="status" class="form-select">
                    <option value="1">Active</option>
                    <option value="0">Inactive</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
            <a class="btn btn-danger" href="<?php echo site_url('admin/expertise'); ?>">Back</a>
        </form>
    </div>
</div>
<?php $this->load->view('admin/layout/footer'); ?>
