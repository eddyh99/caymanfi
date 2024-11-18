<section class="world-invesment">
    <div class="row">
        <div class="col-12">
            <h2 class="text-flight text-capitalize">Explore Our Other Bank Services</h2>
        </div>
    </div>
    <div class="bg-map row row-cols-1 row-cols-xl-3 px-5">
        <div class="col mb-5">
            <div class="card bank <?= ($map == 'bank_account') ? 'active' : ''?>">
                <span class="bank-title">
                    INVESTEMENT BANK <br>
                    ACCOUNT
                </span>
                <?php if($map != 'bank_account'):?>
                    <a href="<?php echo base_url() . "homepage/bank/" . base64_encode("bank_account")?>" class="btn-map">SEE MORE</a>
                <?php endif;?>
            </div>
        </div>
        
        <div class="col mb-5">
            <div class="card bank <?= ($map == 'bank_encrypted') ? 'active' : ''?>">
                <span class="bank-title">
                    ENCRYPTED <br>
                    BANK ACCOUNT TO BEARER
                </span>
                <?php if($map != 'bank_encrypted'):?>
                    <a href="<?php echo base_url() . "homepage/bank/" . base64_encode("bank_encrypted")?>" class="btn-map">SEE MORE</a>
                <?php endif;?>
            </div>
        </div>
        
        <div class="col mb-5">
            <div class="card bank <?= ($map == 'bank_visa') ? 'active' : ''?>">
                <span class="bank-title">
                    VISA DEBIT CARDS
                </span>
                <?php if($map != 'bank_visa'):?>
                    <a href="<?php echo base_url() . "homepage/bank/" . base64_encode("bank_visa")?>" class="btn-map">SEE MORE</a>
                <?php endif;?>
            </div>
        </div>
    </div>
</section>