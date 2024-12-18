<?php $this->load->view('admin/layout/header'); ?>
<?php $this->load->view('admin/layout/sidebar'); ?>

<div class="content-body">
    <div class="container">
        <h1>Expert List</h1>
        <a class="btn btn-primary my-3" href="<?= site_url('admin/expert/create'); ?>">Add New Expert</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>S.No.</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Designation</th>
                    <th>Facebook</th>
                    <th>LinkedIn</th>
                    <th>Twitter</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($experts as $index => $expert): ?>
                    <tr>
                        <td><?= $index + 1; ?></td> <!-- Serial number starts from 1 -->
                        <td><?= htmlspecialchars($expert['name']); ?></td>
                        <td><img src="<?= base_url('uploads/team/') . $expert['image']; ?>" alt="Expert Image"
                                style="width: 50px;"></td>
                        <td><?= htmlspecialchars($expert['designation']); ?></td>
                        <td><a href="<?= htmlspecialchars($expert['facebook_link']); ?>" target="_blank">Facebook</a></td>
                        <td><a href="<?= htmlspecialchars($expert['linkdln_link']); ?>" target="_blank">LinkedIn</a></td>
                        <td><a href="<?= htmlspecialchars($expert['twitter_link']); ?>" target="_blank">Twitter</a></td>
                        <td><?= htmlspecialchars($expert['status']); ?></td>
                        <td>
                            <a class="btn btn-warning my-2"
                                href="<?= site_url('admin/expert/edit/' . $expert['id']); ?>">Edit</a>
                            <a class="btn btn-danger" href="<?= site_url('admin/expert/delete/' . $expert['id']); ?>"
                                onclick="return confirm('Are you sure you want to delete this expert?');">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?php $this->load->view('admin/layout/footer'); ?>