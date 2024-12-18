<?php $this->load->view('admin/layout/header'); ?>
<?php $this->load->view('admin/layout/sidebar'); ?>
<div class="content-body">
    <div class="container mt-5">
        <h3>Service Features</h3>
        <a href="<?= site_url('admin/service_features/create'); ?>" class="btn btn-primary mb-3">Add New Feature</a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Serial No.</th>
                    <th>Feature</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $serial = 1; ?>
                <?php foreach ($features as $feature): ?>
                    <tr>
                        <td><?= $serial++; ?></td>
                        <td><?= htmlspecialchars($feature['features']); ?></td>
                        <td><?= $feature['status'] ? 'Active' : 'Inactive'; ?></td>
                        <td>
                            <a href="<?= site_url('admin/service_features/edit/' . $feature['service_feature_id']); ?>"
                                class="btn btn-warning btn-sm">Edit</a>
                            <a href="<?= site_url('admin/service_features/delete/' . $feature['service_feature_id']); ?>"
                                class="btn btn-danger btn-sm"
                                onclick="return confirm('Are you sure you want to delete this feature?');">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?> 
            </tbody>
        </table>

    </div>
</div>
<?php $this->load->view('admin/layout/footer'); ?>