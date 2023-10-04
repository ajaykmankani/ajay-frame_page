<section class="plan5-section space">
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-12 text-center">
                <em> Pricing plans</em>
                <h2><span class="">Choose your plan</h2>
               </div>
        </div>
        <div class="row mt-5">

<?php 
          $x=0;
        
          
          foreach($plan5 as $plan){
            $x++;
            
            ?>
            <div class="col-md-4" id="plan5-1">
                <div class="plan-div">
               
                <div class="text-center">
  <h4><?=$plan['title']?></h4>

                 <div class="price"><h4 class="highlight-text"><?=$plan['price']?></h4>
                 </div>
                </div>
                <p class="fs-6 fw-normal"><?=$plan['sub_title']?></p>

                <ul class="list">
                        <?php foreach($plan['list'] as $list_item){ ?>
                        <li class="fw-normal"><i class="bi bi-circle-fill"></i> <?=$list_item?></li>
                       <?php }?>
                    </ul>
                    <div class="text-center">
                        <button class="btn btn-call-head mt-2" type="btn btn-primary"><a href="tel:<?=$phone_tel?>"><?=$plan['link']?></a></button>
                        </div>

                </div>
            </div>
           <?php
          }
          ?>
        </div>
    </div>
</section>