<main>
        <!-- Start Banner -->
        <section id="banner-landing" class="wrapper">
            <div class="bank-banner">
                <img src="<?= base_url()?>assets/img/banner-about.webp" width="100%" class="pt-5 d-none d-md-block" alt="banner img">
                <img src="<?= base_url()?>assets/img/banner-about-m.webp" width="100%" class="pt-5 d-block d-md-none" alt="banner img">
                <h1 class=" text-center fw-bold w-75 text-white">
                    The heart of perfect financial planning
                </h1>
            </div> 
        </section>
        <!-- End Banner -->


        <!-- Start Ensuring Finacial Freedom -->
        <section id="card-landing" class="wrapper">
            <div class="container position-relative">
                <div class="col-12 col-lg-8 mx-auto position-relative">
                    <p class="text-center pt-5 pb-3 fw-semibold text-black">Ensuring Finacial Freedom</p>
                    <span class="text-center pb-5 d-flex justify-content-center">
                        The head office of Cayman Financial Group is located in Singapore, one of the largest financial centers in the world together with New York and London.
                    </span>
                    <span class="text-center d-flex pb-5 justify-content-center">
                        The operational headquarter is located in Grand Cayman Island, the country of excellence for offshore numbered bearer account opening and famed banking security and privacy protection.
                    </span>
                    <span class="text-center pb-5 d-flex justify-content-center">
                        The incorporation headquarters of our CFG company is located in the united states, Delaware, where the largest multinational corporations of all time such as HSBC investment, British American tobacco, central valley gas storage l.l.c, st. Francis Healt Service Corporation, Bancorp, Nestlé and Google and Microsoft Azul.
                    </span>
                </div>
                <!-- <img id="bg-mission" src="<?= base_url()?>assets/img/bg-mission.png" alt="bg-mission"> -->
            </div>
        </section>
        <!-- End Ensuring Finacial Freedom -->

        <!-- Start Encrypted Bank Account -->
        <section id="" class="wrapper">
            <div class="container position-relative">
                <div class="col-12 col-lg-9 mx-auto position-relative">
                    <span class="text-center pb-3 pt-5 d-flex justify-content-center">
                        Cayman Financial group was born thanks to the legislative change, in 2022, of the laws and regulations of the Cayman Islands.
                    </span>
                    <span class="text-center d-flex pb-3 justify-content-center">
                        CFG is the first Neo Bank in the Cayman Islands able to offer online services which previously could only be offered with the physical presence of the applicant in the Cayman Islands with very high costs and large fund deposits. CGF therefore allows the online opening of numbered bearer current accounts, with reduced costs and without a minimum deposit and is able to provide anonymous debit cards to its customers.
                    </span>
                    <span class="text-center pb-3 d-flex justify-content-center">
                        Our new bank is not allowed to touch client funds, create investments or make loans, which makes CFG safer than traditional banks.
                    </span>
                    <span class="text-center pb-3 d-flex justify-content-center">
                        Our neo bank is innovative and is able to provide crypto buying and selling services while keeping the anonymity of the customers secure to whom they connect their no0n custodial wallet, we apply the usual banking regulations to the crypto service, protecting the financial privacy of our customers .
                    </span>
                </div>
                <img id="bg-mission" src="<?= base_url()?>assets/img/bg-mission.png" alt="bg-mission">
            </div>
        </section>
        <!-- End Encrypted Bank Account -->


        <!-- Start Immediate Access -->
        <?php $this->load->view("tamplate/form-landing"); ?>
        <!-- End Immediate Access -->

    </main>