<?php $this->load->view('admin/layout/header'); ?>
<?php $this->load->view('admin/layout/sidebar'); ?>

<div class="content-body">
    <div class="container mt-4">
        <h1>Edit Update</h1>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="u_title">Title:</label>
                <input type="text" class="form-control" name="u_title"
                    value="<?php echo htmlspecialchars($update['u_title']); ?>" required>
            </div>

            <div class="form-group">
                <label for="u_image">Image:</label>
                <input type="file" class="form-control-file" name="u_image">
                <p class="mt-2">Current Image: <img
                        src="<?php echo base_url('uploads/icons' . $update['u_image']); ?>" alt="Current Image"
                        class="img-thumbnail" style="max-width: 150px;"></p>
            </div>

            <div class="form-group">
                <label for="u_description">Description:</label>
                <textarea class="form-control" name="u_description"
                    required><?php echo htmlspecialchars($update['u_description']); ?></textarea>
            </div>

            <div class="form-group">
                <label for="status">Active:</label>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" name="status" <?php echo $update['status'] ? 'checked' : ''; ?>>
                    <label class="form-check-label" for="status">Check if active</label>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>

<?php $this->load->view('admin/layout/footer'); ?>