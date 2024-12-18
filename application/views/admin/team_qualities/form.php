

<?php
$this->load->view('admin/layout/header');
$this->load->view('admin/layout/sidebar');
?>

<div class="content-body">
            <!-- Alerts -->
            <?php if ($this->session->flashdata('success')): ?>
            <div class="alert alert-success">
                <?php echo $this->session->flashdata('success'); ?>
            </div>
        <?php endif; ?>
        <?php if ($this->session->flashdata('error')): ?>
            <div class="alert alert-danger">
                <?php echo $this->session->flashdata('error'); ?>
            </div>
        <?php endif; ?>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"><?php echo isset($quality) ? 'Edit' : 'Add'; ?> Team Quality</h3>
                </div>
                <div class="card-body">
                    <form action="<?php echo current_url(); ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title" 
                                   value="<?php echo isset($quality) ? $quality->title : ''; ?>" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" id="description" name="description" rows="3" required><?php echo isset($quality) ? $quality->description : ''; ?></textarea>
                        </div>
                        
                        <div class="form-group">
                            <label for="icon">Icon</label>
                            <?php if (isset($quality) && $quality->icon): ?>
                                <div class="mb-2">
                                    <img src="<?php echo base_url('uploads/career/' . $quality->icon); ?>" alt="Current Icon" style="max-width: 100px;">
                                </div>
                            <?php endif; ?>
                            <input type="file" class="form-control" id="icon" name="icon" <?php echo isset($quality) ? '' : 'required'; ?>>
                            <small class="text-muted">Allowed types: gif, jpg, png, svg. Max size: 2MB</small>
                        </div>
                        
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select class="form-control" id="status" name="status" required>
                                <option value="active" <?php echo (isset($quality) && $quality->status == 'active') ? 'selected' : ''; ?>>Active</option>
                                <option value="inactive" <?php echo (isset($quality) && $quality->status == 'inactive') ? 'selected' : ''; ?>>Inactive</option>
                            </select>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Save</button>
                        <a href="<?php echo base_url('admin/team-qualities'); ?>" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<?php $this->load->view('admin/layout/footer'); ?>
