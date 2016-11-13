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
                        <h3 class="mbr-section-title display-2 ">Mantenimiento Com. Indigenas</h3>
                        <small class="mbr-section-subtitle bg-danger">Agregar Editar y Eliminar Registros</small>
                       
                            <br>
                            <?php $r=0; ?>
                            <a href="opera_indi.php?accion=1" class="btn btn-info" >Agregar Comunidad</a>
                               
                           <br>
                          
                                      
                    </div>
                </div>
            </div>
        </div>


    <div class="mbr-testimonials mbr-section mbr-section-nopadding" id="recarga">
        <div class="container">
            <div class="row">
  
                
                
                <table class="table table-bordered text-lg-center">
                    <tr class="table-inverse  letra-blanca "> 
                        <td>N°</td>
                        <td>Comunida Indigena</td>
                        
                                                                                                
                        <td colspan="2">Acciones</td>
                    </tr>
                    
                    <?php
                                                                                                                                                                                                                          
                    $indio=new indigena();
                    $ind=$indio->leer_indigena();                                        
                        for($i=1;$i<sizeof($ind);$i++){
                         ?>
                            <tr>                    
                                <td><br><?php echo $ind[$i]['id_ind'] ?></td>
                                <td><br><?php echo strtoupper($ind[$i]['comunidad']) ?></td>
                                <td><a href="opera_indi.php?id=<?php echo $ind[$i]['id_ind'] ?>&accion=2"  class="btn btn-primary">Editar</a></td>
                                <td><a href="opera_indi.php?id=<?php echo $ind[$i]['id_ind'] ?>&accion=3" class="btn btn-danger">Eliminar</a></td>

                            </tr>
                        <?php } ?>
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