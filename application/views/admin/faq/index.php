<?php $this->load->view('admin/layout/header'); ?>
<?php $this->load->view('admin/layout/sidebar'); ?>

<div class="content-body container my-5">
    <h1 class="mb-4">FAQs</h1>
    <a href="<?php echo site_url('admin/faq/create'); ?>" class="btn btn-primary mb-3">Add FAQ</a>
    <table class="table table-bordered">
        <thead class="table-light">
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
             foreach ($faqs as $faq): ?>
                <tr>
                    <td><?= $count++; ?></td>
                    <td><?php echo $faq->faq_question; ?></td>
                    <td><?php echo $faq->faq_answer; ?></td>
                    <td><?php echo $faq->status ? 'Active' : 'Inactive'; ?></td>
                    <td>
                        <a href="<?php echo site_url('admin/faq/edit/' . $faq->faq_id); ?>" class="btn btn-warning my-2">Edit</a>
                        <a href="<?php echo site_url('admin/faq/delete/' . $faq->faq_id); ?>" class="btn btn-danger ms-2"
                            onclick="return confirm('Are you sure you want to delete this FAQ?');">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php $this->load->view('admin/layout/footer'); ?>