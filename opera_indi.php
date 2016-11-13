 <?php 
include 'libreria.php';
if(isset($_GET['accion'])){
    $accion=$_GET['accion'];    
}


if (isset($_GET['id']) and (isset($_GET['accion'])==2 or isset($_GET['accion']))==3){
     $accion=$_GET['accion']; 
     $id_ind=$_GET['id'];
     $indio=new indigena();
     $ind=$indio->leer_indigena_id($_GET['id']);
}




if(isset($_POST['comunida']) and $_POST['comunida']!=''){
    if($_POST['accion']==2){
        
    $id2=$_POST['id2'];
    $comunida=$_POST['comunida'];
      $indio=new indigena();
     $ind=$indio->editar_indigena_id($id2,$comunida);
     ?>
<script>
    
        alert('Comunidad Se Actualizo Correctamente');
       window.location='mant_indigena.php';
</script>

    <?php
    // 
    }
 

                     
    if($_POST['accion']==1){
      $indio=new indigena();
     $ind=$indio->add_indigena($_POST['comunida']);
      ?>
<script>
    
        alert('Comunidad Se Registro Correctamente');
        window.location='mant_indigena.php';
</script>

    <?php
    }   
      
    if($_POST['accion']==3){
       
        $id2=$_POST['id2'];
    $indio=new indigena();
     $ind=$indio->elimina_indigena_id($id2);
      ?>
<script>
    
        alert('Comunidad Se Elimino Correctamente');
        window.location='mant_indigena.php';
</script>

    <?php
    //
    }   
    
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
//include 'vistas/cabeza.php';                                                             
 
 //----------------------------------------------------------------------------------------------
 
 
 
 
  ?>
    
</section>

<section class="mbr-section" id="listado1" style="background-color: rgb(255, 255, 255); padding-top: 120px; padding-bottom: 120px;">
<div class="mbr-section mbr-section__container mbr-section__container--middle">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-xs-center">
                        <h3 class="mbr-section-title display-2 ">Comunidad  Indigena</h3>
                        <small class="mbr-section-subtitle bg-danger">
                            <?php if($accion==1){ ?>
                                Agregar  Comunidad 
                            <?php } ?>
                           <?php if($accion==2){ ?>
                                Editar  Comunidad  
                            <?php } ?>  
                            <?php if($accion==3){ ?>
                                Eliminar  Comunidad  
                            <?php } ?>      
                        </small> 
                        
                    </div>
                </div>
            </div>
        </div>

                        <?php 
                     //  $visi=new visita();
                      // $v=$visi->leer_visita();
                      // for($i=0;$i<sizeof($v);$i++){
                    ?>
    <div class="mbr-testimonials mbr-section mbr-section-nopadding" id="recarga">
        <div class="container">
            <div class="row">
                <form class="form-group" name="form1" action="" method="POST">
                    <div class="col-lg-6 col-lg-offset-3">
                    <div class="form-group">
                        <?php if($accion==1){ ?>
                             <input class="form-control" type="text" name="comunida" id="comunida" placeholder="Comunidad">
                        <?php } ?>
                        <?php if($accion==2 or $accion==3)  { ?>
                             <input class="form-control" type="text" name="comunida" id="comunida" value="<?php echo strtoupper($ind[0]['comunidad']) ?>" >                             
                         <?php } ?>     
                    </div>
                        <?php if($accion==1){ ?>
                        <button type="submit" class="btn btn-primary ">GUARDAR</button>
                        <input type="hidden" name="accion" value="<?php echo $accion ?>">
                        <?php } ?>
                        <?php if($accion==2){ ?>
                        <button type="submit" class="btn btn-primary ">ACTUALIZAR</button>
                        <input type="hidden" name="accion" value="<?php echo $accion ?>">
                        <input type="hidden" name="id2" value="<?php echo $id_ind ?>">
                        <?php } ?>
                        <?php if($accion==3){ ?>
                        <button type="submit" class="btn btn-primary">ELIMINAR</button>
                        <input type="hidden" name="accion" value="<?php echo $accion ?>">
                        <input type="hidden" name="id2" value="<?php echo $id_ind ?>">
                        <?php } ?>
                        
                         <a href="motivo.php"  class="btn btn-danger col-lg-offset-3">CANCELAR</a>
                    </div>
                   
                   
                </form>
                                                                  
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