<section class="plan1-section space">
    <div class="container mb-4">
<div class="row">
    <div class="col-md-12 text-center">
        <h2>We Are<span class="highlight-text"> Internet</span> Service</h2>
    </div>
</div>
        <div class="row mt-4">
    

 <?php
$x=0;
foreach($plan1 as $plan){
$x++;
?>

            <div class="col-md-4">
                <div class="plan1" <?php if($x == 0){} else {?>style="background-color: <?=$plan['color']?>; color:#000"
                    <?php }?>>

                    <strong <?php if($x == 1){?>style="color:white" <?php }?>><?= $plan['title'] ?></strong>

                    <p class="text-white mt-2 fs-6" <?php if($x == 1){?>style="color:white" <?php } else {?>style="color:#000 !important" <?php }?>>
                        <?= $plan['sub_title'] ?></p>

                     <a href="tel:<?=$phone_tel?>" <?php if($x == 1){?>style="color:white" <?php }?>><?=$plan['link']?> </a>
                </div>
            </div>


            <?php

} ?>
        </div>
    </div>

</section>