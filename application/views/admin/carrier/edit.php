<?php
$this->load->view('admin/layout/header');
$this->load->view('admin/layout/sidebar');
?>
<!-- View: admin/carrier/view.php -->
<div>
    <h2><?php echo $title; ?></h2>
    <?php
    if (isset($contents[0]->mkeditor)):
        $plain_text = $contents[0]->mkeditor;
        ?>
    </div>
<?php endif; ?>
</div>
<html>

<head>
    <title>Ckeditor</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
</head>

<body>
    <div class="container">
        <br>
        <div class="box">
            <form method="post" id="ckeditorForm" action="<?php echo base_url("admin/Carrier_Content/update"); ?>">
                <div class="form-group">
                    <textarea id="content" name="content" class="form-control">
                    <?php echo $plain_text; ?>
                    </textarea>
                </div>


                <div class="form-group">
                    <button name="submit" type="submit" class="btn btn-primary btn-block">Update</button>
                </div>
            </form>
            <div class="error"><?php if (!empty($plain_text)) {
                echo "Error";
            } ?></div>
        </div>
    </div>
</body>

</html>
<?php $this->load->view('admin/layout/footer'); ?>

<script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    let editor;

    ClassicEditor
        .create(document.querySelector('#content'))
        .then(newEditor => {
            editor = newEditor;
        })
        .catch(error => {
            console.error(error);
        });
</script>