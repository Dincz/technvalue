<?php $this->load->view('admin/layout/header'); ?>
<?php $this->load->view('admin/layout/sidebar'); ?>

<div class="content-body">
    <div class="container mt-5">
        <h2>Edit Service</h2>
        <?php if ($this->session->flashdata('error')): ?>
            <div class="alert alert-danger"><?php echo $this->session->flashdata('error'); ?></div>
        <?php endif; ?>

        <form method="post" enctype="multipart/form-data">

            <div class="form-group">
                <label for="service_title">Service Title:</label>
                <input type="text" name="service_title" class="form-control"
                    value="<?php echo $service->service_title; ?>" required>
            </div>
            <div class="form-group">
                <label for="service_image">Service Icon:</label>
                <input type="file" name="service_icon" class="form-control-file">
                <img src="<?php echo base_url('uploads/icons/' . $service->service_icon); ?>" width="100"
                    class="mt-2" />
            </div>
            <div class="form-group">
                <label for="service_short_description">Short Description:</label>
                <textarea name="service_short_description" class="form-control"
                    required><?php echo $service->service_short_description; ?></textarea>
            </div>
            <div class="form-group">
                <label for="service_full_description">Full Description:</label>
                <textarea id="content" style="height:150px;" name="service_full_description"
                    class="form-control"><?php echo $service->service_full_description; ?></textarea>

            </div>
            <div class="form-group">
                <label for="seo_url">SEO Url:</label>
                <input id="content" name="seo_url"
                    value="<?php echo $service->seo_url; ?>" required class="form-control"></input>
            </div>

            <div class="form-group">
                <label for="service_image">Service Image:</label>
                <input type="file" name="service_image" class="form-control-file">
                <img src="<?php echo base_url('uploads/services/' . $service->service_image); ?>" width="100"
                    class="mt-2" />
            </div>
            <div class="form-group">
                <label for="working_hours_mon_fri">Working Hours (Mon-Fri):</label>
                <input type="text" name="working_hours_mon_fri" class="form-control"
                    value="<?php echo $service->working_hours_mon_fri; ?>">
            </div>
            <div class="form-group">
                <label for="working_hours_sat">Working Hours (Sat):</label>
                <input type="text" name="working_hours_sat" class="form-control"
                    value="<?php echo $service->working_hours_sat; ?>">
            </div>
            <div class="form-group">
                <label for="working_hours_sun">Working Hours (Sun):</label>
                <input type="text" name="working_hours_sun" class="form-control"
                    value="<?php echo $service->working_hours_sun; ?>">
            </div>
            <div class="form-group">
                <label for="status" class="form-label">Status</label>
                <select id="status" name="status" class="form-control">
                    <option value="1" <?= $service->status ? 'selected' : ''; ?>>Active</option>
                    <option value="0" <?= !$service->status ? 'selected' : ''; ?>>Inactive</option>
                </select>
            </div>
            <button type="submit" class="btn btn-warning">Update Service</button>
            <a href="<?php echo site_url('admin/service'); ?>" class="btn btn-secondary">Back</a>
        </form>
    </div>

</div>
<?php $this->load->view('admin/layout/footer'); ?>



<script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    let editor;

    ClassicEditor
        .create(document.querySelector('#content'))
        .then(newEditor => {
            editor = newEditor;
        })
        .catch(error => {
            console.error(error);
        });
</script>