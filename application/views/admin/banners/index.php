<?php $this->load->view('admin/layout/header'); ?>
<?php $this->load->view('admin/layout/sidebar'); ?>

<div class="content-body">
    <section class="vs-blog-wrapper space-top space-extra-bottom">
        <div class="container">
            <h1>Banners</h1>

            <!-- Add Banner Button -->
            <!-- <div class="mb-3">
                <a href="<?= site_url('admin/banner/create'); ?>" class="btn btn-primary">Add New Banner</a>
            </div> -->

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Sr No.</th>
                        <th>Image</th>
                        <th>Page Name</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $count = 1;
                    foreach ($banners as $banner): ?>
                        <tr>
                            <td><?= $count++; ?></td>
                            <!-- <td>
                                <img src="<?= htmlspecialchars($banner['image']); ?>" alt="Banner Image"
                                    style="width: 100px; height: auto;">
                            </td> -->
                            <td><img src="<?php echo base_url('uploads/banners/'.$banner['image']); ?>"
                                    width="250" height="100" alt="no image" />

                            <td><?= htmlspecialchars($banner['page_name']); ?></td>
                            <td><?= $banner['status'] ? 'Active' : 'Inactive'; ?></td>
                            <td>
                                <a href="<?= site_url('admin/banner/edit/' . $banner['id']); ?>"
                                    class="btn btn-warning">Edit</a>
                                <!-- <a href="<?= site_url('admin/banner/delete/' . $banner['id']); ?>"
                                    onclick="return confirm('Are you sure?');" class="btn btn-danger">Delete</a> -->
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </section>
</div>

<?php $this->load->view('admin/layout/footer'); ?>