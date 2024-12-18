<?php $this->load->view('admin/layout/header'); ?>
<?php $this->load->view('admin/layout/sidebar'); ?>
<div class="content-body">
    <div class="container mt-4">
        <h2>Edit Contact</h2>
        <?php echo form_open('admin/contacts/edit/' . $contact->id); ?>
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="<?= $contact->title; ?>" required>
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="text" class="form-control" id="phone" name="phone" value="<?= $contact->phone; ?>" required>
        </div>
        <div class="mb-3">
            <label for="mobile" class="form-label">Mobile</label>
            <input type="text" class="form-control" id="mobile" name="mobile" value="<?= $contact->mobile; ?>" required>
        </div>
        <div class="mb-3">
            <label for="whatsapp" class="form-label">WhatsApp</label>
            <input type="text" class="form-control" id="whatsapp" name="whatsapp" value="<?= $contact->whatsapp; ?>"
                required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" id="email" name="email" value="<?= $contact->email; ?>" required>
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control" id="address" name="address" value="<?= $contact->address; ?>"
                required>
        </div>
        <button type="submit" class="btn btn-primary">Update Contact</button>
        <?php echo form_close(); ?>
    </div>

</div>
<?php $this->load->view('admin/layout/footer'); ?>