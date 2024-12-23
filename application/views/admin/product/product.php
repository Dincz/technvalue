<!--**********************************Header & sidebar start***********************************-->
<?php
$this->load->view('admin/layout/header');
$this->load->view('admin/layout/sidebar');
?>
<style>
    .page_type_specific {
        display: none;
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
                        <h5 class="modal-title">Add Product</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="<?php echo base_url() ?>admin/product/add"
                            enctype="multipart/form-data">

                            <!-- Product Name -->
                            <div class="form-group">
                                <label>Product Name *</label>
                                <input name="p_name" type="text" class="form-control editModalTitle"
                                    placeholder="Enter Product Name" required>
                            </div>

                            <!-- Product Image -->
                            <div class="form-group">
                                <label>Product Image</label>
                                <div class="custom-file">
                                    <input name="image" type="file" class="custom-file-input" >
                                    <label class="custom-file-label">Choose File</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="category">Category *</label>
                                <select name="c_id" id="category" class="form-control" required>
                                    <option value="">Select a Category</option>
                                    <?php if (!empty($categories)): ?>
                                        <?php foreach ($categories as $category1): ?>
                                            <option
                                                value="<?php echo htmlspecialchars($category1['c_id'], ENT_QUOTES, 'UTF-8'); ?>"
                                                <?php if (isset($row) && $category1['c_id'] == $row['c_id'])
                                                    echo 'selected'; ?>>
                                                <?php echo htmlspecialchars($category1['c_name'], ENT_QUOTES, 'UTF-8'); ?>
                                            </option>
                                        <?php endforeach; ?>
                                    <?php else: ?>
                                        <option value="">No categories available</option>
                                    <?php endif; ?>
                                </select>
                            </div>

                            <?php if (!empty($sub_category)): ?>
                                <div class="form-group">
                                    <label for="sub_category">Sub-Category</label>
                                    <select name="sc_id" id="sub_category" class="form-control">
                                        <option value="">Select a Sub-Category</option>
                                        <?php foreach ($sub_category as $subCat): ?>
                                            <option
                                                value="<?php echo htmlspecialchars($subCat['sc_id'], ENT_QUOTES, 'UTF-8'); ?>">
                                                <?php echo htmlspecialchars($subCat['sc_name'], ENT_QUOTES, 'UTF-8'); ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            <?php else: ?>
                                <p>No sub-categories available.</p>
                            <?php endif; ?>




                            <!-- Product Description -->
                            <div class="form-group">
                                <label>Product Description</label>
                                <!-- <textarea name="description" class="summernote form-control" placeholder="Enter Product Description"></textarea> -->
                                <input name="description" type="text" class="form-control editModalTitle"
                                    placeholder="Enter Product Name" required>

                            </div>

                            <!-- Product Application -->
                            <div class="form-group">
                                <label>Products Other Information</label>
                                <textarea name="application" class="form-control" placeholder="Enter Product Application"><?php echo htmlspecialchars($product['application'] ?? '', ENT_QUOTES, 'UTF-8'); ?></textarea>
                            </div>

                            <!-- Brand Image -->
                            <!-- <div class="form-group">
                                <label>Brand Image</label>
                                <div class="custom-file">
                                    <input name="brand" type="file" class="custom-file-input" required>
                                    <label class="custom-file-label">Choose File</label>
                                </div>
                            </div> -->

                            <!-- PDF Upload -->
                            <div class="form-group">
                                <label>PDF</label>
                                <div class="custom-file">
                                    <input name="pdf" type="file" class="custom-file-input">
                                    <label class="custom-file-label">Choose File</label>
                                </div>
                            </div>

                            <!-- Product Features -->
                            <!-- <div class="form-group">
                                <label>Product Features</label>
                                <input name="features" type="text" class="form-control" placeholder="Enter Video Link">
                            </div> -->

                            <!-- Video Link -->
                            <!-- <div class="form-group">
                                <label>Video Link</label>
                                <input name="video_link" type="text" class="form-control"
                                    placeholder="Enter Video Link">
                            </div> -->

                            <!-- Submit Button -->
                            <div class="form-group">
                                <button name="submit" type="submit"
                                    class="btn btn-primary btn-block mt-3">Create</button>
                            </div>
                        </form>

                        <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>

                        <script>
                            // Initialize CKEditor for Product Application and Features
                            ClassicEditor
                                .create(document.querySelector('textarea[name="application"]'))
                                .catch(error => {
                                    console.error(error);
                                });

                            ClassicEditor
                                .create(document.querySelector('textarea[name="features"]'))
                                .catch(error => {
                                    console.error(error);
                                });
                        </script>

                    </div>
                </div>
            </div>
        </div>
        <!-- Edit Modal -->
        <div class="modal fade" id="editOrderModalside">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Product</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="<?php echo base_url() ?>admin/product/edit"
                            enctype="multipart/form-data">
                            <div class="form-group">
                                <input name="id" type="text" value="1" id="editModalId" hidden>
                            </div>
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
        <div class="modal fade" id="deleteOrderModalside">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Are you sure you want to delete?</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                    </div>
                    <form method="POST" action="" id="deleteForm" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="form-group">
                                <button name="submit" type="submit" class="btn btn-danger btn-block">Delete</button>
                                <button type="button" class="btn btn-outline-danger btn-block"
                                    data-dismiss="modal">No</button>
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
                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none"
                            stroke-linecap="round" stroke-linejoin="round" class="mr-2">
                            <polyline points="9 11 12 14 22 4"></polyline>
                            <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                        </svg>
                        <strong>Success!</strong> <?php echo $this->session->flashdata('success') ?>
                        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i
                                    class="mdi mdi-close"></i></span>
                        </button>
                    </div>
                <?php
                }
                ?>
                <?php
                if (!empty($this->session->flashdata('error'))) {
                ?>
                    <div class="alert alert-danger solid alert-dismissible fade show">
                        <svg viewBox="0 0 24 24" width="24 " height="24" stroke="currentColor" stroke-width="2" fill="none"
                            stroke-linecap="round" stroke-linejoin="round" class="mr-2">
                            <polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2">
                            </polygon>
                            <line x1="15" y1="9" x2="9" y2="15"></line>
                            <line x1="9" y1="9" x2="15" y2="15"></line>
                        </svg>
                        <strong>Error!</strong> <?php echo $this->session->flashdata('error') ?>
                        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i
                                    class="mdi mdi-close"></i></span>
                        </button>
                    </div>
                <?php
                }
                ?>
            </div>
            <div class="col-12 mb-3">
                <a href="javascript:void(0)" class="btn btn-primary w-100 m-0" data-toggle="modal"
                    data-target="#addOrderModalside">+ New Product</a>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Product Table</h4>
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
                                                colspan="1" aria-label="Department: activate to sort column ascending"
                                                style="width: 182.703px;">Product Name </th>
                                            <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1"
                                                colspan="1" aria-label="Department: activate to sort column ascending"
                                                style="width: 182.703px;">Category</th>
                                            <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1"
                                                colspan="1" aria-label="Department: activate to sort column ascending"
                                                style="width: 182.703px;">Sub Category</th>
                                            <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1"
                                                colspan="1" aria-label="Department: activate to sort column ascending"
                                                style="width: 182.703px;">Product Image </th>
                                            <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1"
                                                colspan="1" aria-label="Gender: activate to sort column ascending"
                                                style="width: 94.2344px;"> Description</th>
                                            <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1"
                                                colspan="1" aria-label="Gender: activate to sort column ascending"
                                                style="width: 94.2344px;">Product's Other Information</th>
                                            <!-- <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1"
                                                colspan="1" aria-label="Gender: activate to sort column ascending"
                                                style="width: 94.2344px;"> Brand</th> -->
                                            <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1"
                                                colspan="1" aria-label="Gender: activate to sort column ascending"
                                                style="width: 94.2344px;"> PDF</th>
                                            <!-- <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1"
                                                colspan="1" aria-label="Gender: activate to sort column ascending"
                                                style="width: 94.2344px;"> Feature</th> -->
                                            <!-- <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1"
                                                colspan="1" aria-label="Gender: activate to sort column ascending"
                                                style="width: 94.2344px;"> Video Link</th> -->
                                            <!-- <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" aria-label="Gender: activate to sort column ascending" style="width: 94.2344px;"> Related Product Id</th> -->
                                            <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1"
                                                colspan="1" aria-label="Gender: activate to sort column ascending"
                                                style="width: 94.2344px;"> status</th>
                                            <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1"
                                                colspan="1" aria-label="Gender: activate to sort column ascending"
                                                style="width: 94.2344px;"> created date</th>




                                            <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1"
                                                colspan="1" aria-label="Action: activate to sort column ascending"
                                                style="width: 84.9219px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $i = 1;
                                        foreach ($products as $row) {
                                        ?>
                                            <tr role="row" class="odd">
                                                <td class="text-center">
                                                    <?php echo $i; ?>
                                                </td>

                                                <td><?php echo htmlspecialchars($row['p_name'], ENT_QUOTES, 'UTF-8'); ?>
                                                </td>


                                                <!-- <td class="text-center">
                                                    <?php echo htmlspecialchars($row['c_name'], ENT_QUOTES, 'UTF-8'); ?>
                                                </td> -->
                                                <td class="text-center">
                                                    <?php if (!empty($categories)): ?>
                                                        <?php
                                                        // Find the category name that matches the selected category ID
                                                        $selectedCategoryName = '';
                                                        foreach ($categories as $category) {
                                                            if ($category['c_id'] == $row['c_id']) {
                                                                $selectedCategoryName = htmlspecialchars($category['c_name'], ENT_QUOTES, 'UTF-8');
                                                                break; // Exit loop once the category is found
                                                            }
                                                        }
                                                        echo $selectedCategoryName ? $selectedCategoryName : 'No category selected';
                                                        ?>
                                                    <?php else: ?>
                                                        No categories available
                                                    <?php endif; ?>
                                                </td>

                                                <!-- <td class="text-center">
                                                    <?php echo htmlspecialchars($row['sc_id'], ENT_QUOTES, 'UTF-8'); ?>
                                                </td> -->

                                                <td class="text-center">
                                                    <?php if (!empty($sub_category) && isset($row['sc_id'])): ?>
                                                        <?php
                                                        // Initialize selected category name
                                                        $selectedCategoryName = '';

                                                        // Loop through subcategories to find the name
                                                        foreach ($sub_category as $sub_cat) {
                                                            // Check if subcategory ID matches the current row's subcategory ID
                                                            if (isset($sub_cat['sc_id']) && $sub_cat['sc_id'] == $row['sc_id']) {
                                                                // Found the matching subcategory
                                                                $selectedCategoryName = htmlspecialchars($sub_cat['sc_name'], ENT_QUOTES, 'UTF-8');
                                                                break; // Exit the loop since we found the match
                                                            }
                                                        }

                                                        // Output selected category name or a default message
                                                        echo $selectedCategoryName ? $selectedCategoryName : 'No category selected';
                                                        ?>
                                                    <?php else: ?>
                                                        No categories available or invalid product ID
                                                    <?php endif; ?>
                                                </td>




                                                <td>
                                                    <img src="<?php echo base_url('uploads/Product/' . $row['image']); ?>"
                                                        class="img-fluid" alt="Product Image">
                                                </td>

                                                <td>

                                                    <div
                                                        style="display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; text-overflow: ellipsis;">

                                                        <?php
                                                        // Check if $row['description'] is null or empty
                                                        echo htmlspecialchars(!empty($row['description']) ? $row['description'] : 'No description available', ENT_QUOTES, 'UTF-8');
                                                        ?>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div
                                                        style="display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; text-overflow: ellipsis;">

                                                        <?php echo htmlspecialchars(!empty($row['application']) ? $row['application'] : 'no application available', ENT_QUOTES, 'UTF-8'); ?>
                                                    </div>
                                                </td>

                                                <!-- <td>
                                                    <img src="<?php echo base_url('uploads/Brand/' . $row['brand']); ?>"
                                                        class="img-fluid" alt="Brand Image">
                                                </td> -->

                                                <td>
                                                    <a href="<?php echo base_url('uploads/Docs/' . $row['pdf']); ?>"
                                                        target="_blank">Download PDF</a>
                                                </td>

                                                <!-- <td>
                                                    <div
                                                        style="display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; text-overflow: ellipsis;">

                                                        <?php
                                                        // Check if $row['features'] is null or empty
                                                        echo htmlspecialchars(!empty($row['features']) ? $row['features'] : 'No features available', ENT_QUOTES, 'UTF-8');
                                                        ?>
                                                    </div>
                                                </td> -->

                                                <!-- <td>
                                                    <?php
                                                    // Check if $row['video_link'] is null or empty
                                                    echo htmlspecialchars(!empty($row['video_link']) ? $row['video_link'] : 'No video available', ENT_QUOTES, 'UTF-8');
                                                    ?>
                                                </td> -->

                                                <td>
                                                    <?php echo htmlspecialchars($row['status'], ENT_QUOTES, 'UTF-8'); ?>
                                                </td>

                                                <td>
                                                    <?php echo htmlspecialchars($row['created_date'], ENT_QUOTES, 'UTF-8'); ?>
                                                </td>

                                                <td>
                                                    <div class="d-flex">
                                                        <a href="<?php echo base_url() ?>admin/product/edit/<?php echo $row['p_id']; ?>"
                                                            class="btn btn-primary shadow btn-xs sharp mr-1">
                                                            <i class="fa fa-pencil"></i>
                                                        </a>
                                                        <a href="<?php echo base_url() ?>admin/product/delete/<?php echo $row['p_id']; ?>"
                                                            class="btn btn-danger shadow btn-xs sharp deletebtn">
                                                            <i class="fa fa-trash"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php
                                            $i++;
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
    $(document).ready(function() {
        // console.log( "ready!" );
        //alert();
        $('#page_type_1').css('display', 'block');
    });

    $("#page_type").change(function() {
        // alert("The text has been changed.");
        var id = $(this).val();
        $('.page_type_specific').css('display', 'none');
        $('#page_type_' + id).css('display', 'block');
    });

    function switchProduct(id) {
        // var id = $(this).attr("data-id");
        $.post(
            base_url + "admin/product/status", {
                data: id
            },
            function(response) {
                console.log(response);
            }
        );
    }



    // $(".switchProduct").click(function () {
    // var id = $(this).attr("data-id");
    // $.post(
    // base_url + "admin/product/status", {
    // data: id
    // },
    // function (response) {
    // console.log(response);
    // }
    // );
    // });
</script>