<!-- Include Header and Sidebar -->
<?php $this->load->view('admin/layout/header'); ?>
<?php $this->load->view('admin/layout/sidebar'); ?>

<div class="content-body">
    <h1 class="mb-4">Home Section</h1>

    <?php if (!empty($home_data)): ?>
        <?php foreach ($home_data as $item): ?>
            <div class="card mb-3">
                <div class="card-header">
                    <strong>Home Item</strong>
                    <a href="<?php echo site_url('admin/home/edit/' . $item['h_id']); ?>" class="btn btn-warning btn-sm float-end">Edit</a>
                </div>

                <div class="card-body">
                <img src="<?php echo base_url('uploads/' . $item['image']); ?>" alt="Hero Banner" class="img-fluid mb-3" style="max-width: 100%; height: auto;">
                <img src="<?php echo base_url('uploads/' . $item['image_2']); ?>" alt="Additional Image 2" class="img-fluid mb-3" style="max-width: 100%; height: auto;">
                <img src="<?php echo base_url('uploads/' . $item['image_3']); ?>" alt="Additional Image 3" class="img-fluid mb-3" style="max-width: 100%; height: auto;">
    <p><?php echo htmlspecialchars($item['text']); ?></p>
    <p><strong>Status:</strong> <?php echo htmlspecialchars($item['status']); ?></p>
    <p><strong>Created Date:</strong> <?php echo date('Y-m-d H:i:s', strtotime($item['created_date'])); ?></p>
</div>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p>No data found.</p>
    <?php endif; ?>
</div>

<!-- Include Footer -->
<?php $this->load->view('admin/layout/footer'); ?>
