<?php $this->load->view('admin/layout/header'); ?>
<?php $this->load->view('admin/layout/sidebar'); ?>

<div class="content-body">
    <div class="container">
        <h1 class="">Customer Feedback</h1>
        <a class="btn btn-primary mb-3" href="<?= site_url('admin/customer_feedback/create'); ?>">Add New Feedback</a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Sr No.</th>
                    <th>Customer Name</th>
                    <th>Feedback</th>
                    <th>Designation</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($customer_feedback)): ?>
                    <?php $count = 1;
                        foreach ($customer_feedback as $feedback): ?>
                        <tr>
                            <td><?= $count++; ?></td>
                            <td><?= htmlspecialchars($feedback['customer_name']); ?></td>
                            <td><?= htmlspecialchars($feedback['feedback']); ?></td>
                            <td><?= htmlspecialchars($feedback['customer_designation']); ?></td>
                            <td><?= htmlspecialchars($feedback['status']) ? 'Active' : 'Inactive'; ?></td>
                            <td>
                                <a class="btn btn-warning btn-sm my-2"
                                    href="<?= site_url('admin/customer_feedback/edit/' . $feedback['cus_id']); ?>">Edit</a>
                                <a class="btn btn-danger btn-sm"
                                    href="<?= site_url('admin/customer_feedback/delete/' . $feedback['cus_id']); ?>"
                                    onclick="return confirm('Are you sure you want to delete this feedback?');">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="5" class="text-center">No feedback available.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<?php $this->load->view('admin/layout/footer'); ?>