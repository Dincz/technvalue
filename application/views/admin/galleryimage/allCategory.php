<?php
$this->load->view('admin/layout/header');
$this->load->view('admin/layout/sidebar');
?>

<div class="content-body">
    <div class="row mb-4">
        <div class="col-12">
            <h1 class="text-center">ALL Gallery Categories</h1>
        </div>
    </div>
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
    <?php if (isset($images) && !empty($images)): ?>
        <div class="row justify-content-center">
            <div class="col-12">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($images as $index => $image): ?>
                            <tr>
                                <td><?php echo $index + 1; ?></td>
                                <td><?php echo htmlspecialchars($image['title']); ?></td>
                                <td>
                                    <a href="<?php echo base_url('admin/galleryimages/' . $image['id']); ?>" class="btn btn-primary">
                                        View
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    <?php else: ?>
        <div class="alert alert-info" role="alert">
            <p class="mb-0">No categories to display.</p>
        </div>
    <?php endif; ?>
</div>


<!--**********************************Content body End***********************************-->
<!--**********************************footer Start***********************************-->
<?php $this->load->view('admin/layout/footer'); ?>
<!--**********************************footer End***********************************-->