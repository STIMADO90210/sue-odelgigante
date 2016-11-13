 <?php 
include 'libreria.php';

     if (isset($_GET['id']) and $_GET['id']!=''){
         $indice=$_GET['id'];
         $dis=new discap();
         $d=$dis->leer_discap_id($_GET['id']);
     }                
 
     if (isset($_POST['discap']) and $_POST['discap']!=''){
         $dis=new discap();
         $d=$dis->editar_discap_id($_POST['ind'], $_POST['discap']);
         ?>
<script>
    
       alert('Se Actualizo EL Registro Correctamente')
        window.location='mant_discap.php';
</script>

    <?php
     }
     
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
<br>
<br>
<br>
<br>
<section class="mbr-section" id="listado1" style="background-color: rgb(255, 255, 255); padding-top: 120px; padding-bottom: 120px;">
<div class="mbr-section mbr-section__container mbr-section__container--middle">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-xs-center">
                        <h3 class="mbr-section-title display-2 ">Editar Discapacida</h3>
                        <small class="mbr-section-subtitle bg-danger">El Modulo de Editar Discapacidad </small>
                        
                        
                       
                                                               
                    </div>
                </div>
            </div>
        </div>


    <div class="mbr-testimonials mbr-section mbr-section-nopadding" id="recarga">
        <div class="container">
            <div class="row">
  
              <div class="container">
	<div class="col-lg-8">
         <form class="form-group  col-xs-offset-6" id="discap" name="discap" method="post" action="" >
                <div class="form-group">
                    <input name="discap" id="discap" class="form-control" value="<?php echo strtoupper($d[0]['discapacida']) ?>">
                </div>
                                                  
                                                    
         <br>
        
                   
                 <button type="submit" class="btn btn-danger">ACTUALIZAR</button>  
                 <input type="hidden" name="ind" value="<?php echo $indice ?>">
                       <a href="mant_discap.php" class="btn btn-primary">CANCELAR</a>
         </form>
</div>
</div>
                
                

            </div>

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