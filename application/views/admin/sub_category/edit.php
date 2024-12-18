<!--**********************************Header & sidebar start***********************************-->
<?php
$this->load->view('admin/layout/header');
$this->load->view('admin/layout/sidebar');
?>


<!--**********************************Header & sidebar end***********************************-->

<!--**********************************Content body start****************************-->
<div class="content-body">
    <div class="container-fluid">
        <div class="row">

            <!-- alert section -->
            <div class="col-12">
                <?php if (!empty($this->session->flashdata('success'))): ?>
                    <div class="alert alert-success solid alert-dismissible fade show w-100 mx-">
                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2">
                            <polyline points="9 11 12 14 22 4"></polyline>
                            <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                        </svg>
                        <strong>Success!</strong> <?php echo $this->session->flashdata('success'); ?>
                        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span></button>
                    </div>
                <?php endif; ?>

                <?php if (!empty($this->session->flashdata('error'))): ?>
                    <div class="alert alert-danger solid alert-dismissible fade show">
                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2">
                            <polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon>
                            <line x1="15" y1="9" x2="9" y2="15"></line>
                            <line x1="9" y1="9" x2="15" y2="15"></line>
                        </svg>
                        <strong>Error!</strong> <?php echo $this->session->flashdata('error'); ?>
                        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span></button>
                    </div>
                <?php endif; ?>
            </div>

            <div class="col-12 mb-3">
                <a href="<?php echo base_url('admin/sub_category') ?>" class="btn btn-warning w-100 m-0"><i class="fa-solid fa-arrow-left-long"></i> Back</a>
            </div>

            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit Sub Category</h4>
                    </div>
                    <div class="card-body">
                        <!-- Form to Edit Sub Category -->
                        <form method="POST" action="<?php echo base_url() ?>admin/sub_category/update" enctype="multipart/form-data">
                            <input name="sc_id" type="text" value="<?php echo $subcategory->sc_id; ?>" id="blogeditModalId" hidden>

                            <!-- Category dropdown -->
                            <div class="form-group col-12">
                                <label>Category</label>
                                <select name="c_id" class="form-control default-select" id="sel1" required>
                                    <?php foreach ($categories as $category): ?>
                                        <option value="<?php echo $category->c_id; ?>" <?php echo ($subcategory->c_id == $category->c_id) ? 'selected' : ''; ?>>
                                            <?php echo $category->c_name; ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <!-- Subcategory name input -->
                            <div class="form-group col-12">
                                <label>Name*</label>
                                <input name="name" type="text" class="form-control" placeholder="Enter Name" value="<?php echo $subcategory->sc_name; ?>" required>
                            </div>

                            <!-- Description input -->
                            <div class="form-group col-12">
                                <label>Description*</label>
                                <textarea name="description" class="summernote" required><?php echo $subcategory->description; ?></textarea>
                            </div>

                            <!-- Submit button -->
                            <div class="form-group">
                                <button name="submit" type="submit" class="btn btn-primary btn-block">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div> <!-- End of row -->
    </div>
</div>
<!--**********************************Content body End***********************************-->

<!--**********************************footer Start***********************************-->
<?php $this->load->view('admin/layout/footer'); ?>
<!--**********************************footer End***********************************-->
