<!-- Include Header and Sidebar -->
<?php $this->load->view('admin/layout/header'); ?>
<?php $this->load->view('admin/layout/sidebar'); ?>

<div class="content-body">
    <h1 class="mb-4">Edit Home Item</h1>

    <?php if ($this->session->flashdata('error')): ?>
        <div class="alert alert-danger">
            <?php echo $this->session->flashdata('error'); ?>
        </div>
    <?php endif; ?>
    
    <?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success">
            <?php echo $this->session->flashdata('success'); ?>
        </div>
    <?php endif; ?>

    <form action="<?php echo site_url('admin/home/update'); ?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $home_item['h_id']; ?>">
        
        <div class="mb-3">
            <label for="text" class="form-label">Text:</label>
            <textarea name="text" class="form-control"><?php echo htmlspecialchars($home_item['text']); ?></textarea>
        </div>
        
        <div class="mb-3">
            <label for="status" class="form-label">Status:</label>
            <input type="text" name="status" class="form-control" value="<?php echo htmlspecialchars($home_item['status']); ?>">
        </div>
        
        <div class="mb-3">
            <label for="image" class="form-label">Image:</label>
            <img src="<?php echo base_url('uploads/' . $home_item['image']); ?>" alt="Current Image" class="img-fluid mb-3" style="max-width: 100%; height: auto;">
            <input type="file" name="image" class="form-control">
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image:</label>
            <img src="<?php echo base_url('uploads/' . $home_item['image_2']); ?>" alt="Current Image" class="img-fluid mb-3" style="max-width: 100%; height: auto;">
            <input type="file" name="image" class="form-control">
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image:</label>
            <img src="<?php echo base_url('uploads/' . $home_item['image_3']); ?>" alt="Current Image" class="img-fluid mb-3" style="max-width: 100%; height: auto;">
            <input type="file" name="image" class="form-control">
        </div>
  



        <button type="submit" class="btn btn-success">Update</button>
        <a href="<?php echo site_url('admin/home'); ?>" class="btn btn-secondary">Cancel</a>
    </form>
</div>

<!-- Include Footer -->
<?php $this->load->view('admin/layout/footer'); ?>
