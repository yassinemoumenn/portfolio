   <!-- navbar-->
   <header class="header">
      <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container"><a href="#intro" class="navbar-brand scrollTo">
          <div class="titl">
            <h1 class="ha">YASSINE<br/>MOUMEN</h1>
          </div>
        </a>
          <button type="button" data-toggle="collapse" data-target="#navbarcollapse" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><span class="fa fa-bars"></span></button>
          <div id="navbarcollapse" class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item"><a href="#intro" class="nav-link link-scroll"><?= _accueil ?></a></li>
              <li class="nav-item"><a href="#about" class="nav-link link-scroll"><?=_apropos?></a></li>
              <li class="nav-item"><a href="#services" class="nav-link link-scroll"><?=_services?></a></li>
            
              <li class="nav-item"><a href="#references" class="nav-link link-scroll"><?=_projest?></a></li>

              <li class="nav-item"><a href="#contact" class="nav-link link-scroll"><?=_contact?></a></li>
              
              <li class="nav-item dropdown ">
                        <?php
                        $icon = "flag-icon flag-icon-us";
                        $label = "English";
                            if (isset($_GET['lang'])){
                              if ($_GET['lang'] == 'en'){
                                $icon = "flag-icon flag-icon-us";
                                $label = "English";
                              }
                              else if ($_GET['lang'] == 'fr'){
                                $icon = "flag-icon flag-icon-fr";
                                $label = "French";
                              }
                            }else{
                              $icon = "flag-icon flag-icon-us";
                              $label = "English";
                            }
                        ?>
                            <a class="nav-link dropdown-toggle"  id="dropdown09" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="<?= $icon?>"> </span> <?= $label ?></a>
                            <div class="dropdown-menu" aria-labelledby="dropdown09">
                                <a class="dropdown-item" href="?lang=fr"><span class="flag-icon flag-icon-fr"> </span>  French</a>
                           
                                <a class="dropdown-item" href="?lang=en"><span class="flag-icon flag-icon-us"> </span>  English</a>
                            </div>
             </li>

                   
            </ul>
            <!-- <form method='get' action='' id='form_lang' >
              <select name='lang' onchange='changeLang();' >
              <option value='en' <?php if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'en'){ echo "selected"; } ?> >English</option>
              <option value='fr' <?php if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'fr'){ echo "selected"; } ?> >frensh</option>
              </select>
            </form> -->
 
           
    
          </div>
        </div>
      </nav>
    </header>