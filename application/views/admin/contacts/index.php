<?php $this->load->view('admin/layout/header'); ?>
<?php $this->load->view('admin/layout/sidebar'); ?>

<div class="content-body">
    <!-- <div class="container"> -->
        <h2>Contact List</h2>
        <a href="<?= site_url('admin/contacts/create'); ?>" class="btn btn-primary mb-3">Add New Contact</a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Sr No.</th>
                    <th>Title</th>
                    <th>Phone</th>
                    <th>Mobile</th>
                    <th>WhatsApp</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $serial = 1; // Initialize serial number ?>
                <?php foreach ($contacts as $contact): ?>
                    <tr>
                        <td><?= $serial++; ?></td> <!-- Increment serial number -->
                        <td><?= htmlspecialchars($contact->title); ?></td>
                        <td><?= htmlspecialchars($contact->phone); ?></td>
                        <td><?= htmlspecialchars($contact->mobile); ?></td>
                        <td><?= htmlspecialchars($contact->whatsapp); ?></td>
                        <td><?= htmlspecialchars($contact->email); ?></td>
                        <td><?= htmlspecialchars($contact->address); ?></td>
                        <td>
                            <a href="<?= site_url('admin/contacts/edit/' . $contact->id); ?>"
                                class="btn btn-warning my-2">Edit</a>
                            <a href="<?= site_url('admin/contacts/delete/' . $contact->id); ?>" class="btn btn-danger"
                                onclick="return confirm('Are you sure you want to delete this contact?');">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <!-- </div> -->
</div>

<?php $this->load->view('admin/layout/footer'); ?>