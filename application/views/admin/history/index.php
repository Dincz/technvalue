<?php $this->load->view('admin/layout/header'); ?>
<?php $this->load->view('admin/layout/sidebar'); ?>
<div class="content-body">
    <h1>History Section</h1>
    <a class="btn btn-primary my-3" href="<?= site_url('admin/history/create'); ?>">Add New Record</a>
    <table border="1" style="width: 100%; text-align: center;">
        <tr>
            <th style="width: 10%;">Serial No</th>
            <th style="width: 15%;">Icon</th>
            <th style="width: 25%;">Title</th>
            <th style="width: 20%;">Description</th>
            <th style="width: 10%;">Status</th>
            <th style="width: 20%;">Actions</th>
        </tr>
        <?php $serial_no = 1; ?> <!-- Initialize serial number -->
        <?php foreach ($history as $row): ?>
            <tr>
                <td><?= $serial_no++; ?></td> <!-- Increment serial number -->
                <td><img src="<?= base_url('uploads/icons/') . $row->icon; ?>" alt="icon" width="50"></td>
                <td><?= $row->title; ?></td>
                <td><?= $row->description; ?></td>
                <td><?= $row->status; ?></td>
                <td>
                    <a class="btn btn-warning my-2" href="<?= site_url('admin/history/edit/' . $row->id); ?>">Edit</a>
                    <a class="btn btn-danger" href="<?= site_url('admin/history/delete/' . $row->id); ?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>
<?php $this->load->view('admin/layout/footer'); ?>