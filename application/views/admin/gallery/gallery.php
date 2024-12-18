<!--**********************************Header & sidebar start***********************************-->
<?php
$this->load->view('admin/layout/header');
$this->load->view('admin/layout/sidebar');

?>
<!--**********************************Header & sidebar end***********************************-->
<!--**********************************Content body start****************************-->


<!-- id
id
background_image
title
status
see_more_link
 -->
<div class="content-body">

    <div class="container mt-4">
        <h1>Gallery Management</h1>

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

        <!-- Add New Button -->
        <div class="mb-3">
            <button class="btn btn-primary" data-toggle="modal" data-target="#addModal">+ Add New</button>
        </div>

        <!-- Gallery Table -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>background_image</th>
                    <th>title</th>
                    <th>Status</th>
                    <th>see_more_link</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $item): ?>
                    <tr>
                        <td><?php echo $item['id']; ?></td>
                        <td>
                            <img src="<?php echo base_url('uploads/gallery/' . $item['background_image']); ?>" width="100">
                        </td>

                        <td><?php echo $item['title']; ?></td>
                        <td><?php echo $item['status'] == 1 ? 'Active' : ($item['status'] == 0 ? 'Inactive' : 'Deleted'); ?>
                        </td>
                        <td><?php echo $item['see_more_link']; ?></td>


                        <td>
                            <!-- <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editModal"
                                data-id="<?php echo $item['id']; ?>" data-img-video="<?php echo $item['background_image']; ?>"
                                data-status="<?php echo $item['status']; ?>">
                                Edit
                            </button> -->
                            <a href="<?php echo base_url() ?>admin/gallery/edit/<?php echo $item['id']; ?>" class="btn btn-primary shadow btn-xs sharp mr-1">
                                <i class="fa fa-pencil"></i>
                            </a>
                            <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal"
                                data-id="<?php echo $item['id']; ?>">
                                Delete
                            </button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
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
                    action="<?php echo base_url('admin/gallery/create'); ?>">
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Upload Image</label>
                            <input type="file" name="image" required class="form-control">
                        </div>
                        <div class="form-group">
                            <label>title</label>
                            <input type="text" name="title" required class="form-control" placeholder="Enter title">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Add</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Edit Modal -->
    <!-- <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Gallery Item</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" enctype="multipart/form-data" action="<?php echo base_url('admin/gallery/edit/' . $item['id']); ?>">

                    <div class="modal-body">
                        <input type="hidden" name="id" id="editId" value="<?php echo $item['id']; ?>">

                        <div class="form-group">
                            <label>Upload Image</label>
                            <input type="file" name="image" class="form-control">
                            <div id="editPreview">
                                <?php if (!empty($item['image'])): ?>
                                    <img src="<?php echo base_url('uploads/gallery/' . $item['image']); ?>" alt="Current Image" width="100">
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" required class="form-control" placeholder="Enter title"
                                value="<?php echo $item['title']; ?>">
                        </div>

                        <div class="form-group">
                            <label>Status</label>
                            <select name="status" id="editStatus" class="form-control">
                                <option value="1" <?php echo ($item['status'] == 1) ? 'selected' : ''; ?>>Active</option>
                                <option value="0" <?php echo ($item['status'] == 0) ? 'selected' : ''; ?>>Inactive</option>
                            </select>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </form>


            </div>
        </div>
    </div> -->

    <!-- Delete Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Confirm Delete</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" action="<?php echo base_url('admin/gallery/delete/' . $item['id']); ?>">
                    <div class="modal-body">
                        <p>Are you sure you want to delete this item?</p>
                        <input type="hidden" name="id" id="deleteId">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-danger">Delete</button>
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