<?php $this->load->view('admin/layout/header'); ?>
<?php $this->load->view('admin/layout/sidebar'); ?>

<div class="content-body">
    <div class="container">
        <h1>Expertise Section</h1>
        <a href="<?php echo site_url('admin/expertise/create'); ?>" class="btn btn-primary mb-3">Add Expertise</a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Sr No.</th>
                    <th>Icon</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $serial = 1; // Initialize serial number ?>
                <?php foreach ($expertise as $item): ?>
                    <tr>
                        <td><?= $serial++; // Increment serial number ?></td>
                        <td>
                            <img src="<?= base_url('uploads/icons/') . $item['icon']; ?>" alt="Icon"
                                style="width: 50px; height: 50px;">
                        </td>
                        <td><?= htmlspecialchars($item['title']); ?></td>
                        <td><?= htmlspecialchars($item['description']); ?></td>
                        <td><?= $item['status'] ? 'Active' : 'Inactive'; ?></td>
                        <td>
                            <a href="<?php echo site_url('admin/expertise/edit/' . $item['id']); ?>"
                                class="btn btn-warning my-2">Edit</a>
                            <a href="<?php echo site_url('admin/expertise/delete/' . $item['id']); ?>"
                                class="btn btn-danger" onclick="return confirm('Are you sure?');">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?php $this->load->view('admin/layout/footer'); ?>