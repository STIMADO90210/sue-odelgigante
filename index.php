<?php 

include 'libreria.php';
function leer_cont(){
     $visita=  array();
     $sql="SELECT * FROM cont ";
     $res=mysql_query($sql,conectar::con());
     while($reg=mysql_fetch_assoc($res))
				{
					$visita[]=$reg;
				}
					return $visita;
 }



?>
<!DOCTYPE html>
<html>
<?php
include 'cabecera.php';
?>
<body>
 <!----------------------------------------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------------------------------------->   
<section id="menu-0">
    
  <?php
include 'vistas/cabeza.php';

  ?>

</section>
<!----------------------------------------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------------------------------------->
<section class="mbr-slider mbr-section mbr-section__container carousel slide mbr-section-nopadding mbr-after-navbar" data-ride="carousel" data-keyboard="false" data-wrap="true" data-interval="3000" id="slider-0">
  <?php 
  include 'vistas/slider.php';
  ?>
</section>
<br>
<br>
<!----------------------------------------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------------------------------------->
<section class="mbr-section" id="msg-box5-0" style="background-color: rgb(255, 255, 255); padding-top: 0px; padding-bottom: 0px;">

    
    <div class="container">
        <div class="row">
            <div class="mbr-table-md-up">
<?php 
        $blog=new blog();
        $b=$blog->leer_blog_id(15);
?> 
              

              <div class="mbr-table-cell mbr-right-padding-md-up col-md-5 text-xs-center text-md-right">
                  <h3 class="mbr-section-title display-2"><?php echo $b[0]['titulo_art']  ?></h3>
                  <div class="lead">

                      <p class="text-justify"><?php echo $b[0]['cont_art']  ?></p>

                  </div>

                  <div><a class="btn btn-primary" href="blog_detalle.php?id=15">LEER MAS  ....</a></div>
              </div>


              


              <div class="mbr-table-cell mbr-valign-top col-md-7">
                  <div class="mbr-figure"><img src="assets/images/<?php echo $b[0]['img_art']  ?>"></div>
              </div>

            </div>
        </div>
    </div>

</section>


<br>
<br>
<!----------------------------------------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------------------------------------->

