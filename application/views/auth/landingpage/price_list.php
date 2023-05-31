<main>
  
    <!-- Start Heading Back-Link -->
    <section id="" class="wrapper mt-5 pt-5">
        <div class="container mt-5 ">
            <div class="row">
                <div class="col-12 d-flex justify-content-around align-items-center">
                    <div class="col-4">
                        <a href="<?= base_url()?>link/work_with_us">
                            <img src="<?= base_url()?>assets/img/back-link.png" alt="back-link">
                        </a>
                    </div>
                    <div class="col-4 text-center">
                        <h1 class="fw-bold">Price List</h1>
                    </div>
                    <div class="col-4">

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Heading Back-Link -->

    <!-- Start Price List  -->
    <section class="mb-5 py-5">
        <div class="container">
            <div class="row text-navbar-cayman">
                <div class="col-11 mx-auto col-lg-6">
                    <div class="card-price f-inter d-flex flex-column justify-content-start">
                        <div class="d-flex align-items-center justify-content-between mb-5">
                            <div>
                                <h6 class="fw-bold">Title</h6>
                                <p class="me-5 pe-5">For individuals that need advanced recording & editing.</p>
                            </div>
                            <div>
                                <h4 class="fw-bold">$150</h4>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-5">
                            <div>
                                <h6 class="fw-bold">Title</h6>
                                <p class="me-5 pe-5">For individuals that need </p>
                            </div>
                            <div>
                                <h4 class="fw-bold">$150</h4>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-5">
                            <div>
                                <h6 class="fw-bold">Title</h6>
                                <p class="me-5 pe-5">For individuals that need advanced recording & editing.</p>
                            </div>
                            <div>
                                <h4 class="fw-bold">$150</h4>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-5">
                            <div>

                            </div>
                            <div>
                                <h3 class="fw-bold text-color-link-grad">$450</h3>
                            </div>
                        </div>
                    </div>                    
                </div>
                <div class="col-11 mx-auto col-lg-6">
                <div class="card-price f-inter d-flex flex-column justify-content-start">
                        <div class="d-flex align-items-center justify-content-between mb-5">
                            <div>
                                <h6 class="fw-bold">Title</h6>
                                <p class="me-5 pe-5">For individuals that need advanced recording & editing.</p>
                            </div>
                            <div>
                                <h4 class="fw-bold">$150</h4>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-5">
                            <div>
                                <h6 class="fw-bold">Title</h6>
                                <p class="me-5 pe-5">For individuals that need </p>
                            </div>
                            <div>
                                <h4 class="fw-bold">$150</h4>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-5">
                            <div>
                                <h6 class="fw-bold">Title</h6>
                                <p class="me-5 pe-5">For individuals that need advanced recording & editing.</p>
                            </div>
                            <div>
                                <h4 class="fw-bold">$150</h4>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-5">
                            <div>

                            </div>
                            <div>
                                <h3 class="fw-bold text-color-link-grad">$450</h3>
                            </div>
                        </div>
                    </div>                   
                </div>
        </div>
    </section>
    <!-- End Price List  -->




    <!-- Start Immediate Access -->
    <?php $this->load->view("tamplate/form-landing"); ?>
    <!-- End Immediate Access -->

</main>

<a href="#top" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<?php if (@isset($_SESSION["success"])) { ?>
    <div class="alert alert-success alert-dismissible" id="success-alert" style="display: grid; position: fixed; top: 10px; z-index: 99999; padding: 1rem;
left: 0;
right: 0;
max-width: 300px;
margin: 0 auto;">
        <?= $_SESSION["success"]; ?>
    </div>
<?php } ?>

<?php if (@isset($_SESSION["failed"])) { ?>
    <div class="alert alert-danger alert-dismissible" id="danger-alert" style="display: grid; position: fixed; top: 10px; z-index: 99999; padding: 1rem;
left: 0;
right: 0;
max-width: 300px;
margin: 0 auto;">
        <?= $_SESSION["failed"]; ?>
    </div>
<?php } ?>