<div class="breadcumb-wrapper" data-bg-src="<?= base_url('uploads/banners/') . $banner['image']; ?>">

<div class="container z-index-common">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Career</h1>
            <div class="breadcumb-menu-wrap">
                <ul class="breadcumb-menu">
                    <li><a href="index.html">Home</a></li>
                    <li>Career - Job Detail </li>
                    <li><?php echo $content[0]->title; ?></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Detail - <?php echo $job->title; ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-5">
        <div class="row p-4 border rounded shadow-sm">
            <div class="col-md-6 col-12">
                <div class="">
                    <h3 class="mb-4">Job Description</h3>

                    <div class="mb-3">
                        <strong>Post for:</strong> <?php echo $content[0]->title; ?>
                    </div>
                    <div class="mb-3">
                        <strong>Department:</strong> <?php echo $content[0]->department; ?>
                    </div>
                    <div class="mb-3">
                        <strong>Location:</strong> <?php echo $content[0]->location; ?>
                    </div>

                    <h5 class="mt-4">Responsibilities:</h5>
                    <ul class="list-unstyled">
                        <?php 
                        $responsibilities = explode("\n", $content[0]->responsibilities);
                        foreach ($responsibilities as $responsibility) {
                            echo "<li>{$responsibility}</li>";
                        }
                        ?>
                    </ul>

                    <div class="mt-4">
                        <p><strong>Experience:</strong> <?php echo $content[0]->experience; ?></p>
                        <p><strong>Qualification:</strong> <?php echo $content[0]->qualification; ?></p>
                    </div>
                    <a href="<?php echo base_url('apply/' . $content[0]->id); ?>" class="vs-btn style3">Apply Now</a>
                </div>
            </div>
            <div class="col-12 col-md-6 ">
                <img src="<?php echo base_url('uploads/career/' . $content[0]->image_url); ?>" alt="<?php echo $content[0]->title; ?>" class="w-100">
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>





