<?php $this->load->view('admin/layout/header'); ?>
<?php $this->load->view('admin/layout/sidebar'); ?>

<div class="content-body">
    <h1>Create Blog Post</h1>
    <form method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="blog_small_image" class="form-label">Card Image</label><br>
            <input type="file" name="blog_small_image" id="blog_small_image" class="form-control">
        </div>

        <div class="mb-3">
            <label for="blog_big_image" class="form-label">Section Image</label><br>
            <input type="file" name="blog_big_image" id="blog_big_image"  required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea id="content" name="description" id="description" class="form-control" required></textarea>
        </div>

        <div class="mb-3">
            <label for="posted_by" class="form-label">Posted By</label>
            <input type="text" name="posted_by" id="posted_by" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="facebook_link" class="form-label">Facebook Link</label>
            <input type="text" name="facebook_link" id="facebook_link" class="form-control">
        </div>

        <div class="mb-3">
            <label for="instagram_link" class="form-label">Instagram Link</label>
            <input type="text" name="instagram_link" id="instagram_link" class="form-control">
        </div>

        <div class="mb-3">
            <label for="linkdln_link" class="form-label">LinkedIn Link</label>
            <input type="text" name="linkdln_link" id="linkdln_link" class="form-control">
        </div>

        <div class="mb-3">
            <label for="twitter_link" class="form-label">Twitter Link</label>
            <input type="text" name="twitter_link" id="twitter_link" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Create</button>
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