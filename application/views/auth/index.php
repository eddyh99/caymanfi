<!-- START NAVBAR -->
<nav class="navbar navbar-expand-xl bg-white shadow-lg  fixed-top">
    <div class="container d-flex justify-content-between">
        <a class="navbar-brand w-75 w-md-50 w-lg-30 w-xl-25" href="#">
            <img src="<?= base_url()?>assets/img/logo.png" class="w-80 img-fluid" alt="logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa-solid fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
            <ul class="navbar-nav d-flex align-items-center justify-content-end">
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Bank
                        <i class="fa-solid fa-angle-down ms-2"></i>
                    </a>
                    <ul class="dropdown-menu position-absolute">
                        <li><a class="dropdown-item" href="#">Encrypted Bank Account</a></li>
                        <li><a class="dropdown-item" href="#">Debit Cards</a></li>
                        <li><a class="dropdown-item" href="#">FIAT Currencies Exchange</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Crypto
                        <i class="fa-solid fa-angle-down ms-2"></i>
                    </a>
                    <ul class="dropdown-menu position-absolute">
                        <li><a class="dropdown-item" href="#">Non Custodial Wallet</a></li>
                        <li><a class="dropdown-item" href="#">Trade-Off Platform</a></li>
                        <li><a class="dropdown-item" href="#">Buy & Sell Crypto Using FIAT</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Financial
                        <i class="fa-solid fa-angle-down ms-2"></i>
                    </a>
                    <ul class="dropdown-menu position-absolute">
                        <li><a class="dropdown-item" href="#">Incorporation of Offshore Companies</a></li>
                        <li><a class="dropdown-item" href="#">Financial Legal solutions</a></li>
                        <li><a class="dropdown-item" href="#">Funds Relocation Service</a></li>
                    </ul>
                </li>
                <li class="nav-item me-2">
                    <a class="nav-link" aria-current="page" href="#">
                        Download
                    </a>
                </li>
                <li class="nav-item me-3">
                    <a class="nav-link" href="#">
                        Work with us
                    </a>
                </li>
                <li class="nav-item">
                    <a class="" href="#">
                        <button class="btn btn-primary-cayman my-3 my-lg-0">
                            Online Banking
                        </button>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- END NAVBAR -->


