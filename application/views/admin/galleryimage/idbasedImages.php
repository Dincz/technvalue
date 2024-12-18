<!--**********************************Header & sidebar start***********************************-->
<?php
$this->load->view('admin/layout/header');
$this->load->view('admin/layout/sidebar');

// echo $page_id . '===';
?>
<!--**********************************Header & sidebar end***********************************-->
<!--**********************************Content body start****************************-->
<div class="content-body">
    <div class="row mb-4">
        <div class="col-md-6">
            <h2>Gallery Images</h2>
               <!-- Alerts -->
        <?php if ($this->session->flashdata('success')): ?>
            <div class="alert alert-success">
                <?php echo $this->session->flashdata('success'); ?>
            </div>
        <?php endif; ?>
        <?php if ($this->session->flashdata('error')): ?>
            <div class="alert alert-danger">
                <?php echo $this->session->flashdata('error'); ?>
            </div>
        <?php endif; ?>


        </div>
        <div class="col-md-6 text-right">
            <div class="mb-3">
                <button class="btn btn-primary" data-toggle="modal" data-target="#addModal">+ Add New</button>
            </div>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($images)): ?>
                    <?php
                    foreach ($images as $image): ?>
                        <tr>
                            <td><?php echo $image['id']; ?></td>
                            <td>
                                <img src="<?php echo base_url('uploads/gallery/' . $image['images']); ?>"
                                    alt="Gallery Image"
                                    class="img-thumbnail"
                                    style="max-width: 100px;">
                            </td>
                            <td>
                                <a href="<?php echo base_url() . 'admin/GalleryImageController/delete/' . $image['id'] . '/' . $page_id; ?>">
                                    <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure!')" data-id="<?php echo $image['id']; ?>">
                                        Delete
                                    </button>
                                </a>


                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="4" class="text-center">No images found</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>





<!-- Add Modal -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addModalLabel">Add Gallery Item</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" enctype="multipart/form-data"
                action="<?php echo base_url('admin/GalleryImageController/add_new_image'); ?>">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Upload Image</label>
                        <input type="file" name="image" required class="form-control">
                    </div>
                </div>
                <input type="hidden" name="category_id" value="<?php echo $page_id; ?>">

                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Add</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!--**********************************Content body End***********************************-->
<!--**********************************footer Start***********************************-->
<?php $this->load->view('admin/layout/footer'); ?>
<!--**********************************footer End***********************************-->