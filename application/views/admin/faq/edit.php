<?php $this->load->view('admin/layout/header'); ?>
<?php $this->load->view('admin/layout/sidebar'); ?>

<div class="content-body container my-5">
    <h1 class="mb-4">Edit FAQ</h1>
    <form method="post" class="m-3">
        <div class="mb-3">
            <label for="faq_question" class="form-label">Question:</label>
            <textarea id="faq_question" name="faq_question" class="form-control" rows="4"
                required><?php echo $faq->faq_question; ?></textarea>
        </div>
        <div class="mb-3">
            <label for="faq_answer" class="form-label">Answer:</label>
            <textarea id="faq_answer" name="faq_answer" class="form-control" rows="4"
                required><?php echo $faq->faq_answer; ?></textarea>
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status:</label>
            <select id="status" name="status" class="form-select">
                <option value="1" <?php echo $faq->status ? 'selected' : ''; ?>>Active</option>
                <option value="0" <?php echo !$faq->status ? 'selected' : ''; ?>>Inactive</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a class="btn btn-danger ms-3" href="<?php echo site_url('admin/faq'); ?>">Back to FAQs</a>
    </form>
</div>




<?php $this->load->view('admin/layout/footer'); ?>