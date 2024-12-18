<?php $this->load->view('admin/layout/header'); ?>
<?php $this->load->view('admin/layout/sidebar'); ?>

<div class="content-body">
    <section class="section section-default mt-none mb-none">
        <div class="container">
            <h2 class="mb-sm text-center">Edit <strong>Partner</strong></h2>
            <form action="<?php echo site_url('admin/partners/edit/' . $partner->id); ?>" method="post"
                enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name">Partner Name</label>
                    <input type="text" name="name" class="form-control" value="<?php echo $partner->name; ?>" required>
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" name="image" class="form-control-file">
                    <img src="<?php echo base_url('uploads/gallery/' . $partner->image); ?>"
                        alt="<?php echo $partner->name; ?>" style="max-width: 100px;">
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <select name="status" class="form-control">
                        <option value="1" <?php echo ($partner->status == 1) ? 'selected' : ''; ?>>Active</option>
                        <option value="0" <?php echo ($partner->status == 0) ? 'selected' : ''; ?>>Inactive</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Update Partner</button>
                <a href="<?php echo site_url('admin/partners'); ?>" class="btn btn-warning">Back</a>
            </form>
        </div>
    </section>
</div>
<?php $this->load->view('admin/layout/footer'); ?>