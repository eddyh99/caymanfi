
<?php if($bank == 'bankaccount'){?>
    <main>
        <!-- Start Banner -->
        <section id="banner-landing" class="wrapper">
            <div class="bank-banner">
                <img src="<?= base_url()?>assets/img/banner-bank.webp" width="100%" class="pt-5 d-none d-md-block" alt="banner img">
                <img src="<?= base_url()?>assets/img/banner-bank-m.webp" width="100%" class="pt-5 d-block d-md-none" alt="banner img">
                <h1 class="text-white text-center fw-bold w-75">
                    The Banking That Breaks Down Barriers.
                </h1>
            </div>
            <div class="container col-12 mx-auto my-5">
                <section class="wrapper">
                    <div class="container">
                        <div class="d-flex  flex-column flex-lg-row justify-content-around my-5 pb-5">
                            <div class="card-bank-wrap d-flex flex-column align-items-start justify-content-start mb-0 pb-5 mb-lg-5 pb-lg-0">
                                <div class="card card-bank-landing-one aktif mx-3 position-relative">
                                    <div class="card-body card-bank-landing position-relative ">
                                        <h5 class="card-title text-center fw-semibold mt-4">
                                            <span class="fw-bold">
                                                Encrypted 
                                            </span>
                                            <br>
                                            Bank Account To Bearer
                                        </h5>
                                        <p class="text-center mt-3">
                                            Encrypted bank account are designed for those who are looking for security and confidenciality in the financial sector.
                                        </p>
                                    </div>
                                </div>
                                <a href="#" class="text-white bg-black py-4 px-5 mx-auto see-more-bank">
                                    SEE MORE
                                </a>
                            </div>

                            <div class="card-bank-wrap d-flex flex-column align-items-start justify-content-start mb-0 pb-5 mb-lg-5 pb-lg-0">
                                <div class="card card-bank-landing-one mx-3 position-relative">
                                    <div class="card-body card-bank-landing position-relative">
                                        <h5 class="card-title text-center fw-semibold mt-4">
                                            <span class="fw-bold">
                                                Visa 
                                            </span>
                                            <br>
                                            Debit Cards
                                        </h5>
                                        <p class="text-center mt-3">
                                            Our Visa debit card allows clients to pay, simply and securely, in person or online.
                                        </p>
                                    </div>
                                </div>
                                <a href="<?= base_url()?>link/link_bank?bank=<?= base64_encode('bankdebitcards') ?>" class="text-white bg-black py-4 px-5 mx-auto see-more-bank">
                                    SEE MORE
                                </a>
                            </div>

                            <div class="card-bank-wrap d-flex flex-column align-items-start justify-content-start mb-0 pb-5 mb-lg-5 pb-lg-0">
                                <div class="card card-bank-landing-one mx-3 position-relative">
                                    <div class="card-body card-bank-landing position-relative ">
                                        <h5 class="card-title text-center fw-semibold mt-4">
                                            <span class="fw-bold">
                                            FIAT
                                            </span>
                                            <br>
                                             Currencies Exchange
                                        </h5>
                                        <p class="text-center mt-3">
                                            Convert currencies  at the real exchange rate without any fee directly from you online banking.
                                        </p>
                                    </div>
                                </div>
                                <a href="<?= base_url()?>link/link_bank?bank=<?= base64_encode('bankfiat') ?>" class="text-white bg-black py-4 px-5 mx-auto see-more-bank">
                                    SEE MORE
                                </a>
                            </div>


                        </div>
                    </div>
                </section>
            </div>
        </section>
        <!-- End Banner -->


        <!-- Start Encrypted Bank Account -->
        <section id="card-landing" class="wrapper">
            <div class="container">
                <div class="col-12 col-lg-8 mx-auto">
                    <h3 class="text-center pt-5 pb-3 fst-italic fw-normal text-navbar-cayman">Encrypted Bank account</h3>
                    <p class="text-center pb-5">
                        Cayman remain one of few country in where still possible open an encrypted bank account to bearer, it mean that our company is able to provide to his clients anonymous multi currencies bank account, as we are  exempt from the KYC procedure.
                    </p>
                </div>
            </div>
        </section>
        <!-- End Encrypted Bank Account -->

        <!-- Start Short Code -->
        <section id="debit-card" class="wrapper my-5 py-5">
            <div class="container mt-5">
                <div class="row d-flex align-items-center">
                    <div class="col-12 col-lg-5">
                        <img class="img-fluid d-block mx-auto" src="<?= base_url()?>assets/img/img-3.webp" alt="visa card">
                    </div>
                    <div class="col-12 col-lg-7 d-flex flex-column justify-content-center align-items-end">
                        <div class=" ency-bank-box">
                            <h6 class="fw-semibold">Short code provided to protect your anonimity</h6>
                            <p>
                                The short code  is the equivalent of an European IBAN or a account number.
                                The ownership of the short code and the ownership of the asset are identify thanks to the email and password entered at account opening request.        
                            </p>
                        </div>
                        <div class=" ency-bank-box">
                            <h6 class="fw-semibold"> Transactions without worry, easily and safety in total privacy </h6>
                            <p>To maximize the privacy level of the clients, all the transactions from and to external bank account  will be  menage and processed by several  payments and collection  gateways of third parties</p>
                        </div>
                        <div class=" ency-bank-box">
                            <h6 class="fw-semibold">We avoid Anti-Money Laundering (AML) compliance policy</h6>
                            <p>Our company not carry out Anti-Money Laundering (AML) compliance policy, as it legally makes use of the AML which, mandatory by law, is carried out by the banking institution that introduced fiat into the banking circuit.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Short Code  -->

        <!-- Start Immediate Access -->
        <?php $this->load->view("tamplate/form-landing"); ?>
        <!-- End Immediate Access -->

    </main>
<?php } elseif($bank == 'bankdebitcards') {?>
    <main>
        <!-- Start Banner -->
        <section id="banner-landing" class="wrapper">
            <div class="bank-banner">
                <img src="<?= base_url()?>assets/img/banner-bank.webp" width="100%" class="pt-5 d-none d-md-block" alt="banner img">
                <img src="<?= base_url()?>assets/img/banner-bank-m.webp" width="100%" class="pt-5 d-block d-md-none" alt="banner img">
                <h1 class="text-white text-center fw-bold w-75">
                    The Banking That Breaks Down Barriers.
                </h1>
            </div>
            <div class="container col-12 mx-auto my-5">
                <section class="wrapper">
                    <div class="container">
                        <div class="d-flex  flex-column flex-lg-row justify-content-around my-5 pb-5">
                                <div class="card-bank-wrap d-flex flex-column align-items-start justify-content-start mb-0 pb-5 mb-lg-5 pb-lg-0">
                                    <div class="card card-bank-landing-one mx-3 position-relative">
                                        <div class="card-body card-bank-landing position-relative">
                                            <h5 class="card-title text-center fw-semibold mt-4">
                                                <span class="fw-bold">
                                                    Encrypted 
                                                </span>
                                                <br>
                                                Bank Account To Bearer
                                            </h5>
                                            <p class="text-center mt-3">
                                                Encrypted bank account are designed for those who are looking for security and confidenciality in the financial sector.
                                            </p>
                                        </div>
                                    </div>
                                    <a href="<?= base_url()?>link/link_bank?bank=<?= base64_encode('bankaccount') ?>" class="text-white bg-black py-4 px-5 mx-auto see-more-bank">
                                        SEE MORE
                                    </a>
                                </div>

                                <div class="card-bank-wrap d-flex flex-column align-items-start justify-content-start mb-0 pb-5 mb-lg-5 pb-lg-0">
                                    <div class="card card-bank-landing-one aktif mx-3 position-relative">
                                        <div class="card-body card-bank-landing position-relative ">
                                            <h5 class="card-title text-center fw-semibold mt-4">
                                                <span class="fw-bold">
                                                    Visa 
                                                </span>
                                                <br>
                                                Debit Cards
                                            </h5>
                                            <p class="text-center mt-3">
                                            Our Visa debit card allows clients to pay, simply and securely, in person or online.
                                            </p>
                                        </div>
                                    </div>
                                    <a href="#" class="text-white bg-black py-4 px-5 mx-auto see-more-bank">
                                        SEE MORE
                                    </a>
                                </div>

                                <div class="card-bank-wrap d-flex flex-column align-items-start justify-content-start mb-0 pb-5 mb-lg-5 pb-lg-0">
                                    <div class="card card-bank-landing-one mx-3 position-relative">
                                        <div class="card-body card-bank-landing position-relative ">
                                            <h5 class="card-title text-center fw-semibold mt-4">
                                                <span class="fw-bold">
                                                FIAT
                                                </span>
                                                <br>
                                                Currencies Exchange
                                            </h5>
                                            <p class="text-center mt-3">
                                                Convert currencies  at the real exchange rate without any fee directly from you online banking.
                                            </p>
                                        </div>
                                    </div>
                                    <a href="<?= base_url()?>link/link_bank?bank=<?= base64_encode('bankfiat') ?>" class="text-white bg-black py-4 px-5 mx-auto see-more-bank">
                                        SEE MORE
                                    </a>
                                </div>


                            </div>
                        </div>
                </section>
            </div>
        </section>
        <!-- End Banner -->


        <!-- Start Encrypted Bank Account -->
        <section id="card-landing" class="wrapper">
            <div class="container">
                <div class="col-12 col-lg-8 mx-auto">
                    <h3 class="text-center pt-5 pb-3 fst-italic fw-normal text-navbar-cayman">
                        Visa Debit Cards
                    </h3>
                    <p class="text-center pb-5">
                        Our anonymous debit card is suitable for those who want to protect their personal data; with it clients can use all the services that a card requires without disclosing their financial situations.
                    </p>
                </div>
            </div>
        </section>
        <!-- End Encrypted Bank Account -->

        <!-- Start Short Code -->
        <section id="debit-card" class="wrapper my-5 py-5">
            <div class="container mt-5">
                <div class="row d-flex align-items-center">
                    <div class="col-12 col-lg-5">
                        <img class="img-fluid d-block mx-auto" src="<?= base_url()?>assets/img/img-4.webp" alt="visa card">
                    </div>
                    <div class="bank-checked col-12 col-lg-7 mt-4 mt-lg-0 d-flex flex-column justify-content-center align-items-start">
                        <ul>
                            <li>
                                Card can be virtual or physical.
                            </li>
                            <li>
                                The card is a rechargeable Visa, that can be topped up directly from the bank account.
                            </li>
                            <li>
                                Balance and history can be consulted directly from the Online banking.
                            </li>
                            <li>
                                Worldwide purchase payments, in person or online.
                            </li>
                            <li>
                                Funds are withdraw-able from any country.
                            </li>
                            <li>
                                Suspension and blocking in case of loss through the 24h Support service.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Short Code  -->

        <!-- Start Immediate Access -->
        <?php $this->load->view("tamplate/form-landing"); ?>
        <!-- End Immediate Access -->

    </main>
<?php } elseif($bank == 'bankfiat') {?>
    <main>
        <!-- Start Banner -->
        <section id="banner-landing" class="wrapper">
            <div class="bank-banner">
                <img src="<?= base_url()?>assets/img/banner-bank.webp" width="100%" class="pt-5 d-none d-md-block" alt="banner img">
                <img src="<?= base_url()?>assets/img/banner-bank-m.webp" width="100%" class="pt-5 d-block d-md-none" alt="banner img">
                <h1 class="text-white text-center fw-bold w-75">
                    The Banking That Breaks Down Barriers.
                </h1>
            </div>
            <div class="container col-12 mx-auto my-5">
                <section class="wrapper">
                    <div class="container">
                        <div class="d-flex  flex-column flex-lg-row justify-content-around my-5 pb-5">
                                <div class="card-bank-wrap d-flex flex-column align-items-start justify-content-start mb-0 pb-5 mb-lg-5 pb-lg-0">
                                    <div class="card card-bank-landing-one mx-3 position-relative">
                                        <div class="card-body card-bank-landing position-relative ">
                                            <h5 class="card-title text-center fw-semibold mt-4">
                                                <span class="fw-bold">
                                                    Encrypted 
                                                </span>
                                                <br>
                                                Bank Account To Bearer
                                            </h5>
                                            <p class="text-center mt-3">
                                                Encrypted bank account are designed for those who are looking for security and confidenciality in the financial sector.
                                            </p>
                                        </div>
                                    </div>
                                    <a href="<?= base_url()?>link/link_bank?bank=<?= base64_encode('bankaccount') ?>" class="text-white bg-black py-4 px-5 mx-auto see-more-bank">
                                        SEE MORE
                                    </a>
                                </div>

                                <div class="card-bank-wrap d-flex flex-column align-items-start justify-content-start mb-0 pb-5 mb-lg-5 pb-lg-0">
                                    <div class="card card-bank-landing-one mx-3 position-relative">
                                        <div class="card-body card-bank-landing position-relative ">
                                            <h5 class="card-title text-center fw-semibold mt-4">
                                                <span class="fw-bold">
                                                    Visa 
                                                </span>
                                                <br>
                                                Debit Cards
                                            </h5>
                                            <p class="text-center mt-3">
                                            Our Visa debit card allows clients to pay, simply and securely, in person or online.
                                            </p>
                                        </div>
                                    </div>
                                    <a href="<?= base_url()?>link/link_bank?bank=<?= base64_encode('bankdebitcards') ?>" class="text-white bg-black py-4 px-5 mx-auto see-more-bank">
                                        SEE MORE
                                    </a>
                                </div>

                                <div class="card-bank-wrap d-flex flex-column align-items-start justify-content-start mb-0 pb-5 mb-lg-5 pb-lg-0">
                                    <div class="card card-bank-landing-one aktif mx-3 position-relative">
                                        <div class="card-body card-bank-landing position-relative ">
                                            <h5 class="card-title text-center fw-semibold mt-4">
                                                <span class="fw-bold">
                                                FIAT
                                                </span>
                                                <br>
                                                Currencies Exchange
                                            </h5>
                                            <p class="text-center mt-3">
                                                Convert currencies  at the real exchange rate without any fee directly from you online banking.
                                            </p>
                                        </div>
                                    </div>
                                    <a href="#" class="text-white bg-black py-4 px-5 mx-auto see-more-bank">
                                        SEE MORE
                                    </a>
                                </div>


                            </div>
                        </div>
                </section>
            </div>
        </section>
        <!-- End Banner -->


        <!-- Start Encrypted Bank Account -->
        <section id="card-landing" class="wrapper">
            <div class="container">
                <div class="col-12 col-lg-8 mx-auto">
                    <h3 class="text-center pt-5 pb-3 fst-italic fw-normal text-navbar-cayman">
                        FIAT Currencies Exchange
                    </h3>
                    <p class="text-center pb-5">
                        From our multi currencies bank account clients can instantly convert one of their FIAT balances in over 40 currencies to easily pay worldwide directly from the online banking.
                    </p>
                </div>
            </div>
        </section>
        <!-- End Encrypted Bank Account -->

        <!-- Start Short Code -->
        <section id="debit-card" class="wrapper my-5 py-5">
            <div class="container mt-5">
                <div class="row d-flex align-items-center">
                    <div class="col-12 col-lg-5">
                        <img class="img-fluid d-block mx-auto" src="<?= base_url()?>assets/img/img-5.webp" alt="visa card">
                    </div>
                    <div class="bank-checked col-12 col-lg-7 mt-4 mt-lg-0 d-flex flex-column justify-content-center align-items-start">
                        <ul>
                            <li>
                                Real exchange rates.
                            </li>
                            <li>
                                Swap currencies in one click.
                            </li>
                            <li>               
                                Easy worldwide payments from wherever you are.
                            </li>
                            <li>
                                Custody and sending of money in more than 40 currencies.
                            </li>
                            <li>
                                Forex of FIAT
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Short Code  -->

        <!-- Start Immediate Access -->
        <?php $this->load->view("tamplate/form-landing"); ?>
        <!-- End Immediate Access -->

    </main>
<?php } elseif($bank == 'bankgeneral'){?>
    <main>
        <!-- Start Banner -->
        <section id="banner-landing" class="wrapper">
            <div class="bank-banner">
                <img src="<?= base_url()?>assets/img/banner-bank.webp" width="100%" class="pt-5 d-none d-md-block" alt="banner img">
                <img src="<?= base_url()?>assets/img/banner-bank-m.webp" width="100%" class="pt-5 d-block d-md-none" alt="banner img">
                <h1 class="text-white text-center fw-bold w-75">
                    The Banking That Breaks Down Barriers.
                </h1>
            </div>
            <div class="container col-12 mx-auto my-5">
                <section class="wrapper">
                    <div class="container">
                        <div class="d-flex  flex-column flex-lg-row justify-content-around my-5 pb-5">
                                <div class="card-bank-wrap d-flex flex-column align-items-start justify-content-start mb-0 pb-5 mb-lg-5 pb-lg-0">
                                    <div class="card card-bank-landing-one mx-3 position-relative">
                                        <div class="card-body card-bank-landing position-relative ">
                                            <h5 class="card-title text-center fw-semibold mt-4">
                                                <span class="fw-bold">
                                                    Encrypted 
                                                </span>
                                                <br>
                                                Bank Account To Bearer
                                            </h5>
                                            <p class="text-center mt-3">
                                                Encrypted bank account are designed for those who are looking for security and confidenciality in the financial sector.
                                            </p>
                                        </div>
                                    </div>
                                    <a href="<?= base_url()?>link/link_bank?bank=<?= base64_encode('bankaccount') ?>" class="text-white bg-black py-4 px-5 mx-auto see-more-bank">
                                        SEE MORE
                                    </a>
                                </div>

                                <div class="card-bank-wrap d-flex flex-column align-items-start justify-content-start mb-0 pb-5 mb-lg-5 pb-lg-0">
                                    <div class="card card-bank-landing-one mx-3 position-relative">
                                        <div class="card-body card-bank-landing position-relative ">
                                            <h5 class="card-title text-center fw-semibold mt-4">
                                                <span class="fw-bold">
                                                    Visa 
                                                </span>
                                                <br>
                                                Debit Cards
                                            </h5>
                                            <p class="text-center mt-3">
                                            Our Visa debit card allows clients to pay, simply and securely, in person or online.
                                            </p>
                                        </div>
                                    </div>
                                    <a href="<?= base_url()?>link/link_bank?bank=<?= base64_encode('bankdebitcards') ?>" class="text-white bg-black py-4 px-5 mx-auto see-more-bank">
                                        SEE MORE
                                    </a>
                                </div>

                                <div class="card-bank-wrap d-flex flex-column align-items-start justify-content-start mb-0 pb-5 mb-lg-5 pb-lg-0">
                                    <div class="card card-bank-landing-one mx-3 position-relative">
                                        <div class="card-body card-bank-landing position-relative ">
                                            <h5 class="card-title text-center fw-semibold mt-4">
                                                <span class="fw-bold">
                                                FIAT
                                                </span>
                                                <br>
                                                Currencies Exchange
                                            </h5>
                                            <p class="text-center mt-3">
                                                Convert currencies  at the real exchange rate without any fee directly from you online banking.
                                            </p>
                                        </div>
                                    </div>
                                    <a href="<?= base_url()?>link/link_bank?bank=<?= base64_encode('bankfiat') ?>" class="text-white bg-black py-4 px-5 mx-auto see-more-bank">
                                        SEE MORE
                                    </a>
                                </div>
                            </div>
                        </div>
                </section>
            </div>
        </section>
        <!-- End Banner -->

        <!-- Start Immediate Access -->
        <?php $this->load->view("tamplate/form-landing"); ?>
        <!-- End Immediate Access -->

    </main>
<?php } ?>


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