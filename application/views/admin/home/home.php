<?php $this->load->view('admin/layout/header'); ?>
<?php $this->load->view('admin/layout/sidebar'); ?>

<div class="content-body ">
    <h1 class="my-5 text-center">Manage Home Banners</h1>

    <!-- Button to open the Add Banner Modal -->
    <button class="btn w-50  btn-primary" data-bs-toggle="modal" data-bs-target="#bannerModal" id="addBannerButton">Add Banner</button>

    <!-- Display all banners -->
    <table class="table table-striped mt-4">
        <thead>
            <tr>
                <th>#</th>
                <th>Image</th>
                <th>Slogan</th>
                <!-- <th>Is Home Page</th> -->
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($banners as $index => $banner): ?>
                <tr>
                    <td><?php echo $index + 1; ?></td>
                    <td><img src="<?php echo base_url('uploads/banners/' .$banner['image']); ?>" alt="Banner Image" style="max-width: 100px;"></td>
                    <td><?php echo htmlspecialchars($banner['slogan']); ?></td>
                    <!-- <td><?php echo $banner['is_home_page'] ? 'Yes' : 'No'; ?></td> -->
                    <td><?php echo $banner['status']; ?></td>
                    <td>
                        <!-- Edit button with data-id attribute for identifying the banner -->
                        <button class="btn btn-warning btn-sm edit-btn" data-id="<?php echo $banner['id']; ?>" data-bs-toggle="modal" data-bs-target="#bannerModal">Edit</button>
                        <a href="<?php echo site_url('admin/Home/delete/' . $banner['id']); ?>" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<!-- Modal for Add/Edit Banner -->
<div class="modal fade" id="bannerModal" tabindex="-1" aria-labelledby="bannerModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form id="bannerForm" action="<?php echo site_url('admin/home/store'); ?>" method="post" enctype="multipart/form-data">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="bannerModalLabel">Add Banner</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Slogan Field -->
                    <div class="mb-3">
                        <label for="slogan" class="form-label">Slogan</label>
                        <input type="text" class="form-control" id="slogan" name="slogan" required>
                    </div>

                    <!-- Image Field -->
                    <div class="mb-3">
                        <label for="images" class="form-label">Image</label>
                        <input type="file" class="form-control" id="images" name="images" accept="image/*">
                    </div>

                    <!-- Display on Home Page Dropdown -->
                    <div class="mb-3">
                        <label for="is_home_page" class="form-label">Display on Home Page</label>
                        <select class="form-control" id="is_home_page" name="is_home_page">
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                        </select>
                    </div>

                    <!-- Status Dropdown -->
                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select class="form-control" id="status" name="status">
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
                    </div>

                    <!-- Hidden field to store the banner ID for Edit -->
                    <input type="hidden" id="banner_id" name="banner_id" value="">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save Banner</button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Bootstrap JS (for modal functionality) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<script>
    $(document).ready(function() {
        // Show modal for adding a new banner
        $('#addBannerButton').on('click', function() {
            // Reset form fields for Add
            $('#bannerForm')[0].reset();
            $('#bannerModalLabel').text('Add Banner');
            $('#bannerForm').attr('action', '<?php echo site_url('admin/home/store'); ?>');
            $('#banner_id').val(''); // Reset hidden input
            $('#images').val(''); // Reset image field
        });

        // Show modal for editing a banner
        $('.edit-btn').on('click', function() {
            var bannerId = $(this).data('id'); // Get the banner ID
            $.ajax({
                url: '<?php echo site_url('admin/home/edit_banner/'); ?>' + bannerId,
                method: 'GET',
                success: function(response) {
                    var data = JSON.parse(response);

                    // Set modal to Edit mode
                    $('#bannerModalLabel').text('Edit Banner');
                    $('#bannerForm').attr('action', '<?php echo site_url('admin/home/update'); ?>');
                    $('#banner_id').val(data.id);
                    $('#slogan').val(data.slogan);
                    $('#is_home_page').val(data.is_home_page);

                    // Set status based on data.status value
                    if (data.status == 'active' || data.status == 1) {
                        $('#status').val('active');
                    } else {
                        $('#status').val('inactive');
                    }

                    // Optionally, if you want to show the current image:
                    if (data.image) {
                        // If you want to display the current image on edit
                        $('#current_image').html('<img src="' + data.image + '" alt="Current Image" class="img-fluid mb-2" style="max-width: 150px;">');
                    } else {
                        $('#current_image').html('');
                    }

                    // Show modal
                    $('#bannerModal').modal('show');
                }
            });
        });

        // Handle form submission (Add/Edit)
        $('#bannerForm').on('submit', function(e) {
            e.preventDefault(); // Prevent default form submission

            var formData = new FormData(this);

            $.ajax({
                url: $(this).attr('action'),
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    var res = JSON.parse(response);
                    if (res.success) {
                        alert(res.message);
                        $('#bannerModal').modal('hide');
                        location.reload(); // Optionally reload the page to reflect changes
                    } else {
                        alert('Error: ' + res.message);
                    }
                },
                error: function() {
                    alert('Error submitting form.');
                }
            });
        });
    });
</script>


<?php $this->load->view('admin/layout/footer'); ?>
