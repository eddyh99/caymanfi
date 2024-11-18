<section class="world-invesment">
    <div class="row">
        <div class="col-12">
            <h2 class="text-flight">EXPLORE OUR OTHER BANK SERVICES</h2>
        </div>
    </div>
    <div class="bg-map row row-cols-1 row-cols-xl-4 px-5">
        <div class="col mb-5">
            <div class="card bank <?= ($map == 'crypto_noncustodial') ? 'active' : ''?>">
                <span class="bank-title">
                    non custodial <br>
                    wallet
                </span>
                <?php if($map != 'crypto_noncustodial'):?>
                    <a href="<?php echo base_url() . "homepage/crypto/" . base64_encode("crypto_noncustodial")?>" class="btn-map">SEE MORE</a>
                <?php endif;?>
            </div>
        </div>
        
        <div class="col mb-5">
            <div class="card bank <?= ($map == 'crypto_tradeoff') ? 'active' : ''?>">
                <span class="bank-title">
                    trade off platform <br>
                    with shared order <br>
                    book <br>
                </span>
                <?php if($map != 'crypto_tradeoff'):?>
                    <a href="<?php echo base_url() . "homepage/crypto/" . base64_encode("crypto_tradeoff")?>" class="btn-map">SEE MORE</a>
                <?php endif;?>
            </div>
        </div>
        
        <div class="col mb-5">
            <div class="card bank <?= ($map == 'all_crypto') ? 'active' : ''?>">
                <span class="bank-title">
                    purchase Crypto <br>
                    Using FIAT and <br>
                    Withdraw FIAT <br>
                    Funds from Crypto <br>
                </span>
                <?php if($map != 'all_crypto'):?>
                    <a href="<?php echo base_url() . "homepage/crypto/" . base64_encode("all_crypto")?>" class="btn-map">SEE MORE</a>
                <?php endif;?>
            </div>
        </div>

        <div class="col mb-5">
            <div class="card bank <?= ($map == 'satoshi_signal') ? 'active' : ''?>">
                <span class="bank-title">
                    SATOSHI SIGNAL <br>
                    <small>
                        POWERED
                    </small>
                    <br>
                    PN GLOBAL
                </span>
                <?php if($map != 'satoshi_signal'):?>
                    <a href="<?php echo base_url() . "homepage/crypto/" . base64_encode("satoshi_signal")?>" class="btn-map">SEE MORE</a>
                <?php endif;?>
            </div>
        </div>
        
    </div>
</section>
