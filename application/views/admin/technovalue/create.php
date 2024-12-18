<?php $this->load->view('admin/layout/header'); ?>
<?php $this->load->view('admin/layout/sidebar'); ?>

<div class="content-body">
    <div class="container mt-4">
        <h1>Add New Update</h1>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="u_title">Title:</label>
                <input type="text" class="form-control" name="u_title" required>
            </div>

            <div class="form-group">
                <label for="u_image">Image:</label>
                <input type="file" class="form-control-file" name="u_image" required>
            </div>

            <div class="form-group">
                <label for="u_description">Description:</label>
                <textarea class="form-control" name="u_description" required></textarea>
            </div>

            <div class="form-group">
                <label for="status">Active:</label>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" name="status" checked>
                    <label class="form-check-label" for="status">Check if active</label>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Add Update</button>
        </form>
    </div>
</div>

<?php $this->load->view('admin/layout/footer'); ?>