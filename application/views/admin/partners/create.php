<?php $this->load->view('admin/layout/header'); ?>
<?php $this->load->view('admin/layout/sidebar'); ?>

<div class="content-body">
    <section class="section section-default mt-none mb-none">
        <div class="container">
            <h2 class="mb-sm text-center">Add <strong>Partner</strong></h2>
            <form action="<?php echo site_url('admin/partners/create'); ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name">Partner Name</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" name="image" class="form-control-file" required>
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <select name="status" class="form-control">
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-success">Add Partner</button>
            </form>
        </div>
    </section>
</div>
<?php $this->load->view('admin/layout/footer'); ?>