<!-- START MAIN CONTENT -->
<main>
    <!-- Start Banner -->
    <section id="banner-landing" class="wrapper">
        <img src="<?= base_url()?>assets/img/banner.webp" width="100%" class="pt-5 d-none d-md-block" alt="banner img">
        <img src="<?= base_url()?>assets/img/banner-m.webp" width="100%" class="pt-5 d-block d-md-none" alt="banner img">
        <div class="container col-12 col-lg-6 mx-auto my-5">
            <h2 class="text-center fw-normal fst-italic py-4">
                “ We provide financial solutions in <br>
                an international scenario, <br>
                we are the financial advisors that you can trust ’’
            </h2>
        </div>
    </section>
    <!-- End Banner -->


    <!-- Start Card -->
    <section id="card-landing" class="wrapper">
        <div class="container">
            <div>
                <h6 class="text-center py-5">We offer trustworthy solutions for the protection of your wealth</h6>
            </div>
            <div class="d-flex flex-column flex-lg-row justify-content-around my-5 pb-5">

                <div class="d-flex flex-column align-items-center justify-content-center mb-5 pb-5 mb-lg-5 pb-lg-0">
                    <div class="card card-landing-one position-relative" style="width: 18rem; height: 16rem;">
                        <div class="card-body card-landing position-relative">
                            <div class="position-absolute">
                                <svg width="100" height="100" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="50" cy="50" r="48" fill="white" stroke="#4F4F4F" stroke-width="4"/>
                                    <path d="M48.5202 27.9585L29.916 37.7502V41.6668H67.1243V37.7502L48.5202 27.9585ZM57.3327 45.5835V59.2918H63.2077V45.5835H57.3327ZM29.916 69.0835H67.1243V63.2085H29.916V69.0835ZM45.5827 45.5835V59.2918H51.4577V45.5835H45.5827ZM33.8327 45.5835V59.2918H39.7077V45.5835H33.8327Z" fill="#AAAAAA"/>
                                </svg>
                            </div>
                            <h5 class="card-title text-center fw-semibold">
                                <span class="fw-bold">
                                    Banking
                                </span>
                                <br>
                                Services
                            </h5>
                        </div>
                    </div>
                    <div class="mt-4 ">
                        <a href="" class="text-success">
                            <i class="fa-solid fa-circle-arrow-right"></i>
                            See more
                        </a>
                    </div>
                </div>

                <div class="d-flex flex-column align-items-center justify-content-center mb-5 pb-5 mb-lg-5 pb-lg-0">
                    <div class="card card-landing-two position-relative" style="width: 18rem; height: 16rem;">
                        <div class="card-body card-landing position-relative">
                            <div class="position-absolute">
                                <svg width="104" height="104" viewBox="0 0 104 104" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="52" cy="52" r="50" fill="white" stroke="#4F4F4F" stroke-width="4"/>
                                    <path d="M61.291 71.0832V67.1665H67.166V61.2915H71.0827V68.1457C71.0827 68.9094 70.7693 69.5948 70.1818 70.1823C69.5943 70.7698 68.9089 71.0832 68.1452 71.0832H61.291ZM41.7077 71.0832H34.8535C34.0898 71.0832 33.4043 70.7698 32.8168 70.1823C32.2293 69.5948 31.916 68.9094 31.916 68.1457V61.2915H35.8327V67.1665H41.7077V71.0832ZM61.291 31.9165H68.1452C68.9089 31.9165 69.5943 32.2298 70.1818 32.8173C70.7693 33.4048 71.0827 34.0903 71.0827 34.854V41.7082H67.166V35.8332H61.291V31.9165ZM41.7077 31.9165V35.8332H35.8327V41.7082H31.916V34.854C31.916 34.0903 32.2293 33.4048 32.8168 32.8173C33.4043 32.2298 34.0898 31.9165 34.8535 31.9165H41.7077ZM53.4577 61.7811L61.291 57.2769V48.2882L53.4577 52.7923V61.7811ZM51.4993 49.3848L59.3327 44.9003L51.4993 40.2982L43.666 44.9003L51.4993 49.3848ZM41.7077 57.2769L49.541 61.7811V52.7923L41.7077 48.2882V57.2769ZM63.6998 42.8636C64.6789 43.4903 65.2077 44.3323 65.2077 45.4486V57.8253C65.2077 58.9415 64.6789 59.7836 63.6998 60.4103L52.9681 66.6378C51.9889 67.2644 51.0098 67.2644 50.0306 66.6378L39.2989 60.4103C38.3198 59.7836 37.791 58.9415 37.791 57.8253V45.4486C37.791 44.3323 38.3198 43.4903 39.2989 42.8636L50.0306 36.6361C50.5202 36.3815 51.0098 36.264 51.4993 36.264C51.9889 36.264 52.4785 36.3815 52.9681 36.6361L63.6998 42.8636Z" fill="#AAAAAA"/>
                                </svg>
                            </div>
                            <h5 class="card-title text-center fw-semibold">
                                <span class="fw-bold">
                                    Crypto
                                </span>
                                <br>
                                Services
                            </h5>
                        </div>
                    </div>
                    <div class="mt-4">
                        <a href="" class="text-success">
                            <i class="fa-solid fa-circle-arrow-right"></i>
                            See more
                        </a>
                    </div>
                </div>
                
                <div class="d-flex flex-column align-items-center justify-content-center mb-5 pb-5 mb-lg-5 pb-lg-0">
                    <div class="card card-landing-three position-relative" style="width: 18rem; height: 16rem;">
                        <div class="card-body card-landing position-relative">
                            <div class="position-absolute">
                                <svg width="101" height="101" viewBox="0 0 101 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="50.5" cy="50.5" r="48.5" fill="white" stroke="#4F4F4F" stroke-width="4"/>
                                    <path d="M37 59.75L30.5 66.12V47.8333H37V59.75ZM47.8333 55.7633L44.4317 52.86L41.3333 55.72V39.1667H47.8333V55.7633ZM58.6667 52.1667L52.1667 58.6667V30.5H58.6667V52.1667ZM64.755 51.755L60.8333 47.8333H71.6667V58.6667L67.7883 54.7883L52.1667 70.28L44.6483 63.7367L36.4583 71.6667H30.5L44.5183 57.93L52.1667 64.3867" fill="#AAAAAA"/>
                                </svg>
                            </div>
                            <h5 class="card-title text-center fw-semibold">
                                <span class="fw-bold">
                                    Financial
                                </span>
                                <br>
                                Services
                            </h5>
                        </div>
                    </div>
                    <div class="mt-4">
                        <a href="" class="text-success">
                            <i class="fa-solid fa-circle-arrow-right"></i>
                            See more
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Card -->

    <!-- Start Debit Card -->
    <section id="debit-card" class="wrapper my-5 py-5">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 order-2 col-lg-7 order-lg-1">
                    <h1 class="fw-bold">Debit card on 
                            <span>
                                <svg width="88" height="31" viewBox="0 0 88 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M62.3333 7.53194L63.2645 1.29147C61.2293 0.52658 59.0938 0.118166 56.9392 0.0817232C53.4558 0.127226 45.2024 1.87775 45.2939 9.87215C45.38 17.3917 55.0885 17.3583 55.1337 21.3049C55.1789 25.2515 46.4658 24.6568 43.5601 22.2346L42.5887 28.7481C45.1115 29.8534 47.8196 30.3801 50.5409 30.2947C55.3297 30.2322 62.5254 27.46 62.442 20.174C62.3554 12.6077 52.5533 12.0273 52.5157 8.74235C52.4781 5.45741 59.3126 5.78076 62.3333 7.53194Z" fill="black"/>
                                    <path d="M80.5651 29.3949L87.0127 29.3107L81.0613 0.286668L75.4143 0.360433C74.7301 0.312678 74.0496 0.501601 73.4718 0.89976C72.8939 1.29792 72.4487 1.88458 72.2009 2.57453L62.0374 29.6369L69.3576 29.5413L70.7505 25.2022L79.6935 25.0854L80.5651 29.3949ZM72.7232 19.2051L76.291 8.25893L78.4856 19.1298L72.7232 19.2051Z" fill="black"/>
                                    <path d="M25.0237 1.02102L18.5601 21.1217L17.7174 16.8196L15.209 3.74176C15.209 3.74176 14.8908 1.15339 11.8474 1.19314L0.784113 1.33766L0.659912 1.82976C3.25772 2.49781 5.74624 3.58889 8.03991 5.0655L14.4307 30.2612L21.7437 30.1656L32.5747 0.922389L25.0237 1.02102Z" fill="black"/>
                                    <path d="M38.2821 29.9491L31.2648 30.0408L35.3166 0.886081L42.3339 0.794416L38.2821 29.9491Z" fill="black"/>
                                </svg>
                            </span> 
                        circuit
                    </h1>
                    <h4 class="fw-semibold pb-3 pb-lg-5">manage confidentially your purchases</h4>
                    <div class=" debit-card-box">
                        <p>Cayman Financial Institute provides debit cards, VIRTUAL AND PHYSICAL, to the clients in order to protect the privacy of their worldwide purchases.</p>
                    </div>
                    <div class="mt-3 mt-lg-5 ms-3 ms-lg-5">
                        <a href="" class="text-success">
                            <i class="fa-solid fa-circle-arrow-right"></i>
                            See more
                        </a>
                    </div>
                </div>
                <div class="col-12 order-1 col-lg-5 order-lg-2">
                    <img class="img-fluid d-block mx-auto" src="<?= base_url()?>assets/img/img-1.webp" alt="visa card">
                </div>
            </div>
        </div>
    </section>
    <!-- End Debit Card -->

    <!-- Start Immediate Access -->
    <section id="immediate-access" class="wrapper mt-5 pt-5">
        <div class="container">
            <h1 class="text-center text-immediate f-jakarta">Immediate Access</h1>
            <p class="text-center text-immediate f-jakarta">Menage your money and your crypto from our Online banking 24 hours a day 7 days a week</p>
            <div id="bg-form-immediate" class="row">
                <div class="col-12 col-lg-6">
                    <div class="p-0 pt-5  p-lg-5">
                        <img class="img-fluid d-block mx-auto" src="<?= base_url()?>assets/img/img-2.webp" alt="form img">
                    </div>
                    <span class="p-5 d-flex align-items-center">
                        <div>
                            <svg width="26" height="24" viewBox="0 0 26 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.95455 0.625V2.59624L0.75 6.63565V23.375H25.5682V6.63565L19.3636 2.59624V0.625H6.95455ZM9.02273 2.69318H17.2955V10.6428L13.1591 13.3249L9.02273 10.6428V2.69318ZM10.0568 4.76136V6.82955H16.2614V4.76136H10.0568ZM6.95455 5.0522V9.28551L3.6907 7.18501L6.95455 5.0522ZM19.3636 5.0522L22.6275 7.18501L19.3636 9.28551V5.0522ZM10.0568 7.86364V9.93182H16.2614V7.86364H10.0568ZM2.81818 9.09162L13.1591 15.7809L23.5 9.09162V21.3068H2.81818V9.09162Z" fill="white"/>
                            </svg>
                        </div>
                        <div class="ms-4 text-form-info">
                            <span>EMAIL</span><br>
                            <span>info@CAIMAN</span>
                        </div>
                    </span>
                </div>
                <div class="col-12 col-lg-6">
                    <h1 class="f-jakarta fw-bold">Get In Touch</h1>
                    <form method="">
                        <div class="mb-4">
                            <input class="in-getouch d-block mx-auto d-lg-inline mx-lg-0" placeholder="Name *" type="text">
                        </div>
                        <div class="mb-4">
                            <input class="in-getouch d-block mx-auto d-lg-inline mx-lg-0" placeholder="Email" type="text">
                        </div>
                        <div class="mb-4">
                            <input class="in-getouch d-block mx-auto d-lg-inline mx-lg-0" placeholder="Phone number *" type="number">
                        </div>
                        <button class="btn-in-getouch fw-bold f-montserrat mb-5 mb-lg-0 d-block mx-auto mx-lg-0">SEND</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End Immediate Access -->

