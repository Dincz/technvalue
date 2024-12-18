<!--**********************************Header & sidebar start***********************************-->

<?php
$this->load->view('admin/layout/header');

$this->load->view('admin/layout/sidebar');
?>

<!--**********************************Header & sidebar end***********************************-->



<!--**********************************Content body start****************************-->

<div class="content-body">

    <!-- row -->

    <div class="container-fluid">

        <div class="row">

            <!-- alert section  -->

            <div class="col-12">

                <?php
                if (!empty($this->session->flashdata('success'))) {
                ?>

                    <div class="alert alert-success solid alert-dismissible fade show w-100 mx-">

                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2">

                            <polyline points="9 11 12 14 22 4"></polyline>

                            <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>

                        </svg>

                        <strong>Success!</strong> <?php echo $this->session->flashdata('success') ?>

                        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>

                        </button>

                    </div>

                <?php
                }
                ?>



                <?php
                if (!empty($this->session->flashdata('error'))) {
                ?>

                    <div class="alert alert-danger solid alert-dismissible fade show">

                        <svg viewBox="0 0 24 24" width="24 " height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2">

                            <polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon>

                            <line x1="15" y1="9" x2="9" y2="15"></line>

                            <line x1="9" y1="9" x2="15" y2="15"></line>

                        </svg>

                        <strong>Error!</strong> <?php echo $this->session->flashdata('error') ?>

                        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>

                        </button>

                    </div>

                <?php
                }
                ?>





            </div>

            <div class="col-12 mb-3">

                <a href="<?php echo base_url('admin/category') ?>" class="btn btn-warning w-100 m-0"><i class="fa-solid fa-arrow-left-long"></i> Back</a>

            </div>



            <div class="col-12">

                <div class="card">

                    <div class="card-header">

                        <h4 class="card-title">Edit Category</h4>

                    </div>

                    <div class="card-body">
                        <form method="POST" action="<?php echo base_url('admin/category/edit/' . $data->c_id); ?>" enctype="multipart/form-data">
                            <input name="c_id" type="hidden" value="<?php echo $data->c_id; ?>">

                            <div class="form-group">
                                <label>C Name</label>
                                <input name="c_name" type="text" class="form-control" placeholder="Enter Name" value="<?php echo $data->c_name; ?>" required>
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <input name="description" type="text" class="form-control" placeholder="Enter Description" value="<?php echo $data->description; ?>" required>
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <select name="status" class="form-control" required>
                                    <option value="1" <?php echo ($data->status == 1) ? 'selected' : ''; ?>>Active</option>
                                    <option value="0" <?php echo ($data->status == 0) ? 'selected' : ''; ?>>Inactive</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>


                    </div>


                </div>

            </div>

        </div>

    </div>

</div>



<!--**********************************Content body End***********************************-->





<!--**********************************footer Start***********************************-->

<?php $this->load->view('admin/layout/footer'); ?>

<!--**********************************footer End***********************************-->