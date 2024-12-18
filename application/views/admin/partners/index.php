<?php $this->load->view('admin/layout/header'); ?>
<?php $this->load->view('admin/layout/sidebar'); ?>
<div class="content-body">
    <section class="section section-default mt-none mb-none">
        <div class="container">
            <h2 class="mb-sm text-center">Our <strong>Partners</strong></h2>
            <a href="<?php echo site_url('admin/partners/create'); ?>" class="btn btn-primary">Add Partner</a>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Sr No.</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $serial_no = 1; ?> <!-- Initialize serial number -->

                    <?php foreach ($partners as $partner): ?>
                        <tr>
                            <td><?= $serial_no++; ?></td> <!-- Increment serial number -->

                            <!-- <td><?php echo $partner->id; ?></td> -->
                            <td><?php echo $partner->name; ?></td>
                            <td>
                                <img src="<?php echo base_url('uploads/gallery/' . $partner->image); ?>"
                                    alt="<?php echo $partner->name; ?>" style="max-width: 100px;">
                            </td>
                            <td><?php echo ($partner->status) ? 'Active' : 'Inactive'; ?></td>
                            <td>
                                <a href="<?php echo site_url('admin/partners/edit/' . $partner->id); ?>"
                                    class="btn btn-warning btn-sm">Edit</a>
                                <a href="<?php echo site_url('admin/partners/delete/' . $partner->id); ?>"
                                    class="btn btn-danger btn-sm"
                                    onclick="return confirm('Are you sure you want to delete this partner?');">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </section>

</div>
<?php $this->load->view('admin/layout/footer'); ?>