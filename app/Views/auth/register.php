<!-- Start of Banner -->
<div class="banner-homepage">
    <div class="wrapper-banner-homepage auth">
        <div class="filter-auth">.</div>
        <video autoplay="" preload="" muted="" loop="" playsinline="">
            <source src="<?= base_url() ?>assets/vid/banner-home.webm" type="video/webm">
        </video>
        <div class="hero-banner-homepage auth container">
            <div class="row">
                <div class="col-12  mx-auto">
                    <div class="auth-cayman">
                        <div class="title-auth">
                            <h1>
                                REGISTER CAYMAN ACCOUNT
                            </h1>
                        </div>
                        <form action="" method="POST" class="mt-5 bg-auth">
                            <div class="form-auth">
                                <a href="<?= base_url() ?>">
                                    <img class='img-fluid' width="300" src='<?= base_url() ?>assets/img/logo.png' alt='img'>
                                </a>
                                <div class="wrapper-input">
                                    <label for="email">Email</label> <br>
                                    <input type="email" name="email">
                                </div>
                                <div class="wrapper-input mt-4">
                                    <label for="confirmemail">Confirm Email</label> <br>
                                    <input type="email" name="confirmemail">
                                </div>
                                <div class="form-group-pass w-100 position-relative">
                                    <div class="wrapper-input mt-4">
                                        <label for="password">Password</label> <br>
                                        <input type="password" name="password" id="password">
                                    </div>
                                    <i class="icon-pass-login fa-solid fa-eye" id="togglePassword"></i>
                                </div>
                                <div class="form-group-pass w-100 position-relative">
                                    <div class="wrapper-input mt-4">
                                        <label for="confirmpassword">Confirm Password</label> <br>
                                        <input type="password" name="confirmpassword" id="password2">
                                    </div>
                                    <i class="icon-pass-login fa-solid fa-eye" id="togglePassword2"></i>
                                </div>
                            </div>
                            <div class="wrapper-checkbox mt-4 ">
                                <input type="checkbox" name="remember" id="remember">
                                <label for="remember">Remember me</label>
                            </div>
                            <div class="wrapper-button d-flex justify-content-center">
                                <button type="submit"  class="btn-cayman py-1 px-5">REGISTER</button>
                            </div>
                            <div class="wrapper-anotherpage mt-3">
                                <span>Already have an account ? </span> <a href="<?= base_url() ?>auth/login" > Login </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- End of Banner -->