</main>
<!-- END MAIN CONTENT -->

<!-- START FOOTER -->
<footer id="footer" class="footer py-5">
    <div class="container">
        <div class="row d-flex flex-column-reverse flex-xl-row footer-wrap align-items-center ">
            <div class="col-10 mx-auto col-xl-4 footer-location py-3">
                <ul>
                    <li>
                        <a href="">Registered Office of Incorporation, USA Delaware</a>
                    </li>
                    <li>
                        <a href="">Operational Headquarters, Grand Cayman</a>
                    </li>
                    <li>
                        <a href="">Administrative Headquarters, Singapore</a>
                    </li>
                </ul>
            </div>
            <div class="col-10 mx-auto col-xl-4 py-3">
                <a href="" class="w-100">
                    <img class="d-block mx-auto img-fluid" src="<?= base_url()?>assets/img/logo-footer.webp" alt="logo footer">
                </a>
            </div>
            <div class="col-10 mx-auto col-xl-3 footer-nav py-3">
                <ul>
                    <li>
                        <a href="">About us</a>
                    </li>
                    <li>
                        <a href="">Our mission</a>
                    </li>
                    <li>
                        <a href="">Our team</a>
                    </li>
                    <li>
                        <a href="">Privacy policy</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- END FOOTER -->

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