<main>
    <!-- Start Banner -->
    <section id="banner-landing" class="wrapper">
        <div class="bank-banner">
            <img src="<?= base_url()?>assets/img/banner-workus.webp" width="100%" class="pt-5 d-none d-md-block" alt="banner img">
            <img src="<?= base_url()?>assets/img/banner-workus-m.webp" width="100%" class="pt-5 d-block d-md-none" alt="banner img">
            <h1 class="text-white text-center fw-bold w-75">
                The best way to predict the future is to create it
            </h1>
        </div>
    </section>
    <!-- End Banner -->


    <!-- Start Encrypted Bank Account -->
    <section id="card-landing" class="wrapper">
        <div class="container">
            <div class="col-12 col-lg-8 mx-auto">
                <h3 class="text-center pt-5 pb-3 fst-italic fw-semibold text-color-link">
                    Become An Owner Of Our Online Branch
                </h3>
                <p class="text-center pb-5 fst-italic text-color-link">
                    Cayman financial service help enterpreneur to get inside the bank and crypto exchange fields by allowing them to open our online branch
                </p>
            </div>
        </div>
    </section>
    <!-- End Encrypted Bank Account -->

    <section class="my-5 py-5">
        <div class="container">
            <div class="row text-color-link">
                <div class="col-7 pe-5">
                    <p>
                        According to research by Insider Intelligence, 18% of the US population (48 million people) will start banking exclusively with digital banks by 2024. Data from Research and Markets shows that the global neo-banking CAGR will increase by 45% in 2025.
                        <br><br>
                        In the global neobanking market, enterprise applications account for over 52% of the global revenue, which is about 47.4 billion USD. This signifies a lot of promise for digital banking.
                    </p>
                </div>
                <div class="col-5">
                    <img src="<?= base_url()?>assets/img/img-12.webp" class="img-fluid" alt="img-12">
                </div>
                <div class="col-12 mt-5">
                    <p class="text-center">
                        Building a digital bank requires proper planning, execution, and attention to the minutest details. But first, who want to open a neo bank need to develop a concept, obtain the required licences, and get funding. They also need to choose the technology stack and monetization models to make the app profitable, but with Cayman financial institue future bank owner avoid all this complicated and expensives steps.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Start Quotes -->
    <section id="card-landing" class="wrapper">
        <div class="container">
            <div class="col-12 col-lg-8 mx-auto">
                <h3 class="text-center pt-5 pb-3 fst-italic fw-normal text-navbar-cayman">
                    ‘’As long as you’re going to be thinking anyway, think big’’
                </h3>
                <p class="text-center pb-5 text-navbar-cayman">
                    -Donald Trump-
                </p>
            </div>
        </div>
    </section>
    <!-- End Quotes -->

    <section class="mt-5 pt-5">
        <div class="container">
            <div class="row text-color-link">
                <div class="col-12 pe-5">
                    <p>
                        Cayman Financial Institute allows enterpreneur that want to get in the bank and crypto exchange filelds to open an online branch with a crypto exchange integrated.
                        <br>
                        Our future affiliateS don’t have to worries about find funds, buy licences, develop and update softwers, support clients etc..
                    </p>
                    <p class="fw-semibold">
                        Future bank owner  just have to  : 
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="mb-5 py-5">
        <div class="container">
            <div class="row text-navbar-cayman">
                <div class="col-11 col-lg-6">
                    <div class="b-workus d-flex align-items-center justify-content-start">
                        <img src="<?= base_url()?>assets/img/img-13.png" alt="img-13">
                        <p class="ms-5 mt-3">Identify the target audience</p>
                    </div>                    
                </div>
                <div class="col-11 col-lg-6">
                    <div class="b-workus d-flex align-items-center justify-content-start">
                        <img src="<?= base_url()?>assets/img/img-14.png" alt="img-14">
                        <p class="ms-5 mt-3">Choose the name of the bank</p>
                    </div>                    
                </div>
                <div class="col-11 col-lg-6">
                    <div class="b-workus d-flex align-items-center justify-content-start">
                    <img src="<?= base_url()?>assets/img/img-15.png" alt="img-15">
                        <p class="ms-5 mt-3">Enter the bank and crypto exchange price commission that want for their clients from where get the profit</p>
                    </div>                    
                </div>
                <div class="col-11 col-lg-6">
                    <div class="b-workus d-flex align-items-center justify-content-start">
                    <img src="<?= base_url()?>assets/img/img-16.png" alt="img-16">
                        <p class="ms-5 mt-3">Take care about marketing and advertising</p>
                    </div>                    
                </div>
            </div>
            <div class="mt-3 mt-lg-5 ms-3 ms-lg-5">
                <a href="<?= base_url()?>link/price_list" class="text-success">
                    <i class="fa-solid fs-5 fa-circle-arrow-right"></i>
                    <span class="fs-5 f-jakarta ms-2">
                        Discover prices
                    </span>
                </a>
            </div>
        </div>
    </section>

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