<?php $this->load->view('admin/layout/header'); ?>
<?php $this->load->view('admin/layout/sidebar'); ?>

<div class="content-body">
    <h1 class="mb-4">Sector Management</h1>

    <!-- Toggle Button -->
    <button id="toggleButton" onclick="toggleEditMode(<?php echo $edit_mode ? 'false' : 'true'; ?>)"
        class="btn btn-primary mb-3">
        <?php echo $edit_mode ? 'Cancel' : 'Add New'; ?>
    </button>


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

    <!-- Display Mode -->
    <div id="displayMode" <?php echo $edit_mode ? 'style="display: none;"' : ''; ?>>
        <div class="card">
            <div class="card-header">
                <strong>Sector List</strong>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Work Images</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($data) && is_array($data)): ?>
                            <?php foreach ($data as $item): ?>
                                <tr>
                                    <td><?php echo $item['sd_id']; ?></td>
                                    <td><?php echo htmlspecialchars($item['name']); ?></td>
                                    <td><?php echo strlen($item['description']) > 100 ? substr(htmlspecialchars($item['description']), 0, 100) . '...' : htmlspecialchars($item['description']); ?>
                                    </td>
                                    <td><?php if ($item['image']): ?><img
                                                src="<?php echo base_url('uploads/sectors/' . $item['image']); ?>" class="img-fluid"
                                                style="max-width: 100px;"><?php endif; ?></td>
                                    <td>
                                        <?php if ($item['work_images']): ?>
                                            <?php $images = explode(',', $item['work_images']); ?>
                                            <?php foreach ($images as $img): ?>
                                                <img src="<?php echo base_url('uploads/sectors/' . $img); ?>" class="img-fluid"
                                                    style="max-width: 100px;">
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </td>
                                    <td><?php echo htmlspecialchars($item['status']); ?></td>
                                    <td class="d-flex">
                                        <a href="<?php echo site_url('admin/sector/edit/' . $item['sd_id']); ?>"
                                            class="btn btn-warning btn-sm"> <i class="fas fa-pen"></i></a>
                                        <a href="<?php echo site_url('admin/sector/delete/' . $item['sd_id']); ?>"
                                            class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?');"> <i
                                                class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="7">No records found</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Edit/Add Mode -->
    <div id="editMode" <?php echo $edit_mode ? '' : 'style="display: none;"'; ?>>
        <div class="card">
            <div class="card-header">
                <strong><?php echo $edit_mode ? 'Edit Sector' : 'Add New Sector'; ?></strong>
            </div>
            <div class="card-body">
                <form action="<?php echo site_url('admin/sector/update'); ?>" method="post"
                    enctype="multipart/form-data">
                    <?php if ($edit_mode): ?>
                        <input type="hidden" name="sd_id" value="<?php echo htmlspecialchars($current_item['sd_id']); ?>">
                        <input type="hidden" name="existing_image"
                            value="<?php echo htmlspecialchars($current_item['image']); ?>">
                        <input type="hidden" name="existing_work_images"
                            value="<?php echo htmlspecialchars($current_item['work_images']); ?>">
                    <?php endif; ?>

                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" name="name"
                            value="<?php echo htmlspecialchars($edit_mode ? $current_item['name'] : ''); ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="description">Description:</label>
                        <textarea class="form-control" id="description" name="description" rows="5"
                            required><?php echo htmlspecialchars($edit_mode ? $current_item['description'] : ''); ?></textarea>
                    </div>

                    <div class="form-group">
                        <label for="image">Image:</label>
                        <input type="file" class="form-control" id="image" name="image">
                        <?php if ($edit_mode && $current_item['image']): ?>
                            <img src="<?php echo base_url('uploads/sectors/' . $current_item['image']); ?>" class="img-fluid"
                                style="max-width: 100px;">
                        <?php endif; ?>
                    </div>

                    <div class="form-group">
                        <label for="work_images">Work Images:</label>
                        <input type="file" class="form-control" id="work_images" name="work_images[]" multiple>
                        <?php if ($edit_mode && $current_item['work_images']): ?>
                            <?php $images = explode(',', $current_item['work_images']); ?>
                            <?php foreach ($images as $img): ?>
                                <img src="<?php echo base_url('uploads/sectors/' . $img); ?>" class="img-fluid"
                                    style="max-width: 100px;">
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>

                    <div class="form-group">
                        <label for="status">Status:</label>
                        <select class="form-control" id="status" name="status" required>
                            <option value="1" <?php echo ($edit_mode && $current_item['status'] == '1') ? 'selected' : ''; ?>>Active</option>
                            <option value="2" <?php echo ($edit_mode && $current_item['status'] == '2') ? 'selected' : ''; ?>>Inactive</option>
                        </select>
                    </div>

                    <button type="submit"
                        class="btn btn-primary"><?php echo $edit_mode ? 'Update Sector' : 'Add Sector'; ?></button>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('description');

    function toggleEditMode(isEdit) {
        document.getElementById('editMode').style.display = isEdit ? '' : 'none';
        document.getElementById('displayMode').style.display = isEdit ? 'none' : '';
        document.getElementById('toggleButton').textContent = isEdit ? 'Cancel' : 'Add New';
        if (isEdit) {
            document.getElementById('toggleButton').setAttribute('onclick', 'cancelEdit()');
        } else {
            document.getElementById('toggleButton').setAttribute('onclick', 'toggleEditMode(true)');
        }
    }

    function cancelEdit() {
        window.location.href = "<?php echo site_url('admin/sector'); ?>";
        // window.location.reload();
    }
</script>

<?php $this->load->view('admin/layout/footer'); ?>