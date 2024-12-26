<?php $this->load->view('admin/layout/header'); ?>
<?php $this->load->view('admin/layout/sidebar'); ?>

<div class="content-body">
    <h1>Technovalue Updates</h1>
    <a href="<?= site_url('admin/technovalueupdates/create'); ?>" class="btn btn-primary mb-3">Add Update</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Images</th>
                <th>Status</th>
                <th>Created Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($updates as $index => $update): ?>
                <tr>
                    <td><?= $index + 1; ?></td>
                    <td><?= htmlspecialchars($update['u_title']); ?></td>
                    <td>
                        <?php if (!empty($update['u_image'])): ?>
                            <img src="<?= base_url('uploads/services/' . $update['u_image']); ?>" style="max-width: 100px;">
                        <?php endif; ?>
                    </td>
                    <td><?= $update['status'] ? 'Active' : 'Inactive'; ?></td>
                    <td><?= $update['created_date']; ?></td>
                    <td>
                        <a href="<?= site_url('admin/technovalueupdates/edit/' . $update['u_id']); ?>"
                            class="btn btn-warning">Edit</a>
                        <a href="<?= site_url('admin/technovalueupdates/delete/' . $update['u_id']); ?>"
                            class="btn btn-danger" onclick="return confirm('Are you sure?');">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php $this->load->view('admin/layout/footer'); ?>