<?php $this->load->view('admin/layout/header'); ?>
<?php $this->load->view('admin/layout/sidebar'); ?>

<div class="content-body">
    <h1>What's New</h1>
    <a href="<?= site_url('admin/whatsnew/create'); ?>" class="btn btn-primary">Add New Item</a>

    <table class="table table-bordered mt-4">
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Image</th>
                <th>Description</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($whats_new as $index => $item): ?>
                <tr>
                    <td><?= $index + 1; ?></td>
                    <td><?= htmlspecialchars($item['w_title']); ?></td>
                    <td>
                        <?php if (!empty($item['w_image'])): ?>
                            <img src="<?= base_url('uploads/services/' . $item['w_image']); ?>" style="max-width: 100px;">
                        <?php endif; ?>
                    </td>
                    <td><?= htmlspecialchars($item['w_description']); ?></td>
                    <td><?= $item['status'] ? 'Active' : 'Inactive'; ?></td>
                    <td>
                        <a href="<?= site_url('admin/whatsnew/edit/' . $item['w_id']); ?>" class="btn btn-warning">Edit</a>
                        <a href="<?= site_url('admin/whatsnew/delete/' . $item['w_id']); ?>" onclick="return confirm('Are you sure?');" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php $this->load->view('admin/layout/footer'); ?>
