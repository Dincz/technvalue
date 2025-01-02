<?php $this->load->view('admin/layout/header'); ?>
<?php $this->load->view('admin/layout/sidebar'); ?>
<div class="content-body">

    <div class="container mt-5">
        <h2>Add Service</h2>
        <?php if ($this->session->flashdata('error')): ?>
            <div class="alert alert-danger"><?php echo $this->session->flashdata('error'); ?></div>
        <?php endif; ?>

        <form method="post" enctype="multipart/form-data">

            <div class="form-group">
                <label for="service_title">Service Title:</label>
                <input type="text" name="service_title" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="service_image">Service Icon:</label>
                <input type="file" name="service_icon" class="form-control-file" required>
            </div>
            <div class="form-group">
                <label for="service_short_description">Short Description:</label>
                <textarea name="service_short_description" class="form-control" required></textarea>
            </div>
            <div class="form-group">
                <label for="service_full_description">Full Description:</label>
                <textarea id="content" name="service_full_description" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="seo_url">SEO Url:</label>
                <input id="content" name="seo_url"
                    value="<?php echo $service->seo_url; ?>" required class="form-control"></input>
            </div>
            <div class="form-group">
                <label for="service_image">Service Image:</label>
                <input type="file" name="service_image" class="form-control-file" required>
            </div>
            <div class="form-group">
                <label for="working_hours_mon_fri">Working Hours (Mon-Fri):</label>
                <input type="text" name="working_hours_mon_fri" class="form-control">
            </div>
            <div class="form-group">
                <label for="working_hours_sat">Working Hours (Sat):</label>
                <input type="text" name="working_hours_sat" class="form-control">
            </div>
            <div class="form-group">
                <label for="working_hours_sun">Working Hours (Sun):</label>
                <input type="text" name="working_hours_sun" class="form-control">
            </div>
            <div class="form-group">
                <label for="status">Status:</label>
                <select class="form-control" name="status" id="status">
                    <option value="1" selected>Active</option>
                    <option value="0">Inactive</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Add Service</button>
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