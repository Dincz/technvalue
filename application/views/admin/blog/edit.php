<?php $this->load->view('admin/layout/header'); ?>
<?php $this->load->view('admin/layout/sidebar'); ?>

<div class="content-body container mt-5">
    <h1 class="mb-4">Edit Blog Post: <?= htmlspecialchars($blog['title']); ?></h1>
    <form method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text" name="title" class="form-control" value="<?= htmlspecialchars($blog['title']); ?>"
                required>
        </div>

        <div class="mb-3">
            <label class="form-label">Card Image</label><br>
            <?php if (!empty($blog['blog_small_image'])): ?>
                <img src="<?= base_url('uploads/blog/'.$blog['blog_small_image']); ?>" alt="Card Image"
                    style="max-width: 200px; max-height: 150px; display: block; margin-bottom: 10px;">
            <?php endif; ?>
            <input type="file" name="blog_small_image">
        </div>

        <div class="mb-3">
            <label class="form-label">Section Image</label><br>
            <?php if (!empty($blog['blog_big_image'])): ?>
                <img src="<?= base_url('uploads/blog/'.$blog['blog_big_image']); ?>" alt="Section Image"
                    style="max-width: 200px; max-height: 150px; display: block; margin-bottom: 10px;">
            <?php endif; ?>
            <input type="file" name="blog_big_image">
        </div>

        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea id="content" name="description" class="form-control"
                required><?= htmlspecialchars($blog['description']); ?></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Posted By</label>
            <input type="text" name="posted_by" class="form-control"
                value="<?= htmlspecialchars($blog['posted_by']); ?>" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Date</label>
            <input type="date" name="date" class="form-control" value="<?= htmlspecialchars($blog['date']); ?>"
                required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="<?= site_url('admin/blog') ?>" class="btn btn-secondary">Cancel</a>
    </form>
</div>

<?php $this->load->view('admin/layout/footer'); ?>



<script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    let editor;

    ClassicEditor
        .create(document.querySelector('#content'))
        .then(newEditor => {
            editor = newEditor;
        })
        .catch(error => {
            console.error(error);
        });
</script>