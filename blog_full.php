 <?php 
include 'libreria.php';                    
?>
<!DOCTYPE html>
<html>
<!----------------------------------------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------------------------------------->  
<script type="text/JavaScript">
<!--
   
// -->
</script>

    <?php
include 'cabecera.php';
?>
<!----------------------------------------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------------------------------------->

<body onload="JavaScript:AutoRefresh(15000);">
    
  
 <!----------------------------------------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------------------------------------->   
<section id="menu-0">   
  <?php
 include 'vistas/cabeza.php';                                                             
 
 //----------------------------------------------------------------------------------------------
 
 
 
 
  ?>
    
</section>
  <?php 
        $blog=new blog();
        $b=$blog->leer_blog();
       
        ?>

<section class="mbr-section" id="listado1" style="background-color: rgb(255, 255, 255); padding-top: 120px; padding-bottom: 120px;">
<div class="mbr-section mbr-section__container mbr-section__container--middle">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-xs-center">
                        <h3 class="mbr-section-title display-2 ">Blog Del Infocentro Sueños DEl Gigante</h3>
                        
                          <?php 
                                if(sizeof($b)==0){
                                     ?>
                        <small class="mbr-section-subtitle bg-danger">No Hay Publicaciones Disponibles Publicaciones</small>
                                    <?php 
                                }else{
                                     ?>
                        <small class="mbr-section-subtitle bg-danger">Publicaciones</small>
                                    <?php 
                                }
                           ?>
                        
                       <!--<img src="assets/images/186224-web-design/png/computer.png" class=" img-rounded" width="200">-->
                        
                       
                                                               
                    </div>
                </div>
            </div>
        </div>


    <div class="mbr-testimonials mbr-section mbr-section-nopadding" id="recarga">
       
        
        <div class="container ">

            
               <?php 
      
        $k=0;
        for($i=0;$i<  sizeof($b);$i++){
            $k++;
        ?>
                
                     <div class="col-lg-4">
                         <div class="container color-negro">
                             <br>
                <div class="text-uppercase letra-blanca  text-lg-center"><h5><?php echo $b[$i]['titulo_art'] ?></h5></div>
                <div class="text-uppercase letra-amarilla text-lg-right"><h7>Publicado : <?php echo $b[$i]['fec_art'] ?></h7></div>
                
                
                <img src="assets/images/<?php echo $b[$i]['img_art'] ?>" class="img-thumbnail center"  >
               
                <br>
                
                    <div class="" ><h5 class="text-justify letra-blanca">          
                           <br> 
                        <?php                                         
                    $resumen=substr($b[$i]['cont_art'],0,150);
                    echo "<p>". $resumen.' ... </p>';                             
                            ?></h5></div>                                                                 
                    
                        <a href="blog_detalle.php?id=<?php echo $b[$i]['id_art'] ?>" class="btn btn-info btn-lg  col-lg-offset-5">Leer Mas ...</a> 
                        <br><br>
                         
                         </div>
                         <br>
                        </div> 
                   
            
            
                <?php 
                                                    if($k==3){
                                                        ?>
                                                          <div class="clearfix"></div> 
                                                        <?php 
                                                        $k=0;
                                                    }
                } 
                    ?>
           
         
        </div>
       
        

    </div>

</section>

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
  
  
  <input name="animation" type="hidden">
</body>
</html>