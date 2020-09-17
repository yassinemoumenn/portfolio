<?php 
include 'datebase.php';
$slt= " SELECT * FROM port";
$request=$db_connect->query($slt);
$data=$request->fetchAll(PDO::FETCH_ASSOC);



?>
<?php
foreach($data as $projet){
$rows = <<<prod

 <div data-category="{$projet['category']}" class="reference-item col-lg-3 col-md-6">
                    <div class="reference"><a href="#"><img src="img/{$projet['img']}" alt="" class="img-fluid">
                        <div class="overlay">
                          <div class="inner">
                            <h3 class="h4 reference-title">{$projet['nom']}</h3>
                            <h4 class="h4 reference-title">projet {$projet['nmbr']}</h4>
                            <p>Short project description goes here...</p>
                          </div>
                        </div></a>
                      <div data-images="img/slider2.png" class="sr-only reference-description">
                        <p>Projecting surrounded literature yet delightful alteration but bed men. Open are from long why cold. If must snug by upon sang loud left. As me do preference entreaties compliment motionless ye literature. Day behaviour explained law remainder. Produce can cousins account you pasture. Peculiar delicate an pleasant provided do perceive.</p>
                        <p>Sitting mistake towards his few country ask. You delighted two rapturous six depending objection happiness something the. Off nay impossible dispatched partiality unaffected. Norland adapted put ham cordial. Ladies talked may shy basket narrow see. Him she distrusts questions sportsmen. Tolerably pretended neglected on my earnestly by. Sex scale sir style truth ought.</p>
                        <p class="buttons text-center"><a href="{$projet['link']};" class="btn btn-outline-primary"><i class="fa fa-globe"></i> Visit website</a><a href="javascript:void(0);" class="btn btn-outline-primary"><i class="fa fa-download"></i> Download case study</a></p>
                      </div>
                    </div>
                  </div>
prod;
    echo $rows;
                }
 ?>