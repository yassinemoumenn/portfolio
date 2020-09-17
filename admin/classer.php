<?php
include 'datebase.php';
$var1 = "SELECT * FROM  port ORDER BY nmbr DESC";
$resultat = $db_connect->query($var1);
$data = $resultat->fetchAll(PDO::FETCH_ASSOC);
$i=0;
// for($i=0;$i<6;$i++){
            foreach($data as $projet) 
            
      {

             $cc = <<<prod
             <div data-category="{$projet['category']}" class="reference-item col-lg-3 col-md-6">
             <div class="reference"><a href="#"><img src="img/{$projet['img']}" alt="" class="img-fluid">
                 <div class="overlay">
                   <div class="inner">
                     <h3 class="h4 reference-title">{$projet['nom']}</h3>
                  
                     <p>Short project description goes here...</p>
                   </div>
                 </div></a>
               <div data-images="img/{$projet['img']}" class="sr-only reference-description">
                 
                 <p class="buttons text-center"><a href="{$projet['link']}" class="btn btn-outline-primary"><i class="fa fa-github"></i> See in github</a></p>
               </div>
             </div>
           </div>
                                        
                            
prod;

        echo $cc;
        $i++;
        if($i==8){ break;}
        }
        

?>