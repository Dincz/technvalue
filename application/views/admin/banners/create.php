<?php $this->load->view('admin/layout/header'); ?>
<?php $this->load->view('admin/layout/sidebar'); ?>
<div class="content-body">
    <h1>Add New Banner</h1>
    <form method="POST" enctype="multipart/form-data">
        <label for="image">Image:</label>
        <input type="file" id="image" name="image" required>
        <br>
        <label for="page_name">Page Name:</label>
        <input type="text" id="page_name" name="page_name" required>
        <br>
        <label for="status">Status:</label>
        <select id="status" name="status">
            <option value="1">Active</option>
            <option value="0">Inactive</option>
        </select>
        <br>
        <button type="submit">Add Banner</button>
    </form>
    <a href="<?php echo site_url('banner'); ?>">Back to Banners</a>
</div>
<?php $this->load->view('admin/layout/footer'); ?>