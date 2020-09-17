<section id="references">
      <div class="container">
        <div class="col-sm-12">
          <div class="mb-5 text-center">
            <h2 data-animate="fadeInUp" class="title"><?=_projest?></h2>
            <p data-animate="fadeInUp" class="lead"><?=dec_projet?></p>
          </div>
          <ul id="filter" data-animate="fadeInUp">
            <li class="active"><a href="#" data-filter="all"><?=_tous?></a></li>
            <li><a href="#" data-filter="webdesign">HTML</a></li>
            <li><a href="#" data-filter="seo">CSS</a></li>
            <li><a href="#" data-filter="marketing">JAVASCRIPT</a></li>
            <li><a href="#" data-filter="other">Other</a></li>
          </ul>
          <div id="detail">
            <div class="row">
              <div class="col-lg-10 mx-auto"><span class="close">×</span>
                <div id="detail-slider" class="owl-carousel owl-theme"></div>
                <div class="text-center">
                  <h1 id="detail-title" class="title"></h1>
                </div>
                <div id="detail-content"></div>
              </div>
            </div>
          </div>
          <!-- Reference detail-->
          <div id="references-masonry" data-animate="fadeInUp">
            <div class="row">
            <?php include 'admin/classer.php'; ?>
                  </div>
                  <div class="col-md-12 text-center">
                    <a href="./allprojet.php"><button type="submit" name="sub" class="btn btn-outline-primary" value=""><?=_voir
                    
                
                    
                    ?><i class="fa fa-share"></i></button></a>
                   
                  </div>
       
            </div>
          </div>
        </div>
      </div>
    </section>