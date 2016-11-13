 <?php 
include 'libreria.php';
if(isset($_GET['accion'])){
    $accion=$_GET['accion'];    
}
if (isset($_GET['id']) and (isset($_GET['accion'])==2 or isset($_GET['accion']))==3){
     $accion=$_GET['accion']; 
     $id_mot=$_GET['id'];
     $visi=new visita();
     $v=$visi->leer_visita_id($_GET['id']);
}




if(isset($_POST['motivo']) and $_POST['motivo']!=''){
    if($_POST['accion']==2){
    $id2=$_POST['id2'];
    $motivo=$_POST['motivo'];
     $visi=new visita();
     $v=$visi->actualizar_visita_id($id2,$motivo);
     ?>
<script>
    
        alert('Motivo De Visita Se Actualizo Correctamente');
       window.location='motivo.php';
</script>

    <?php
    // 
    }
 

                     
    if($_POST['accion']==1){
     $visi=new visita();
     $v=$visi->add_visita($_POST['motivo']);
      ?>
<script>
    
        alert('Motivo De Visita Se Registro Correctamente');
        window.location='motivo.php';
</script>

    <?php
    }   
    //
    if($_POST['accion']==3){
        $id2=$_POST['id2'];
     $visi=new visita();
     $v=$visi->eliminar_visita_id($id2);
      ?>
<script>
    
        alert('Motivo De Visita Se Elimino Correctamente');
        window.location='motivo.php';
</script>

    <?php
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
include 'vistas/cabeza.php';                                                             
 
 //----------------------------------------------------------------------------------------------
 
 
 
 
  ?>
    
</section>

<section class="mbr-section" id="listado1" style="background-color: rgb(255, 255, 255); padding-top: 120px; padding-bottom: 120px;">
<div class="mbr-section mbr-section__container mbr-section__container--middle">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-xs-center">
                        <h3 class="mbr-section-title display-2 ">Motivo de Visita</h3>
                        <small class="mbr-section-subtitle bg-danger">
                            <?php if($accion==1){ ?>
                                Agregar  Motivo de Visita 
                            <?php } ?>
                           <?php if($accion==2){ ?>
                                Editar  Motivo de Visita 
                            <?php } ?>  
                            <?php if($accion==3){ ?>
                                Eliminar  Motivo de Visita 
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
                             <input class="form-control" type="text" name="motivo" id="motivo" placeholder="MOTIVO">
                        <?php } ?>
                        <?php if($accion==2 or $accion==3)  { ?>
                             <input class="form-control" type="text" name="motivo" id="motivo" value="<?php echo strtoupper($v[0]['motivo']) ?>" >                             
                         <?php } ?>     
                    </div>
                        <?php if($accion==1){ ?>
                        <button type="submit" class="btn btn-primary ">GUARDAR</button>
                        <input type="hidden" name="accion" value="<?php echo $accion ?>">
                        <?php } ?>
                        <?php if($accion==2){ ?>
                        <button type="submit" class="btn btn-primary ">ACTUALIZAR</button>
                        <input type="hidden" name="accion" value="<?php echo $accion ?>">
                        <input type="hidden" name="id2" value="<?php echo $id_mot ?>">
                        <?php } ?>
                        <?php if($accion==3){ ?>
                        <button type="submit" class="btn btn-primary">ELIMINAR</button>
                        <input type="hidden" name="accion" value="<?php echo $accion ?>">
                        <input type="hidden" name="id2" value="<?php echo $id_mot ?>">
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