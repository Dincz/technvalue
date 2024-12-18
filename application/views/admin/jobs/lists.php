<?php
$this->load->view('admin/layout/header');
$this->load->view('admin/layout/sidebar');
?>


<div class="content-body">     
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Listings</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Job Listings</h2>
            <a href="<?php echo base_url('admin/jobs/add'); ?>" class="btn btn-primary">Add New Job</a>
        </div>
        
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Department</th>
                        <th>Image</th>
                        <th>Location</th>
                        <th>Experience</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($jobs as $job): ?>
                    <tr>
                        <td><?php echo $job->title; ?></td>
                        <td><?php echo $job->department; ?></td>
                        <td><img src="<?php echo base_url('uploads/career/' . $job->image_url); ?>" alt="Job Image" style="max-width: 100px;"></td>
                        <td><?php echo $job->location; ?></td>
                        <td><?php echo $job->experience; ?></td>
                        <td>
                            <a href="<?php echo base_url('admin/jobs/edit/' . $job->id); ?>" class="btn btn-sm btn-warning">Edit</a>
                            <a href="<?php echo base_url('admin/jobs/delete/' . $job->id); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this job?')">Delete</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
                    </div>


<!--**********************************Content body End***********************************-->
<!--**********************************footer Start***********************************-->
<?php $this->load->view('admin/layout/footer'); ?>
<!--**********************************footer End***********************************-->