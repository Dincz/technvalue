<!--**********************************Header & sidebar start***********************************-->
<?php
$this->load->view('admin/layout/header');
$this->load->view('admin/layout/sidebar');
?>

<style>
    .switch {
        position: relative;
        display: inline-block;
        width: 34px;
        height: 20px;
    }

    .switch input {
        opacity: 0;
        width: 0;
        height: 0;
    }

    .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #ccc;
        transition: .4s;
    }

    .slider:before {
        position: absolute;
        content: "";
        height: 14px;
        width: 14px;
        left: 4px;
        bottom: 3px;
        background-color: white;
        transition: .4s;
    }

    input:checked+.slider {
        background-color: green;
    }

    input:checked+.slider:before {
        transform: translateX(14px);
    }

    .slider.round {
        border-radius: 20px;
    }

    .slider.round:before {
        border-radius: 50%;
    }

    .switch:before{
        box-shadow:none;
    }
</style>
<!--**********************************Header & sidebar end***********************************-->
<!--**********************************Content body start****************************-->
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <!-- Add Modal -->
        <div class="modal fade" id="addOrderModalside">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add Category</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="<?php echo base_url('admin/Category/create'); ?>" enctype="multipart/form-data">

                            <div class="form-group">
                                <label>C Name</label>
                                <input name="c_name" type="text" class="form-control" placeholder="Enter Name" required>
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <input name="description" type="text" class="form-control" placeholder="Enter Name" required>
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <select name="status" class="form-control" required>
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <button name="submit" type="submit" class="btn btn-primary btn-block">Create</button>

                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <!-- Edit Modal -->
        <div class="modal fade" id="editOrderModalside">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Category</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="<?php echo base_url() ?>admin/category/edit" enctype="multipart/form-data">

                            <div class="form-group">
                                <input name="id" type="text" value="1" id="editModalId" hidden>
                            </div>
                            <div class="form-group border rounded p-2">
                                <label class="text-black font-w500">Upload Image for laptop size (1100*300px)</label>
                                <img style="width:100%;" id="editModalLaptopImage" class="my-2 border rounded" src="http://localhost/wayam/uploads/1st.jpg" alt="banner">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                    <div class="custom-file">
                                        <input name="image0" type="file" class="custom-file-input" required>
                                        <label class="custom-file-label selected">Choose File</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group border rounded p-2">
                                <label class="text-black font-w500">Upload Image for Tablet size (700*300px)</label>
                                <img style="width:100%;" id="editModalTabletImage" class="my-2 border rounded" src="http://localhost/wayam/uploads/1st.jpg" alt="banner">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                    <div class="custom-file">
                                        <input name="image1" type="file" class="custom-file-input" required>
                                        <label class="custom-file-label selected">Choose File</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group border rounded p-2">
                                <label class="text-black font-w500">Upload Image for mobile size (500*400px)</label>
                                <img style="width:100%;" id="editModalMobileImage" class="my-2 border rounded" src="http://localhost/wayam/uploads/1st.jpg" alt="banner">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                    <div class="custom-file">
                                        <input name="image2" type="file" class="custom-file-input" required>
                                        <label class="custom-file-label selected">Choose File</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button name="submit" type="submit" class="btn btn-primary btn-block">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Delete Modal -->
        <div class="modal fade" id="deleteOrderModalside">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Are you sure you want to delete?</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                        </button>
                    </div>
                    <form method="POST" action="<?php echo base_url() ?>admin/category/delete" enctype="multipart/form-data">
                        <div class="modal-body">
                            <input name="id" type="text" value="1" id="deleteModalId" hidden>
                            <div class="form-group">
                                <button name="submit" type="submit" class="btn btn-danger btn-block">Delete</button>
                                <button name="submit" type="submit" class="btn btn-outline-danger btn-block" data-dismiss="modal">No</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
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
                <a href="javascript:void(0)" class="btn btn-primary w-100 m-0" data-toggle="modal" data-target="#addOrderModalside">+ New Category</a>

            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Category Table</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <div id="example3_wrapper" class="dataTables_wrapper no-footer">
                                <table id="example3" class="display min-w850 dataTable no-footer" role="grid" aria-describedby="example3_info">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 152.594px;">Sr No</th>
                                            <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" aria-label="Department: activate to sort column ascending" style="width: 182.703px;">Name</th>
                                            <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" aria-label="Department: activate to sort column ascending" style="width: 182.703px;">Description</th>
                                            <!--<th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" aria-label="Gender: activate to sort column ascending" style="width: 94.2344px;">Price (₹)</th>-->
                                            <!--<th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" aria-label="Gender: activate to sort column ascending" style="width: 94.2344px;">Discount (%)</th>-->
                                            <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" aria-label="Gender: activate to sort column ascending" style="width: 94.2344px;">Status</th>
                                            <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" aria-label="Gender: activate to sort column ascending" style="width: 94.2344px;">Created Date</th>
                                            <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 84.9219px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $i = 1; // Initialize counter
                                        if (!empty($categories)) { // Check if there are any categories
                                            foreach ($categories as $row) { // Loop through each category object
                                        ?>
                                                <tr role="row" class="odd">
                                                    <td><?php echo $i; ?></td>

                                                    <td><?php echo $row->c_name; ?></td>
                                                    <td><?php echo strlen($row->description) > 50 ? substr($row->description, 0, 50) . '...' : $row->description; ?></td>

                                                    <!-- Status Switch -->
                                                    <td>
                                                        <div class="col-sm-9">
                                                            <form method="POST" action="<?php echo base_url('admin/category/change_status'); ?>">
                                                                <input type="hidden" name="id" value="<?php echo $row->c_id; ?>">
                                                                <input type="hidden" name="status" value="<?php echo $row->status == 'active' ? 'inactive' : 'active'; ?>" id="status_<?php echo $row->c_id; ?>">
                                                                <label class="switch">
                                                                    <input type="checkbox"
                                                                        onchange="document.getElementById('status_<?php echo $row->c_id; ?>').value = this.checked ? 'active' : 'inactive'; this.form.submit();"
                                                                        <?php echo $row->status == 'active' ? 'checked' : ''; ?> />
                                                                    <span class="slider round"></span>
                                                                </label>
                                                            </form>
                                                        </div>
                                                    </td>


                                                    <td><?php echo date('d/m/Y', strtotime($row->created_date)); ?></td>

                                                    <!-- Edit and Delete Buttons -->
                                                    <td>
                                                        <div class="d-flex">
                                                            <a href="<?php echo base_url() ?>admin/category/edit/<?php echo $row->c_id; ?>"
                                                                data-id="<?php echo $row->c_id; ?>"
                                                                class="btn btn-primary shadow btn-xs sharp mr-1 editbtn">
                                                                <i class="fa fa-pencil"></i>
                                                            </a>
                                                            <a href="javascript:void(0)" data-toggle="modal" data-target="#deleteOrderModalside"
                                                                data-id="<?php echo $row->c_id; ?>"
                                                                class="btn btn-danger shadow btn-xs sharp deletebtn">
                                                                <i class="fa fa-trash"></i>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php
                                                $i++; // Increment counter
                                            }
                                        } else { // If no categories exist
                                            ?>
                                            <tr>
                                                <td colspan="7">No categories found.</td>
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>


                                </table>
                            </div>
                        </div>
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
<script>
    function switchProduct(id) {
        //        var id = $(this).attr("data-id");
        $.post(
            base_url + "admin/category/status", {
                data: id
            },
            function(response) {
                console.log(response);
            }
        );
    }
    //    $(".switchProduct").click(function () {
    //        var id = $(this).attr("data-id");
    //        $.post(
    //                base_url + "admin/category/status/", {
    //                    data: id
    //                },
    //                function (response) {
    //                    console.log(response);
    //                }
    //        );
    //    });
</script>