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

<section class="mbr-section" id="listado1" style="background-color: rgb(255, 255, 255); padding-top: 120px; padding-bottom: 120px;">
<div class="mbr-section mbr-section__container mbr-section__container--middle">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-xs-center">
                        <h3 class="mbr-section-title display-2 ">Motivo de Visita </h3>
                        <small class="mbr-section-subtitle bg-danger">El Modulo de Motivo de Visita </small> 
                        <a href="motivo_visita.php?accion=1" class="btn btn-info ">Agregar Motivo Nuevo</a>
                    </div>
                </div>
            </div>
        </div>


    <div class="mbr-testimonials mbr-section mbr-section-nopadding" id="recarga">
        <div class="container">
            <div class="row">
                <table class="table table-bordered">
                    <tr class="table-inverse  letra-blanca text-lg-center">
                        <td>Nro</td>
                        <td>Motivo de Visita</td>
                        <td colspan="2">Acciones</td>
                        
                    </tr>
                    <?php 
                       $visi=new visita();
                       $v=$visi->leer_visita();
                       for($i=0;$i<sizeof($v);$i++){
                    ?>
                    <tr class="text-lg-center">
                        <td><br><?php echo $v[$i]['id_mot'] ?></td>
                        <td><br><?php echo strtoupper($v[$i]['motivo']) ?></td>
                        <td><a href="motivo_visita.php?id=<?php echo $v[$i]['id_mot'] ?>&accion=2" class="btn btn-primary">Editar</a></td>
                        <td><a href="motivo_visita.php?id=<?php echo $v[$i]['id_mot'] ?>&accion=3"  class="btn btn-danger">Eliminar</a></td>
                    </tr>
                    <?php 
                       }
                    ?>
                </table>
                                                                  
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