<?php $this->load->view('admin/layout/header'); ?>
<?php $this->load->view('admin/layout/sidebar'); ?>

<div class="content-body">
    <div class="container">
        <h1 class="mb-4">Technical Updates</h1>
        <a href="<?php echo site_url('admin/technovalue/create'); ?>" class="btn btn-primary mb-3">Add New Update</a>

        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
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
                <?php if (!empty($technical_updates)): ?>
                    <?php foreach ($technical_updates as $index => $update): ?>
                        <tr>
                            <td><?php echo $index + 1; ?></td>
                            <td><?php echo htmlspecialchars($update['u_title']); ?></td>
                            <td>
                                <img src="<?php echo base_url('uploads/icons/'.$update['u_image']); ?>"
                                   width="100" height="100" alt="No Image Found <?php echo $update['u_id']; ?>">
                            </td>
                            <td><?php echo htmlspecialchars($update['u_description']); ?></td>
                            <td><?php echo $update['status'] ? 'Active' : 'Inactive'; ?></td>
                            <td>
                                <a href="<?php echo site_url('admin/technovalue/edit/' . $update['u_id']); ?>"
                                    class="btn btn-warning btn-sm">Edit</a>
                                <a href="<?php echo site_url('admin/technovalue/delete/' . $update['u_id']); ?>"
                                    class="btn btn-danger btn-sm"
                                    onclick="return confirm('Are you sure you want to delete this update?');">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="6" class="text-center">No updates available.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
<?php $this->load->view('admin/layout/footer'); ?>