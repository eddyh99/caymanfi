<main>
        <!-- Start Banner -->
        <section id="banner-landing" class="wrapper">
            <div class="bank-banner">
                <img src="<?= base_url()?>assets/img/banner-mission.webp" width="100%" class="pt-5 d-none d-md-block" alt="banner img">
                <img src="<?= base_url()?>assets/img/banner-mission-m.webp" width="100%" class="pt-5 d-block d-md-none" alt="banner img">
                <h1 class="text-black text-center fw-bold w-75">
                    The Paradise Of The Offshore Banks
                </h1>
            </div> 
        </section>
        <!-- End Banner -->


        <!-- Start Encrypted Bank Account -->
        <section id="card-landing" class="wrapper">
            <div class="container">
                <div class="col-12 col-lg-8 mx-auto">
                    <p class="text-center pt-5 pb-3 fst-italic fw-normal text-black">Financial dreams delivered</p>
                    <span class="text-center pb-5 d-flex justify-content-center">
                        The mission of Cayman Financial group is to ensure the privacy and financial anonymity of companies and individuals and protect them from ongoing crimes committed by multinational corporations that access and misuse sensitive data without their consent, and our company is aimed  to protect individuals and companies from governments that could operate financial controls without authorization.
                    </span>
                    <span class="text-center d-flex justify-content-center">
                        Individuals and companies must be able to manage their capital without  being illegally traced by governments and organizations.
                    </span>
                    <span class="text-center pb-5 d-flex justify-content-center">
                        Our company gives this protection but in no way encourages the abuse of it, which means that we monitor every single transaction, and we make sure that our customers do not commit crimes, and that they use our services in full legality.
                    </span>
                </div>
            </div>
        </section>
        <!-- End Encrypted Bank Account -->


        <!-- Start Immediate Access -->
        <?php $this->load->view("tamplate/form-landing"); ?>
        <!-- End Immediate Access -->

    </main>