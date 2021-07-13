<?php
  // $query="SELECT count(IMAGES) as 'counts'  FROM `tblpromopro` pr , `tblproduct` p  
  // WHERE pr.`PROID`=p.`PROID` and `PROBANNER`=1";
  // $mydb->setQuery($query);
  // $cur = $mydb->loadResultList(); 
  // foreach ($cur as $result) {
  // $maxrow = $result->counts; 
  // }
 
?>
 <style type="text/css">
  .stretch {
    width: 825px;
    height: 179px;
  }
  .stretch img {
    width: 100%;
    height: 100%;
  }
  .slide {
    margin-bottom: 20px;
  }
 </style>


 
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
       <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
            <li data-target="#myCarousel" data-slide-to="5"></li>
        </ol>

 
  
        <div class="carousel-inner">
            <div class="item active">
              <div class="stretch">  
                    <img src="<?php echo web_root ;?>img/0-welcome-to-icct-1.jpg"   /> 
              </div>
                <div class="carousel-caption">
                    <!-- <h2>K12 Now Ready</h2> -->
                </div>
            </div>
            
            <div class="item">
              <div class="stretch">  
                    <img src="<?php echo web_root ;?>img/0-iM4ICCT-1.jpg"   /> 
              </div>
                <div class="carousel-caption">
                    <!-- <h2>K12 Now Ready</h2> -->
                </div>
            </div>

            <div class="item">
              <div class="stretch">  
                    <img src="<?php echo web_root ;?>img/1-Bachelor-Degree-Programs-1.jpg"   /> 
              </div>
                <div class="carousel-caption">
                    <!-- <h2>K12 Now Ready</h2> -->
                </div>
            </div>

            <div class="item">
              <div class="stretch">  
                    <img src="<?php echo web_root ;?>img/2-Techvoc-1.jpg"   /> 
              </div>
                <div class="carousel-caption">
                    <!-- <h2>K12 Now Ready</h2> -->
                </div>
            </div>

            <div class="item">
              <div class="stretch">  
                    <img src="<?php echo web_root ;?>img/3-Certificate-Courses-1.jpg"   /> 
              </div>
                <div class="carousel-caption">
                    <!-- <h2>K12 Now Ready</h2> -->
                </div>
            </div>

            <div class="item">
              <div class="stretch">  
                    <img src="<?php echo web_root ;?>img/4-Senior-High-1.jpg"   /> 
              </div>
                <div class="carousel-caption">
                    <!-- <h2>K12 Now Ready</h2> -->
                </div>
            </div>
        </div>

         <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>

    </header>
 
 

    <!-- Script to Activate the Carousel -->
