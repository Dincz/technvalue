<?php
$this->load->view('admin/layout/header');
$this->load->view('admin/layout/sidebar');
?>

<div class="content-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Team Qualities</h3>
                                <!-- Alerts -->
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
                    <div class="card-tools">
                        <a href="<?php echo base_url('admin/TeamQualities/add'); ?>" class="btn btn-primary btn-sm">
                            <i class="fas fa-plus"></i> Add New Quality
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <?php if ($this->session->flashdata('success')): ?>
                        <div class="alert alert-success">
                            <?php echo $this->session->flashdata('success'); ?>
                        </div>
                    <?php endif; ?>
                    
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Icon</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($qualities as $quality): ?>
                                <tr>
                                    <td><?php echo $quality->id; ?></td>
                                    <td>
                                        <?php if ($quality->icon): ?>
                                            <img src="<?php echo base_url('uploads/career/' . $quality->icon); ?>" alt="Icon" style="max-width: 50px;">
                                        <?php endif; ?>
                                    </td>
                                    <td><?php echo $quality->title; ?></td>
                                    <td><?php echo substr($quality->description, 0, 100); ?>...</td>
                                    <td>
                                    <?php echo ($quality->status)?>


                                        
                                    </td>
                                    <td>
                                        <a href="<?php echo base_url('admin/TeamQualities/edit/' . $quality->id); ?>" 
                                           class="btn btn-info btn-sm">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="<?php echo base_url('admin/TeamQualities/delete/' . $quality->id); ?>" 
                                           class="btn btn-danger btn-sm" 
                                           onclick="return confirm('Are you sure you want to delete this quality?');">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<?php $this->load->view('admin/layout/footer'); ?>
