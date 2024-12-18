<?php $this->load->view('admin/layout/header'); ?>
<?php $this->load->view('admin/layout/sidebar'); ?>

<div class="content-body">
    <div class="container mt-5">
        <h2 class="mb-4">Services</h2>
        <a href="<?php echo site_url('admin/service/create'); ?>" class="btn btn-primary mb-3">Add Service</a>
        <?php if ($this->session->flashdata('success')): ?>
            <div class="alert alert-success"><?php echo $this->session->flashdata('success'); ?></div>
        <?php endif; ?>
        <?php if ($this->session->flashdata('error')): ?>
            <div class="alert alert-danger"><?php echo $this->session->flashdata('error'); ?></div>
        <?php endif; ?>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Serial No.</th>
                    <th>Service Title</th>
                    <th>Service Image</th>
                    <th>Service Icon</th>
                    <th>Short Description</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $sn = 1;
                foreach ($services as $service): ?>
                    <tr>
                        <td><?php echo $sn++; ?></td>
                        <td><?php echo $service->service_title; ?></td>
                        <td><img src="<?php echo base_url('uploads/services/' . $service->service_image); ?>" width="50" />
                        </td>
                        <td><img src="<?php echo base_url('uploads/icons/' . $service->service_icon); ?>" width="50" />
                        </td>
                        <td><?php echo $service->service_short_description; ?></td>
                        <td><?php echo ucfirst($service->status) ? 'Active' : 'Inactive'; ?></td>
                        <td>
                            <a href="<?php echo site_url('admin/service/edit/' . $service->s_id); ?>"
                                class="btn btn-warning my-3">Edit</a>
                            <a href="<?php echo site_url('admin/service/delete/' . $service->s_id); ?>"
                                class="btn btn-danger" onclick="return confirm('Are you sure?');">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</div>
<?php $this->load->view('admin/layout/footer'); ?>

