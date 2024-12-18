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
                        <form method="POST" action="<?php echo base_url('admin/gallery/edit/' . $item['id']); ?>" enctype="multipart/form-data">

                            <input name="id" type="text" value="<?php echo $item['id']; ?>" id="blogeditModalId" hidden>

                            <div class="form-group">
                                <label>Upload Image</label>
                                <input type="file" name="image" class="form-control">
                                <div id="editPreview">
            
                                        <img src="<?php echo base_url('uploads/gallery/' . $item['background_image']); ?>" alt="Current Image" width="100">
         
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

                            <div class="form-group">
                                <button name="submit" type="submit" class="btn btn-primary btn-block">Update</button>
                            </div>
                        </form>



                        <script>
                            // Show file name when file is selected
                            $('.custom-file-input').on('change', function() {
                                let fileName = $(this).val().split('\\').pop();
                                $(this).siblings('.custom-file-label').addClass('selected').html(fileName);
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
        //    console.log( "ready!" );
        //alert();
        var id = $("#page_type").val();
        $('#page_type_' + id).css('display', 'block');
    });

    $("#page_type").change(function() {
        //        alert("The text has been changed.");
        var id = $(this).val();
        $('.page_type_specific').css('display', 'none');
        $('#page_type_' + id).css('display', 'block');
    });
</script>