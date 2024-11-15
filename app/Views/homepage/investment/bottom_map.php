<section class="world-invesment">
    <div class="row">
        <div class="col-12">
            <h2 class="text-flight">Let Your Dreams Take Flight with our  investments</h2>
        </div>
    </div>
    <div class="bg-map row row-cols-1 row-cols-xl-4 px-5">
        <div class="col mb-5">
            <div class="card <?= ($map == 'funds') ? 'active' : ''?>">
                <h1 class="persen">
                    15%
                </h1>
                <span class="apy">
                    APY
                </span>
                <?php if($map != 'funds'):?>
                    <a href="<?php echo base_url() . "homepage/investment/" . base64_encode("fund_management")?>" class="btn-map">SEE MORE</a>
                <?php endif;?>
            </div>
        </div>
        
        <div class="col mb-5">
            <div class="card <?= ($map == 'bitcoin') ? 'active' : ''?>">
                <h1 class="persen">
                    12%
                </h1>
                <span class="apy">
                    APY
                </span>
                <?php if($map != 'bitcoin'):?>
                    <a href="<?php echo base_url() . "homepage/investment/" . base64_encode("bitcoin")?>" class="btn-map">SEE MORE</a>
                <?php endif;?>
            </div>
        </div>
        
        <div class="col mb-5">
            <div class="card <?= ($map == 'hedge') ? 'active' : ''?>">
                <h1 class="persen">
                    10%
                </h1>
                <span class="apy">
                    APY
                </span>
                <?php if($map != 'hedge'):?>
                    <a href="<?php echo base_url() . "homepage/investment/" . base64_encode("hedge")?>" class="btn-map">SEE MORE</a>
                <?php endif;?>
            </div>
        </div>
        
        <div class="col mb-5">
            <div class="card comingsoon">
                <span class="apy">
                    COMMING <br>
                    SOON
                </span>
                <a class="btn-map disabled">SEE MORE</a>
            </div>
        </div>
        
    </div>
</section>