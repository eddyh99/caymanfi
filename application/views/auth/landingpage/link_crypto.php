<?php if($crypto == 'cryptononcustodial'){?>
    <main>
        <!-- Start Banner -->
        <section id="banner-landing" class="wrapper">
            <div class="bank-banner">
                <img src="<?= base_url()?>assets/img/banner-crypto.webp" width="100%" class="pt-5 d-none d-md-block" alt="banner img">
                <img src="<?= base_url()?>assets/img/banner-crypto-m.webp" width="100%" class="pt-5 d-block d-md-none" alt="banner img">
                <h1 class="text-white text-center fw-bold w-75">
                    Banking for a new generation
                </h1>
            </div>
            <div class="container col-12 mx-auto my-5">
                <section class="wrapper">
                    <div class="container">
                        <div class="d-flex  flex-column flex-lg-row justify-content-around my-5 pb-5">

                            <div class="card-bank-wrap d-flex flex-column align-items-start justify-content-start mb-0 pb-5 mb-lg-5 pb-lg-0">
                                <div class="card card-bank-landing-one aktif mx-3 position-relative">
                                    <div class="card-body card-bank-landing  position-relative">
                                        <h5 class="card-title text-center fw-semibold mt-4">
                                            <span class="fw-bold">
                                                Non Custodial 
                                            </span>
                                            <br>
                                            Wallet
                                        </h5>
                                        <p class="text-center mt-3">
                                            We provide to our clients a non custodial wallet to protect their digital assets keeping clients safe from exchanges default, and  keeping their financial anonymity.
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
                                                Trade-off Platform With   
                                            </span>
                                            <br>
                                            Shared order book
                                        </h5>
                                        <p class="text-center mt-3">
                                            Our company provides to our clients a crypto trade-off platform with shared order book to trade safely and to keep their transactions confidential and anonymous.
                                        </p>
                                    </div>
                                </div>
                                <a href="<?= base_url()?>link/link_crypto?crypto=<?= base64_encode('tradeofplatform') ?>" class="text-white bg-black py-4 px-5 mx-auto see-more-bank">
                                    SEE MORE
                                </a>
                            </div>

                            <div class="card-bank-wrap d-flex flex-column align-items-start justify-content-start mb-0 pb-5 mb-lg-5 pb-lg-0">
                                <div class="card card-bank-landing-one mx-3 position-relative">
                                    <div class="card-body card-bank-landing position-relative">
                                        <h5 class="card-title text-center fw-semibold mt-4">
                                            <span class="fw-bold">
                                                Purchase Crypto
                                            </span>
                                            <br>
                                            Using FIAT
                                        </h5>
                                        <p class="text-center mt-3">
                                            Clients are allowed to purchase and sell cryptocurrencies using FIAT currencies.
                                        </p>
                                    </div>
                                </div>
                                <a href="<?= base_url()?>link/link_crypto?crypto=<?= base64_encode('cryptofiat') ?>" class="text-white bg-black py-4 px-5 mx-auto see-more-bank">
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
                        Non Custodial Wallet 
                    </h3>
                    <p class="text-center pb-5">
                        With a non custodial wallet we give to our clients the full control of their crypto funds and crypto owners are fully responsible for managing their own funds. 
                        The user has full control of their crypto holdings, manages their own private key, and handles transactions themselves.
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
                        <img class="img-fluid d-block mx-auto" src="<?= base_url()?>assets/img/img-6.webp" alt="visa card">
                    </div>
                    <div class="bank-checked col-12 col-lg-7 mt-4 mt-lg-0 d-flex flex-column justify-content-center align-items-start">
                        <ul>
                            <li>
                                Sole control of privates keys 
                            </li>
                            <li>
                                Eliminates a third-party for the crypto custody  
                            </li>
                            <li>               
                                Protection from crypto exchanges default
                            </li>
                            <li>
                                Protection of clients anonymity 
                            </li>
                            <li>
                                Full access of the crypto funds
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
<?php } elseif($crypto == 'tradeofplatform'){?>
    <main>
        <!-- Start Banner -->
        <section id="banner-landing" class="wrapper">
            <div class="bank-banner">
                <img src="<?= base_url()?>assets/img/banner-crypto.webp" width="100%" class="pt-5 d-none d-md-block" alt="banner img">
                <img src="<?= base_url()?>assets/img/banner-crypto-m.webp" width="100%" class="pt-5 d-block d-md-none" alt="banner img">
                <h1 class="text-white text-center fw-bold w-75">
                    Banking for a new generation
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
                                                Non Custodial 
                                            </span>
                                            <br>
                                            Wallet
                                        </h5>
                                        <p class="text-center mt-3">
                                            We provide to our clients a non custodial wallet to protect their digital assets keeping clients safe from exchanges default, and  keeping their financial anonymity.
                                        </p>
                                    </div>
                                </div>
                                <a href="<?= base_url()?>link/link_crypto?crypto=<?= base64_encode('cryptononcustodial')?>" class="text-white bg-black py-4 px-5 mx-auto see-more-bank">
                                    SEE MORE
                                </a>
                            </div>

                            <div class="card-bank-wrap d-flex flex-column align-items-start justify-content-start mb-0 pb-5 mb-lg-5 pb-lg-0">
                                <div class="card card-bank-landing-one aktif mx-3 position-relative">
                                    <div class="card-body card-bank-landing position-relative">
                                        <h5 class="card-title text-center fw-semibold mt-4">
                                            <span class="fw-bold">
                                                Trade-off Platform With   
                                            </span>
                                            <br>
                                            Shared order book
                                        </h5>
                                        <p class="text-center mt-3">
                                            Our company provides to our clients a crypto trade-off platform with shared order book to trade safely and to keep their transactions confidential and anonymous.
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
                                                Purchase Crypto
                                            </span>
                                            <br>
                                            Using FIAT
                                        </h5>
                                        <p class="text-center mt-3">
                                            Clients are allowed to purchase and sell cryptocurrencies using FIAT currencies.
                                        </p>
                                    </div>
                                </div>
                                <a href="<?= base_url()?>link/link_crypto?crypto=<?= base64_encode('cryptofiat')?>" class="text-white bg-black py-4 px-5 mx-auto see-more-bank">
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
                        Trade-off Platform With Shared Order book
                    </h3>
                    <p class="text-center pb-5">
                        From our online banking clients have access to our trade off platform with a shared order book combined with a single collection and payment gateway where clients will be able to trade with all users of the order book.
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
                        <img class="img-fluid d-block mx-auto" src="<?= base_url()?>assets/img/img-7.webp" alt="visa card">
                    </div>
                    <div class="col-12 col-lg-7 d-flex flex-column justify-content-center align-items-end">
                        <div class=" ency-bank-box">
                            <h6 class="fw-semibold">Security and privacy protection </h6>
                            <p>
                                Our trade-off platform is distributed, decentralized and completely anonymous, is a safe place where cryptocurrencies buyers and sellers meet.
                                The use of the trade-off platform doesn’t require any personal document.
                                The platform has no transmission obligation to any tax office of any country and has no transparency obligation with any government.
                            </p>
                        </div>
                        <div class=" ency-bank-box">
                            <h6 class="fw-semibold">How to to trade on a trade-off plaform</h6>
                            <p>
                                On a trade-off platform, the ‘’buy’’ and ‘’sell’’ orders are just limit orders. A buy limit order will be executed only at the limit price or a lower price; and a sell limit order will be executed only at the limit price or a higher one.The price is guaranteed, but the filling of the order is not. Limit orders will be executed only if the price meets the order qualifications.    
                            </p>
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
<?php } elseif($crypto == 'cryptofiat'){?>
    <main>
        <!-- Start Banner -->
        <section id="banner-landing" class="wrapper">
            <div class="bank-banner">
                <img src="<?= base_url()?>assets/img/banner-crypto.webp" width="100%" class="pt-5 d-none d-md-block" alt="banner img">
                <img src="<?= base_url()?>assets/img/banner-crypto-m.webp" width="100%" class="pt-5 d-block d-md-none" alt="banner img">
                <h1 class="text-white text-center fw-bold w-75">
                    Banking for a new generation
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
                                                Non Custodial 
                                            </span>
                                            <br>
                                            Wallet
                                        </h5>
                                        <p class="text-center mt-3">
                                            We provide to our clients a non custodial wallet to protect their digital assets keeping clients safe from exchanges default, and  keeping their financial anonymity.
                                        </p>
                                    </div>
                                </div>
                                <a href="<?= base_url()?>link/link_crypto?crypto=<?= base64_encode('cryptononcustodial')?>" class="text-white bg-black py-4 px-5 mx-auto see-more-bank">
                                    SEE MORE
                                </a>
                            </div>

                            <div class="card-bank-wrap d-flex flex-column align-items-start justify-content-start mb-0 pb-5 mb-lg-5 pb-lg-0">
                                <div class="card card-bank-landing-one mx-3 position-relative">
                                    <div class="card-body card-bank-landing position-relative">
                                        <h5 class="card-title text-center fw-semibold mt-4">
                                            <span class="fw-bold">
                                                Trade-off Platform With   
                                            </span>
                                            <br>
                                            Shared order book
                                        </h5>
                                        <p class="text-center mt-3">
                                            Our company provides to our clients a crypto trade-off platform with shared order book to trade safely and to keep their transactions confidential and anonymous.
                                        </p>
                                    </div>
                                </div>
                                <a href="<?= base_url()?>link/link_crypto?crypto=<?= base64_encode('tradeofplatform')?>" class="text-white bg-black py-4 px-5 mx-auto see-more-bank">
                                    SEE MORE
                                </a>
                            </div>

                            <div class="card-bank-wrap d-flex flex-column align-items-start justify-content-start mb-0 pb-5 mb-lg-5 pb-lg-0">
                                <div class="card card-bank-landing-one aktif mx-3 position-relative">
                                    <div class="card-body card-bank-landing position-relative">
                                        <h5 class="card-title text-center fw-semibold mt-4">
                                            <span class="fw-bold">
                                                Purchase Crypto
                                            </span>
                                            <br>
                                            Using FIAT
                                        </h5>
                                        <p class="text-center mt-3">
                                            Clients are allowed to purchase and sell cryptocurrencies using FIAT currencies.
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
                        Purchase Crypto Using FIAT
                    </h3>
                    <p class="text-center pb-5">
                        Cayman Financial Institute for a greater protection of its clients' funds has implemented the crypto buy ans sell service using FIAT currency, thus protecting them from a possible risk of stable coin Depeg.
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
                        <img class="img-fluid d-block mx-auto" src="<?= base_url()?>assets/img/img-8.webp" alt="visa card">
                    </div>
                    <div class="bank-checked col-12 col-lg-7 mt-4 mt-lg-0 d-flex flex-column justify-content-center align-items-start">
                        <ul>
                            <li>
                                Crypto buy and sell using FIAT 
                            </li>
                            <li>
                                Possibility of Crypto currencies purchasing and selling directly from online banking
                            </li>
                            <li>               
                                Crypto purchasing from any balance of your bank account 
                            </li>
                            <li>
                                Sell your crypto and convert your funds in more than 40 Fiat Currencies 
                            </li>
                            <li>
                                Funds and earnings can be sent to any worldwide bank account even not under you name and can be send to your debit card
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
<?php } elseif($crypto == 'cryptogeneral'){?>
    <main>
        <!-- Start Banner -->
        <section id="banner-landing" class="wrapper">
            <div class="bank-banner">
                <img src="<?= base_url()?>assets/img/banner-crypto.webp" width="100%" class="pt-5 d-none d-md-block" alt="banner img">
                <img src="<?= base_url()?>assets/img/banner-crypto-m.webp" width="100%" class="pt-5 d-block d-md-none" alt="banner img">
                <h1 class="text-white text-center fw-bold w-75">
                    Banking for a new generation
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
                                                Non Custodial 
                                            </span>
                                            <br>
                                            Wallet
                                        </h5>
                                        <p class="text-center mt-3">
                                            We provide to our clients a non custodial wallet to protect their digital assets keeping clients safe from exchanges default, and  keeping their financial anonymity.
                                        </p>
                                    </div>
                                </div>
                                <a href="<?= base_url()?>link/link_crypto?crypto=<?= base64_encode('cryptononcustodial') ?>" class="text-white bg-black py-4 px-5 mx-auto see-more-bank">
                                    SEE MORE
                                </a>
                            </div>

                            <div class="card-bank-wrap d-flex flex-column align-items-start justify-content-start mb-0 pb-5 mb-lg-5 pb-lg-0">
                                <div class="card card-bank-landing-one mx-3 position-relative">
                                    <div class="card-body card-bank-landing position-relative ">
                                        <h5 class="card-title text-center fw-semibold mt-4">
                                            <span class="fw-bold">
                                                Trade-off Platform With   
                                            </span>
                                            <br>
                                            Shared order book
                                        </h5>
                                        <p class="text-center mt-3">
                                            Our company provides to our clients a crypto trade-off platform with shared order book to trade safely and to keep their transactions confidential and anonymous.
                                        </p>
                                    </div>
                                </div>
                                <a href="<?= base_url()?>link/link_crypto?crypto=<?= base64_encode('tradeofplatform') ?>" class="text-white bg-black py-4 px-5 mx-auto see-more-bank">
                                    SEE MORE
                                </a>
                            </div>

                            <div class="card-bank-wrap d-flex flex-column align-items-start justify-content-start mb-0 pb-5 mb-lg-5 pb-lg-0">
                                <div class="card card-bank-landing-one mx-3 position-relative">
                                    <div class="card-body card-bank-landing position-relative ">
                                        <h5 class="card-title text-center fw-semibold mt-4">
                                            <span class="fw-bold">
                                                Purchase Crypto
                                            </span>
                                            <br>
                                            Using FIAT
                                        </h5>
                                        <p class="text-center mt-3">
                                            Clients are allowed to purchase and sell cryptocurrencies using FIAT currencies.
                                        </p>
                                    </div>
                                </div>
                                <a href="<?= base_url()?>link/link_crypto?crypto=<?= base64_encode('cryptofiat') ?>" class="text-white bg-black py-4 px-5 mx-auto see-more-bank">
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