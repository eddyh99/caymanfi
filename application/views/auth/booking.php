
<?php if($booking == 'agreement'){?>
    <main class="">
        <!-- Start Heading Back-Link -->
        <section class="wrapper">
            <div class="container pt-5 ">
                <div class="row">
                    <div class="col-12 d-flex justify-content-around align-items-center">
                        <div class="col-4">
                            <a href="<?= base_url()?>">
                                <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.5" y="0.5" width="34" height="34" rx="2.5" stroke="#1A9334"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.382 25.5193C13.7607 26.1406 12.7534 26.1406 12.1321 25.5193L5.76846 19.1557C5.14717 18.5344 5.14717 17.5271 5.76846 16.9058L12.1321 10.5421C12.7534 9.92085 13.7607 9.92085 14.382 10.5421C15.0033 11.1634 15.0033 12.1707 14.382 12.792L10.7342 16.4398L29.1661 16.4398C30.0448 16.4398 30.757 17.1521 30.757 18.0307C30.757 18.9094 30.0448 19.6216 29.1661 19.6216L10.7342 19.6216L14.382 23.2694C15.0033 23.8907 15.0033 24.898 14.382 25.5193Z" fill="#1A9334"/>
                                </svg>
                            </a>
                        </div>
                        <div class="col-4"></div>
                        <div class="col-4"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Heading Back-Link -->
        <section class="mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 pe-5 me-5">
                        <h4 class="text-booking-agreement fw-semibold">
                            Lorem ipsum dolor sit amet consectetur. Tempus tempor massa aliquam libero mattis ante lectus pellentesque. Egestas quisque amet blandit augue. Odio tempor nulla turpis vel enim. Ut donec elementum tempor gravida quis. Ornare purus urna in quisque sit rutrum volutpat. Sem felis amet non massa. Gravida morbi sed vitae vitae vitae at nibh dolor et. Eget arcu odio maecenas a ac ultricies. Dictumst sagittis ultrices amet volutpat nullam. Ipsum sollicitudin aenean id rhoncus magna. Diam pulvinar egestas enim nibh massa. Lacus elit in volutpat ullamcorper laoreet eget at augue. Cursus in feugiat diam lorem quam ornare.
                            Odio arcu est eget velit malesuada urna nunc morbi elit. Urna proin etiam ut egestas enim tellus lacus porta eu. Sagittis enim dignissim et porttitor scelerisque commodo est imperdiet morbi. Turpis sagittis nec id massa porta. Eu sit dignissim eget nullam mi ut aliquet. Vel at ut lobortis praesent. In nisl penatibus at nibh. Magna tellus eu vestibulum vitae varius.
                        </h4>
                        <div class="d-flex justify-content-end mt-5">
                            <a href="<?= base_url()?>auth/booking?booking=<?= base64_encode('form')?>" class="btn btn-booking">
                                AGREE & COUNTINUE
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php } elseif($booking == 'form'){?>
    <main class="bg-booking">
        <!-- Start Heading Back-Link -->
        <section class="wrapper">
            <div class="container pt-5 ">
                <div class="row">
                    <div class="col-10 mx-auto d-flex justify-content-around align-items-center">
                        <div class="col-4">
                            <a href="<?= base_url()?>auth/booking?booking=<?= base64_encode('agreement')?>">
                                <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.5" y="0.5" width="34" height="34" rx="2.5" stroke="#1A9334"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.382 25.5193C13.7607 26.1406 12.7534 26.1406 12.1321 25.5193L5.76846 19.1557C5.14717 18.5344 5.14717 17.5271 5.76846 16.9058L12.1321 10.5421C12.7534 9.92085 13.7607 9.92085 14.382 10.5421C15.0033 11.1634 15.0033 12.1707 14.382 12.792L10.7342 16.4398L29.1661 16.4398C30.0448 16.4398 30.757 17.1521 30.757 18.0307C30.757 18.9094 30.0448 19.6216 29.1661 19.6216L10.7342 19.6216L14.382 23.2694C15.0033 23.8907 15.0033 24.898 14.382 25.5193Z" fill="#1A9334"/>
                                </svg>
                            </a>
                        </div>
                        <div class="col-4"></div>
                        <div class="col-4">
                            <span style="color: #9A9A9A;">
                                Having trouble? 
                                <a href="">
                                    Get help
                                </a> 
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Heading Back-Link -->
        <section class="mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-10 mx-auto pe-5 me-5">
                        <div class="d-flex justify-content-start mt-5">
                            <form action="<?= base_url()?>auth/booking?booking=<?= base64_encode('success')?>" method="POST" class="w-100">
                                <h4 class="my-4 fw-bold f-poppins" style="color: rgba(71, 71, 71, 1);">Information details</h4>
                                <div class="d-flex flex-column w-100 my-4">
                                    <label class="text-color-link-grad py-2" for="email">Email</label>
                                    <input class="input-booking" id="email" name="email" type="text" placeholder="enter email address" required>
                                </div>
                                <div class="d-flex flex-column w-100 my-4">
                                    <label class="text-color-link-grad py-2" for="name">Name</label>
                                    <input class="input-booking" id="name" name="name" type="text" placeholder="enter your name" required>
                                </div>
                                <div class="d-flex flex-column w-100 my-4">
                                    <label class="text-color-link-grad py-2" for="region">Region</label>
                                    <select id="region" name="region" class="input-booking" required>
                                        <option value="" selected >Select Region</option>
                                        <option value="" >Bali</option>
                                    </select>
                                </div>
                                <div class="d-flex flex-column w-100 my-4">
                                    <label class="text-color-link-grad py-2" for="time">Meeting Time</label>
                                    <select id="time" name="time" class="input-booking" required>
                                        <option value="" selected >Select time available </option>
                                        <option value="" >Bali</option>
                                    </select>
                                </div>
                                <div class="d-flex flex-column w-100 my-4">
                                    <label class="text-color-link-grad py-2" for="description">Description</label>
                                    <input class="input-booking" id="description" name="description" type="text" placeholder="enter description" required>
                                </div>
                                <div class="d-flex justify-content-start my-5 pb-5">
                                    <button class="btn btn-booking">
                                        SAVE & COUNTINUE
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php } elseif ($booking == 'success'){?>
    <section class="bg-contact-notif d-flex justify-content-center align-items-center mt-0 pt-0">
        <div class="container ">
            <div class="row">
            <div class="col-12 col-lg-8 col-xl-6 mx-auto">
                <img class="img-fluid mx-auto d-block" src="<?= base_url()?>assets/img/success-contact.png" alt="success">
                <p class="f-inter text-center fw-semibold mt-4">
                    Lorem ipsum dolor sit amet consectetur. Lorem lacus eget 
                    <br> 
                    suspendisse netus montes. Amet egestas placerat blandit mauris 
                    <br>
                    sagittis proin ipsum mollis.
                </p>
                <div class="d-flex justify-content-center mt-5">
                    <a href="<?= base_url(); ?>"
                        class="btn btn-booking w-30 f-inter px-5">
                        <span>DONE</span>
                    </a>
                </div>
            </div>
            </div>
        </div>
    </section>
<?php } ?>