<?php $this->load->view('admin/layout/header'); ?>
<?php $this->load->view('admin/layout/sidebar'); ?>

<div class="content-body">
    <section class="vs-blog-wrapper space-top space-extra-bottom">
        <div class="container">
            <h1>Blog Posts</h1>

            <!-- Add Blog Button -->
            <div class="mb-3">
                <a href="<?= base_url('admin/blog/create'); ?>" class="btn btn-primary">Add Blog</a>
            </div>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Sr No.</th>
                        <th>Title</th>
                        <th>Date</th>
                        <th>Posted By</th>
                        <th>Active</th> <!-- New Active column -->
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $count = 1;
                    foreach ($blog as $item): ?>
                        <tr>
                            <td><?= $count++; ?></td>
                            <td>
                                <a href="<?= base_url('blog/details/' . $item['id']); ?>">
                                    <?= htmlspecialchars($item['title']); ?>
                                </a>
                            </td>
                            <td><?= htmlspecialchars($item['date']); ?></td>
                            <td><?= htmlspecialchars($item['posted_by']); ?></td>
                            <td><?= $item['status'] ? 'Active' : 'Inactive'; ?></td> <!-- Display Active status -->
                            <td>
                                <a href="<?= base_url('admin/blog/edit/' . $item['id']); ?>"
                                    class="btn btn-warning">Edit</a>
                                <a href="<?= base_url('admin/blog/delete/' . $item['id']); ?>"
                                    onclick="return confirm('Are you sure?');" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </section>
</div>

<?php $this->load->view('admin/layout/footer'); ?>