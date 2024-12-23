<!--**********************************Header & sidebar start***********************************-->

<?php
$this->load->view('admin/layout/header');
$this->load->view('admin/layout/sidebar');
?>

<style>
    .page_type_specific {
        display: none;
    }
    
    /* Make all labels bold */
    label {
        font-weight: bold;
    }
</style>

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

                <a href="<?php echo base_url('admin/product') ?>" class="btn btn-warning w-100 m-0"><i class="fa-solid fa-arrow-left-long"></i> Back</a>

            </div>



            <div class="col-12">

                <div class="card">

                    <div class="card-header">

                        <h4 class="card-title">Edit Product</h4>

                    </div>

                    <div class="card-body">
                        <form method="POST" action="<?php echo base_url('admin/product/edit/' . $product['p_id']); ?>" enctype="multipart/form-data">

                            <input name="p_id" type="text" value="<?php echo $product['p_id']; ?>" id="blogeditModalId" hidden>

                            <div class="form-group">
                                <label>Product Name *</label>
                                <input name="p_name" type="text" class="form-control editModalTitle"
                                    value="<?php echo htmlspecialchars($product['p_name'] ?? '', ENT_QUOTES, 'UTF-8'); ?>"
                                    placeholder="Enter Product Name" required>
                            </div>

                            <!-- Product Image -->
                            <div class="form-group">
                                <label>Product Image</label>
                                <img src="<?php echo base_url('uploads/Product/' . $product['image']); ?>" class="img-fluid" alt="Product Image" width="200" height="auto">
                                <div class="custom-file">
                                    <input name="image" type="file" class="custom-file-input" id="productImage">
                                    <label class="custom-file-label" for="productImage">Choose File</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="category">Category *</label>
                                <select name="c_id" id="category" class="form-control" required>
                                    <option value="">Select a Category</option>
                                    <?php if (!empty($categories)): ?>
                                        <?php foreach ($categories as $category): ?>
                                            <option value="<?= htmlspecialchars($category['c_id'] ?? '', ENT_QUOTES, 'UTF-8'); ?>"
                                                <?php echo ($category['c_id'] == $product['c_id']) ? 'selected' : ''; ?>>
                                                <?= htmlspecialchars($category['c_name'] ?? '', ENT_QUOTES, 'UTF-8'); ?>
                                            </option>
                                        <?php endforeach; ?>
                                    <?php else: ?>
                                        <option value="">No categories available</option>
                                    <?php endif; ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="sub_category">Sub-Category</label>
                                <select name="sc_id" id="sub_category" class="form-control">
                                    <option value="">Select a Sub-Category</option>
                                    <?php foreach ($sub_categories as $subCat): ?>
                                        <option value="<?php echo htmlspecialchars($subCat['sc_id'], ENT_QUOTES, 'UTF-8'); ?>"
                                            <?php echo ($product['sc_id'] == $subCat['sc_id']) ? 'selected' : ''; ?>>
                                            <?php echo htmlspecialchars($subCat['sc_name'], ENT_QUOTES, 'UTF-8'); ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <!-- Product Description -->
                            <div class="form-group">
                                <label>Product Description</label>
                                <input style="height: auto;" name="description" value="<?php echo htmlspecialchars($product['description'] ?? '', ENT_QUOTES, 'UTF-8'); ?>"
                                    type="text" class="form-control editModalTitle" placeholder="Enter Product Description">
                            </div>

                            <!-- Product Application -->
                            <div class="form-group">
                                <label>Products Other Information</label>
                                <textarea name="application" class="form-control" placeholder="Enter Product Application"><?php echo htmlspecialchars($product['application'] ?? '', ENT_QUOTES, 'UTF-8'); ?></textarea>
                            </div>

                            <!-- Product Features -->
                            <!-- <div class="form-group">
                                <label>Product Features</label>
                                <textarea name="features" class="form-control" placeholder="Enter Product Features"><?php echo htmlspecialchars($product['features'] ?? '', ENT_QUOTES, 'UTF-8'); ?></textarea>
                            </div> -->

                            <!-- Brand Image -->
                            <!-- <div class="form-group">
                                <label>Brand Image</label>
                                <img src="<?php echo base_url('uploads/Product/' . $product['brand']); ?>" class="img-fluid" alt="Brand Image" width="200" height="auto">
                                <div class="custom-file">
                                    <input name="brand" type="file" class="custom-file-input" id="brandImage">
                                    <label class="custom-file-label" for="brandImage">Choose File</label>
                                </div>
                            </div> -->

                            <!-- PDF Upload -->
                            <div class="form-group">
                                <label>PDF</label>
                                <a href="<?php echo base_url('uploads/Docs/' . $product['pdf']); ?>" target="_blank">Download PDF</a>
                                <div class="custom-file">
                                    <input name="pdf" type="file" class="custom-file-input" id="productPdf">
                                    <label class="custom-file-label" for="productPdf">Choose File</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <button name="submit" type="submit" class="btn btn-primary btn-block">Update</button>
                            </div>
                        </form>

                        <!-- Load CKEditor -->
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

    </div>

</div>

<!--**********************************Content body End***********************************-->

<!--**********************************footer Start***********************************-->

<?php $this->load->view('admin/layout/footer'); ?>

<!--**********************************footer End***********************************-->

<script>
    $(document).ready(function() {
        var id = $("#page_type").val();
        $('#page_type_' + id).css('display', 'block');
    });

    $("#page_type").change(function() {
        var id = $(this).val();
        $('.page_type_specific').css('display', 'none');
        $('#page_type_' + id).css('display', 'block');
    });
</script>
