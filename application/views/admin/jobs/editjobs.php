<?php
$this->load->view('admin/layout/header');
$this->load->view('admin/layout/sidebar');
?>
// application/views/jobs/edit.php

<div class="content-body">     
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Job</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-5">
        <h2 class="mb-4">Edit Job</h2>
        
        <?php echo form_open_multipart('admin/jobs/edit/' . $job->id); ?>
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="<?php echo set_value('title', $job->title); ?>" required>
            </div>
            
            <div class="form-group">
                <label for="department">Department</label>
                <input type="text" class="form-control" id="department" name="department" value="<?php echo set_value('department', $job->department); ?>" required>
            </div>
            
            <div class="form-group">
                <label for="location">Location</label>
                <input type="text" class="form-control" id="location" name="location" value="<?php echo set_value('location', $job->location); ?>" required>
            </div>
            
            <div class="form-group">
                <label for="responsibilities">Responsibilities</label>
                <textarea class="form-control" id="responsibilities" name="responsibilities" rows="5" required><?php echo set_value('responsibilities', $job->responsibilities); ?></textarea>
            </div>
            
            <div class="form-group">
                <label for="experience">Experience</label>
                <input type="text" class="form-control" id="experience" name="experience" value="<?php echo set_value('experience', $job->experience); ?>" required>
            </div>
            
            <div class="form-group">
                <label for="qualification">Qualification</label>
                <input type="text" class="form-control" id="qualification" name="qualification" value="<?php echo set_value('qualification', $job->qualification); ?>" required>
            </div>
            
            <div class="form-group">
                <label for="page_name">Page Name</label>
                <input type="text" class="form-control" id="page_name" name="page_name" value="<?php echo set_value('page_name', $job->page_name); ?>" required>
            </div>
            
            <div class="form-group">
                <label for="image">Image</label>
                <?php if ($job->image_url): ?>
                    <div class="mb-2">
                        <img src="<?php echo base_url('uploads/career/' . $job->image_url); ?>" alt="Current Image" style="max-width: 200px;">
                    </div>
                <?php endif; ?>
                <input type="file" class="form-control-file" id="image" name="image">
            </div>
            
            <button type="submit" class="btn btn-primary">Update Job</button>
            <a href="<?php echo base_url('admin/jobs'); ?>" class="btn btn-secondary">Cancel</a>
        <?php echo form_close(); ?>
    </div>
</body>
</html>
</div>
<!--**********************************Content body End***********************************-->
<!--**********************************footer Start***********************************-->
<?php $this->load->view('admin/layout/footer'); ?>
<!--**********************************footer End***********************************-->