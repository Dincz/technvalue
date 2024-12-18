<?php
$this->load->view('admin/layout/header');
$this->load->view('admin/layout/sidebar');
?>
<!-- View: admin/carrier/view.php -->
<div class="content-body">
    
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
    <h2><?php echo $title; ?></h2>
    <?php 
    if(isset($contents[0]->mkeditor)): 
        $plain_text = $contents[0]->mkeditor;
    ?>
    <div class="content">
        <?php echo $plain_text; ?>
    </div>
    <a href="<?php echo base_url() ?>admin/Carrier_Content/editView">
    <button class="edit-btn">Edit</button>
</a>

    <?php endif; ?>
</div>

<?php $this->load->view('admin/layout/footer'); ?>

<style>
.modal {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0,0,0,0.5);
    z-index: 1000;
}
.modal-content {
    background-color: white;
    margin: 5% auto;
    padding: 20px;
    width: 80%;
    border-radius: 5px;
    max-height: 90vh;
    overflow-y: auto;
}
.edit-btn, .save-btn, .cancel-btn {
    padding: 8px 16px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    margin-right: 10px;
}
.edit-btn, .save-btn {
    background-color: #007bff;
    color: white;
}
.cancel-btn {
    background-color: #6c757d;
    color: white;
}
.button-group {
    text-align: right;
}
</style>


