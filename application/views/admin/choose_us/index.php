<?php $this->load->view('admin/layout/header'); ?>
<?php $this->load->view('admin/layout/sidebar'); ?>
<div class="content-body">
    <div class="container">
        <h1>Choose Us Section</h1>
        <a href="<?php echo site_url('admin/chooseus/create'); ?>" class="btn btn-primary">Add Question</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Sr No.</th>
                    <th>Question</th>
                    <th>Answer</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $count = 1;
                foreach ($chooseUs as $item): ?>
                    <tr>
                        <td><?= $count++; ?></td>
                        <td><?= htmlspecialchars($item['question']); ?></td>
                        <td><?= htmlspecialchars($item['answer']); ?></td>
                        <td><?= $item['status'] ? 'Active' : 'Inactive'; ?></td>
                        <td>
                            <a href="<?php echo site_url('admin/chooseus/edit/' . $item['id']); ?>"
                                class="btn btn-warning">Edit</a>
                            <a href="<?php echo site_url('admin/chooseus/delete/' . $item['id']); ?>" class="btn btn-danger"
                                onclick="return confirm('Are you sure?');">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<?php $this->load->view('admin/layout/footer'); ?>