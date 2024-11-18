<div class="contact wrapper">
    <div class="row">
        <div class="col-5 d-none d-lg-block bg-contact-wrap position-relative">
            <div class="bg-contact d-flex flex-column justify-content-between align-items-center">
                <div class="logo mx-auto">
                    <img class="img-fluid" src="<?= base_url() ?>assets/img/logo.png" alt="logo">              
                </div>
                <div class="bg-dollar">
                    <img src="<?= base_url()?>assets/img/bg-contactus.png" alt="bg-contactus">
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-7 my-2 pt-3 px-5">  
            <form action="<?= base_url() ?>homepage/booking_summary" method="POST">
                <div class="img-fluid wrapper-field mt-5">
                    <h1 class="fw-bold f-odor text-uppercase text-center my-5" style="color: #012912;">Thanks for your <br> request</h1>
                    
                    <div class="bg-field d-flex flex-column justify-content-center align-items-center">
                        <p class="text-center" style="color: #012912;">
                            Thanks, <br>
                            our team will examine your request soon.
                        </p>      
                        <div>
                            <img class="img-fluid" style="width: 400px;" src="<?= base_url() ?>assets/img/logo.png" alt="logo">
                        </div>  
                        <div class="mt-3">
                            <a href="<?= base_url() ?>" class="btn btn-footer-contactform">HOME</a>
                        </div>
                    </div>
                    
                </div>
            </form>
        </div>
    </div>
</div>
