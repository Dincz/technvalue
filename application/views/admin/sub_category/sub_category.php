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

        <!-- Add Modal -->
        <div class="modal fade" id="addOrderModalside">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add Sub Category</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="<?php echo base_url() ?>admin/sub_category/create"
                            enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Category</label>
                                <select name="c_id" class="form-control default-select" id="sel1">
                                    <?php foreach ($categories as $category): ?>
                                        <option value="<?php echo $category->c_id; ?>"><?php echo $category->c_name; ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                           

                            <div class="form-group">
                                <label>Name</label>
                                <input name="name" type="text" class="form-control" placeholder="Enter Name">
                            </div>

                            <div class="form-group">
                                <label>Description</label>
                                <textarea name="description" class="summernote"></textarea>
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
                        <h5 class="modal-title">Edit Sub Category</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="<?php echo base_url() ?>admin/category/edit"
                            enctype="multipart/form-data">
                            <div class="form-group">
                                <input name="id" type="text" value="1" id="editModalId" hidden>
                            </div>

                            <!-- Image Uploads for different devices -->
                            <div class="form-group border rounded p-2">
                                <label class="text-black font-w500">Upload Image for laptop size (1100*300px)</label>
                                <img style="width:100%;" id="editModalLaptopImage" class="my-2 border rounded"
                                    src="http://localhost/wayam/uploads/1st.jpg" alt="banner">
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
                                <img style="width:100%;" id="editModalTabletImage" class="my-2 border rounded"
                                    src="http://localhost/wayam/uploads/1st.jpg" alt="banner">
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
                                <img style="width:100%;" id="editModalMobileImage" class="my-2 border rounded"
                                    src="http://localhost/wayam/uploads/1st.jpg" alt="banner">
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
        <div class="modal fade" id="deleteOrderModalside"  tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Are you sure you want to delete?</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                    </div>
                    <form method="POST" action="<?php echo base_url() ?>admin/sub_category/delete"
                        enctype="multipart/form-data">
                        <div class="modal-body">
                            <input name="id" type="text" value="" id="deleteModalId" hidden>
                            <div class="form-group">
                                <button name="submit" type="submit" class="btn btn-danger btn-block">Delete</button>
                                <button name="submit" type="submit" class="btn btn-outline-danger btn-block"
                                    data-dismiss="modal">No</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Main content -->
        <div class="row">
            <!-- alert section  -->
            <div class="col-12">
                <?php if (!empty($this->session->flashdata('success'))): ?>
                    <div class="alert alert-success solid alert-dismissible fade show w-100 mx-">
                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none"
                            stroke-linecap="round" stroke-linejoin="round" class="mr-2">
                            <polyline points="9 11 12 14 22 4"></polyline>
                            <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                        </svg>
                        <strong>Success!</strong> <?php echo $this->session->flashdata('success'); ?>
                        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i
                                    class="mdi mdi-close"></i></span></button>
                    </div>
                <?php endif; ?>

                <?php if (!empty($this->session->flashdata('error'))): ?>
                    <div class="alert alert-danger solid alert-dismissible fade show">
                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none"
                            stroke-linecap="round" stroke-linejoin="round" class="mr-2">
                            <polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2">
                            </polygon>
                            <line x1="15" y1="9" x2="9" y2="15"></line>
                            <line x1="9" y1="9" x2="15" y2="15"></line>
                        </svg>
                        <strong>Error!</strong> <?php echo $this->session->flashdata('error'); ?>
                        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i
                                    class="mdi mdi-close"></i></span></button>
                    </div>
                <?php endif; ?>
            </div>

            <div class="col-12 mb-3">
                <a href="javascript:void(0)" class="btn btn-primary w-100 m-0" data-toggle="modal"
                    data-target="#addOrderModalside">+ New Sub Category</a>
            </div>

            <!-- Sub Category Table -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Sub Category Table</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <div id="example3_wrapper" class="dataTables_wrapper no-footer">
                                <table id="example3" class="display min-w850 dataTable no-footer" role="grid"
                                    aria-describedby="example3_info">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1"
                                                colspan="1" aria-label="Name: activate to sort column ascending"
                                                style="width: 152.594px;">Sr No</th>
                                            <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1"
                                                colspan="1" aria-label="Position: activate to sort column ascending"
                                                style="width: 137.562px;">Category</th>
                                            <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1"
                                                colspan="1" aria-label="Office: activate to sort column ascending"
                                                style="width: 171.953px;">Name</th>
                                            <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1"
                                                colspan="1" aria-label="Age: activate to sort column ascending"
                                                style="width: 211.25px;">Description</th>
                                            <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1"
                                                colspan="1" aria-label="Salary: activate to sort column ascending"
                                                style="width: 149.25px;">Status</th>
                                            <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1"
                                                colspan="1" aria-label="Date: activate to sort column ascending"
                                                style="width: 162.078px;">Created Date</th>
                                            <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1"
                                                colspan="1" aria-label="Actions: activate to sort column ascending"
                                                style="width: 155.125px;">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        <?php foreach ($sub_cat as $row): ?>
                                            <tr role="row" class="odd">
                                                <td><?php echo $i; ?></td>
                                                <!-- Display the category name using c_id -->
                                                <td>
                                                    <?php echo isset($categoryMap[$row->c_id]) ? $categoryMap[$row->c_id] : 'Unknown'; ?>
                                                </td>
                                                <td><?php echo isset($row->sc_name) ? $row->sc_name : 'No Name'; ?></td>
                                                <td><?php echo isset($row->description) ? (strlen($row->description) > 50 ? substr($row->description, 0, 50) . '...' : $row->description) : 'No Description'; ?>
                                                </td>
                                                <td>
                                                    <div class="col-sm-9">
                                                    <input 
                                                        data-id="<?php echo $row->sc_id; ?>"
                                                        onclick="switchProduct(<?php echo $row->sc_id; ?>)" 
                                                        class="switch switchProduct" 
                                                        type="checkbox" 
                                                        <?php echo $row->status == 'active' ? 'checked' : ''; ?> />
                                                    </div>
                                                </td>
                                                <td><?php echo isset($row->created_date) ? date('d/m/Y', strtotime($row->created_date)) : 'No Date'; ?>
                                                </td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="<?php echo base_url() ?>admin/sub_category/edit/<?php echo $row->sc_id; ?>"
                                                            class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                                                class="fa fa-pencil"></i></a>
                                                        <a href="javascript:void(0)" data-toggle="modal"
                                                            data-target="#deleteOrderModalside"
                                                            data-id="<?php echo $row->sc_id; ?>"
                                                            class="btn btn-danger shadow btn-xs sharp deletebtn"><i
                                                            class="fa fa-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <?php $i++; ?>
                                        <?php endforeach; ?>
                                    </tbody>



                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div> <!-- End of row -->

    </div>
</div>
<!--**********************************Content body end****************************-->
<!-- Include the script before your closing </body> tag -->
<script>
    function switchProduct(id) {
        // Get the checkbox element by data-id
        var checkbox = $('[data-id="' + id + '"]');
        
        // Determine the new status based on checkbox state (checked or unchecked)
        var newStatus = checkbox.prop('checked') ? 'active' : 'inactive';

        // Send an AJAX request to update the status in the backend
        $.post(
            base_url + "admin/sub_category/status", // Make sure this is the correct URL
            { id: id, status: newStatus }, // Send both the ID and the new status
            function(response) {
                // Handle the response if needed
                if(response.success) {
                    console.log('Status updated successfully');
                } else {
                    console.log('Error updating status');
                }
            },
            "json"
        );
    }
</script>



<?php $this->load->view('admin/layout/footer'); ?>