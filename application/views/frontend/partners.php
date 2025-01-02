<?php $this->load->view('layout/header') ?>


<style>
    .square-holder {
        padding: 30px;
        border: 1px solid #cecece;
        align-items: center;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 20px;
        background-color: #f1f1f1;
        min-height: 200px
    }

    .square-holder img {
        max-width: 100%;
        filter: grayscale(100%);
        transition: all 0.3s;
    }

    .square-holder:hover img {
        filter: none;
    }
</style>

<section class="section section-default mt-none mb-none">
    <div class="container">
        <h2 class="mb-sm text-center">Our <strong>Partners</strong></h2>
        <strong>
            <div class="row">
                <?php foreach ($partners as $partner): ?>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="square-holder">
                            <img alt="<?php echo $partner->name; ?>" src="<?php echo base_url('uploads/brand/' . $partner->image); ?>" loading="lazy"/>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </strong>
    </div>
</section>

<?php $this->load->view('layout/footer') ?>