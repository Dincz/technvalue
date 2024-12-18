<?php $this->load->view('admin/layout/header'); ?>
<?php $this->load->view('admin/layout/sidebar'); ?>

<div class="content-body">
    <div class="container mt-5">
        <h3>Edit About Us Content</h3>
        <form method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="about_us_description">Description:</label>
                <textarea name="about_us_description" class="form-control" style="height: 150px"
                    required><?= $about['about_us_description']; ?></textarea>
            </div>
            <div class="form-group">
                <label for="about_us_image">About Us Image:</label>
                <input type="file" name="about_us_image" class="form-control-file my-3">
                <small>Current Image: <img class="mx-3" src="<?= base_url('uploads/about/') . $about['about_us_image']; ?>"
                        width="100"></small>
            </div>
            <div class="form-group">
                <label for="why_choose_us_image">Why Choose Us Image:</label>
                <input type="file" name="why_choose_us_image" class="form-control-file my-3">
                <small>Current Image: <img class="mx-3" src="<?= base_url('uploads/about/') . $about['why_choose_us_image']; ?>"
                        width="100"></small>
            </div>
            <div class="form-group">
                <label for="dod_video_link">Director's Video Link:</label>
                <input type="text" name="dod_video_link" class="form-control" value="<?= $about['dod_video_link']; ?>"
                    required>
            </div>
            <div class="form-group">
                <label for="dod_image">Director's Image:</label>
                <input type="file" name="dod_image" class="form-control-file my-3">
                <small>Current Image: <img class="mx-3" src="<?= base_url('uploads/about/') . $about['dod_image']; ?>"
                        width="100"></small>
            </div>
            <div class="form-group">
                <label for="dod_comment">Director's Comment:</label>
                <textarea name="dod_comment" class="form-control" style="height: 100px"
                    required><?= $about['dod_comment']; ?></textarea>
            </div>
            <div class="form-group">
                <label for="dod_name">Director's Name:</label>
                <input type="text" name="dod_name" class="form-control" value="<?= $about['dod_name']; ?>" required>
            </div>
            <div class="form-group">
                <label for="dod_designation">Director's Designation:</label>
                <input type="text" name="dod_designation" class="form-control" value="<?= $about['dod_designation']; ?>"
                    required>
            </div>
            <div class="form-group">
                <label for="dod_name_1">Director's Name 1:</label>
                <input type="text" name="dod_name_1" class="form-control" value="<?= $about['dod_name_1']; ?>" required>
            </div>
            <div class="form-group">
                <label for="dod_image_1">Director's Image 1:</label>
                <input type="file" name="dod_image_1" class="form-control-file my-3">
                <small>Current Image: <img class="mx-3" src="<?= base_url('uploads/about/') . $about['dod_image_1']; ?>"
                        width="100"></small>
            </div>
            <div class="form-group">
                <label for="dod_comment_1">Director's Comment 1:</label>
                <textarea name="dod_comment_1" class="form-control" style="height: 100px"
                    required><?= $about['dod_comment_1']; ?></textarea>
            </div>
            <div class="form-group">
                <label for="dod_designation_1">Director's Designation 1:</label>
                <input type="text" name="dod_designation_1" class="form-control"
                    value="<?= $about['dod_designation_1']; ?>" required>
            </div>
            <div class="form-group">
                <label for="vision">Vision:</label>
                <textarea name="vision" class="form-control" style="height: 100px"
                    required><?= $about['vision']; ?></textarea>
            </div>
            <div class="form-group">
                <label for="mission">Mission:</label>
                <textarea name="mission" class="form-control" style="height: 100px"
                    required><?= $about['mission']; ?></textarea>
            </div>
            <div class="form-group">
                <label for="value">Values:</label>
                <textarea name="value" class="form-control" style="height: 100px"
                    required><?= $about['value']; ?></textarea>
            </div>
            <button type="submit" class="btn btn-warning">Update</button>
            <a href="<?= site_url('admin/about_us'); ?>" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>
<?php $this->load->view('admin/layout/footer'); ?>