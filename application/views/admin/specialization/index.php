<?php $this->load->view('admin/layout/header'); ?>
<?php $this->load->view('admin/layout/sidebar'); ?>

<div class="content-body">
    <div class="container">
        <h1>Specializations</h1>
        <!-- <a class="btn btn-primary my-3" href="<?= site_url('admin/specialization/create'); ?>">Add New
            Specialization</a> -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Sr. No.</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Icon</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $serial_no = 1; ?>
                <?php foreach ($specializations as $specialization): ?>
                    <tr>
                        <td><?= $serial_no++; ?></td>
                        <td><?= htmlspecialchars($specialization['specialization_title']); ?></td>
                        <td><?= htmlspecialchars($specialization['specialization_description']); ?></td>
                        <td>
                            <img src="<?= base_url('uploads/icons/') . $specialization['specialization_icon']; ?>"
                                alt="Icon" style="width: 50px; height: auto;">
                        </td>
                        <td><?= $specialization['status'] ? 'Active' : 'Inactive'; ?></td>
                        <td>
                            <a class="btn btn-warning"
                                href="<?= site_url('admin/specialization/edit/' . $specialization['specialization_id']); ?>">Edit</a>
                            <!-- <a class="btn btn-danger my-2 "
                                href="<?= site_url('admin/specialization/delete/' . $specialization['specialization_id']); ?>"
                                onclick="return confirm('Are you sure you want to delete this specialization?');">Delete</a> -->
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?php $this->load->view('admin/layout/footer'); ?>