<section class="mbr-section" id="pricing-table1-0" style="background-color: rgb(48, 48, 48); padding-top: 120px; padding-bottom: 120px;">

    

    <div class="mbr-section mbr-section__container mbr-section__container--middle">
      <div class="container">
          <div class="row">
              <div class="col-xs-12 text-xs-center">
                  <h3 class="mbr-section-title display-2">TABLA ESTADISTICA</h3>
                  <small class="mbr-section-subtitle">Porcentajes de usuarios segun categoria.</small>
              </div>
          </div>
      </div>
    </div>
        
    <div class="mbr-section mbr-section-nopadding mbr-price-table">
      <div class="row">
            <div class="col-xs-12  col-md-6 col-xl-3">
                <div class="mbr-plan card text-xs-center">
                    <div class="mbr-plan-header card-block">
                      
                      <div class="card-title">
                        <h3 class="mbr-plan-title">TOTAL VISITAS</h3>
                        <small class="mbr-plan-subtitle">DISCAP./ INDIGENAS / GENEROS</small>
                      </div>
                        <?php
                            $todo=new visita();
                             $tot=$todo->leer_regvis_user2();
                             $total=  sizeof($tot)+2;
                            ?>
                      <div class="card-text">
                          <div class="mbr-price">
                            <span class="mbr-price-value"></span>
                            <span class="mbr-price-figure"><?php echo $total; ?></span><small class=""></small>
                          </div>
                          <small class="mbr-plan-price-desc">100 % Visitas</small>
                      </div>
                    </div>
                   <!-- <div class="mbr-plan-body card-block">
                      <div class="mbr-plan-list"><ul class="list-group list-group-flush"><li class="list-group-item">32 GB storage</li><li class="list-group-item">Unlimited users</li><li class="list-group-item">15 GB bandwidth</li></ul></div>
                      <div class="mbr-plan-btn"><a href="www.infocentro.com" class="btn btn-white btn-white-outline">DEMO</a></div>
                    </div>-->
                </div>
            </div>
            <div class="col-xs-12  col-md-6 col-xl-3">
                <div class="mbr-plan card text-xs-center">
                    <div class="mbr-plan-header card-block bg-primary">
                     <!-- <div class="mbr-plan-label">HOT!</div>--->
                      <div class="card-title">
                        <h3 class="mbr-plan-title">COM/INDIGENA</h3>
                        <small class="mbr-plan-subtitle">DIFERENTES ETNIAS</small>
                      </div>
                     
                     <?php
                        $cont=  leer_cont();
                        $totind=0;
                        $totnuevos=0;
                        $contdesc=0;
                         for($i=0;$i<sizeof($cont);$i++){                              
                             $totind=$totind+$cont[$i]['cont_indio'];                             
                             $totnuevos=$totnuevos+$cont[$i]['cont_nuevos'];                             
                            $contdesc=$contdesc+$cont[$i]['cont_desc'];                                                                                 
                         }
                         
                            $pornue = $total * ($totnuevos/100);
                            $porind = $total * ($totind/100);
                            $pordes = $total * ($contdesc/100);
                         
                     ?>
                      <div class="card-text">
                          <div class="mbr-price">
                            <span class="mbr-price-value"></span>
                            <span class="mbr-price-figure"><?php echo $totind; ?></span><small class=""></small>
                          </div>
                          <small class="mbr-plan-price-desc"><?php echo $porind ?>  % Visitas</small>
                      </div>
                    </div>
                
                </div>
            </div>
            <div class="col-xs-12  col-md-6 col-xl-3">
                <div class="mbr-plan card text-xs-center">
                    <div class="mbr-plan-header card-block">
                      
                      <div class="card-title">
                        <h3 class="mbr-plan-title">NUEVOS</h3>
                        <small class="mbr-plan-subtitle">NUEVOS VISITANTES</small>
                      </div>
                      <div class="card-text">
                          <div class="mbr-price">
                            <span class="mbr-price-value"></span>
                            <span class="mbr-price-figure"><?php echo $totnuevos ?></span><small class=""></small>
                          </div>
                          <small class="mbr-plan-price-desc"><?php echo $pornue ?>  % Visitas</small>
                      </div>
                    </div>
                  
                </div>
            </div>
            <div class="col-xs-12  col-md-6 col-xl-3">
                <div class="mbr-plan card text-xs-center">
                    <div class="mbr-plan-header card-block">
                      
                      <div class="card-title">
                        <h3 class="mbr-plan-title">DESCAPACITADOS</h3>
                        <small class="mbr-plan-subtitle">TOTAL VISITAS</small>
                      </div>
                      <div class="card-text">
                          <div class="mbr-price">
                            <span class="mbr-price-value"></span>
                            <span class="mbr-price-figure"><?php echo $contdesc ?></span><small class=""></small>
                          </div>
                          <small class="mbr-plan-price-desc"><?php echo $pordes ?>  % Visitas</small>
                      </div>
                    </div>
                  
                </div>
            </div>
          </div>
    </div>

</section>
<br>
<br>
<!----------------------------------------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------------------------------------->

<section class="mbr-section mbr-section-md-padding mbr-footer footer1" id="contacts1-0" style="background-color: rgb(46, 46, 46); padding-top: 90px; padding-bottom: 40px;">
    
   <?php
    include 'vistas/rodapie.php';
   ?>
    
</section>



<script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smooth-scroll/SmoothScroll.js"></script>
  <script src="assets/viewportChecker/jquery.viewportchecker.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touchSwipe/jquery.touchSwipe.min.js"></script>
  <script src="assets/bootstrap-carousel-swipe/bootstrap-carousel-swipe.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <script src="assets/formoid/formoid.min.js"></script>

  <!--<script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/smooth-scroll/SmoothScroll.js"></script>
  <script src="assets/viewportChecker/jquery.viewportchecker.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touchSwipe/jquery.touchSwipe.min.js"></script>
  <script src="assets/bootstrap-carousel-swipe/bootstrap-carousel-swipe.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <script src="assets/formoid/formoid.min.js"></script>-->
  
  
  <input name="animation" type="hidden">
  </body>
</html>