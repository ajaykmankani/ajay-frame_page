<style>
    ul{
    list-style:none;
    }
</style>

    <div class="container mb-5 ">
    <div class="row">
            <div class="col-md-12 text-center">
                <em> Pricing plans</em>
                <h2><span class="">Choose your plan</h2>
               </div>
        </div>
        <div class="row ">
<?php 
          $x=0;
        
          
          foreach($plan6 as $plan){
            $x++;
            
            ?>


<?php if ($x % 2 == 0) { ?>
<section id="sidesect" class="pt-5 text-end">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-12 col-md-12 col-lg-5 col-xl-5 pt-3">
						<div class="">
							<img src="web5/images/plan<?=$x?>.jpg" alt="" style="max-height:300px; width:100%" />
						</div>
					</div>
					<div class="col-12 col-md-12 col-lg-7 col-xl-7 pt-3">
						<div class="">
						<h2 class="coloraccdark text-capitalize"><?=$plan['title']?></h2>
						<h6 class="coloraccdark"><?=$plan['sub_title']?></h6>
						<ul class="pt-3 linkshere">
                        <?php foreach($plan['list'] as $list_item){ ?>
                            <li > <?=$list_item?><i class="bi bi-circle-fill ps-2" aria-hidden="true"></i></li>
                       <?php }?>
							
						</ul>
                        <button class="btn btn-call-head mt-2" type="btn btn-primary"><a href="tel:<?=$phone_tel?>"><?=$plan['link']?></a></button>
						</div>
					</div>
				</div>
			</div>
		</section>
<?php 
} 
if($x % 2 != 0){
?>
		<!--Sidesect-->
		<section id="sidesect" class="pt-5 text-start">
			<div class="container">
				<div class="row align-items-end">
					
					<div class="col-12 col-md-12 col-lg-7 col-xl-7 pt-3">
						<div class="">
						<h2 class="coloraccdark text-capitalize"><?=$plan['title']?></h2>
						<h6 class="coloraccdark"><?=$plan['sub_title']?></h6>
						<ul class="pt-3 linkshere" style="padding-left: 0px;">
                        <?php foreach($plan['list'] as $list_item){ ?>
                            <li><i class="bi bi-circle-fill" aria-hidden="true"></i> <?=$list_item?></li>
                       <?php }?>
							
						</ul>
                        <button class="btn btn-call-head mt-2"  type="btn btn-primary"><a href="tel:<?=$phone_tel?>"><?=$plan['link']?></a></button>
						</div>
					</div>
                    <div class="col-12 col-md-12 col-lg-5 col-xl-5 pt-3">
  <div class="position-relative">
    <img src="web5/images/plan<?=$x?>.jpg" alt="" style="max-height:300px; width:100%"/>
  </div>
</div>
				</div>
			</div>
		</section>

		<?php 
        } 
    } 
        ?>
        </div>
        </div>
