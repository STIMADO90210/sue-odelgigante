 <?php
  
include 'libreria.php';
 ?>
<!DOCTYPE html>
<html>
<!----------------------------------------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------------------------------------->  
<?php
include 'cabecera.php';
?>
<!----------------------------------------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------------------------------------->
<body>
 <!----------------------------------------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------------------------------------->   
<section id="menu-0">
    
  <?php
include 'vistas/cabeza.php';
 
 
  ?>

</section>

<br>
<!----------------------------------------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------------------------------------->   

<?php 
  


if(isset($_GET['id']) and $_GET['id']!=''){
    $persona=new usuario();
    $user=$persona->leer_usuario_id($_GET['id']);
}

if(isset($_POST['id2']) and $_POST['id2']!=''){
    $fecha=date('Y-m-d');
    $nomb_dia=$dia[date('w')];
    $visita=new visita();
    $vis=$visita->meter_regvis_user($_POST['id2'], $_POST['motvis'],$fecha,  $nomb_dia);
    
    $usuario=new usuario();
    $per=$usuario->leer_usuario_id($_POST['id2']);
    $id_user=$per[0]['id_user'];
    $cant2=$per[0]['cont_vis'];
    $cant2++;
    $usuario=new usuario();
    $per=$usuario->actualizar_usuario_id($_POST['id2'],$cant2);
    ?>
<script>
    
        alert('Visita Se Registro Correctamente');
        window.location='mostrar_reg.php?id=<?php echo $id_user ?>';
</script>

    <?php
}
 ?>
<!----------------------------------------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------------------------------------->   

<section class="mbr-section" id="detalle" style="background-color: rgb(255, 255, 255); padding-top: 120px; padding-bottom: 120px;"> 
    
    <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-xs-center">
                        <h3 class="mbr-section-title display-2 ">Datos Del Usuario</h3>
                        <small class="mbr-section-subtitle bg-danger">Corfirmacion de Registro</small>
                    </div>
                </div>
            </div>
    <div class="container color-negro">
        <br>
    <form action="" name="confirma" class="form-group" method="post">
    <div class="container">
    <div class="col-lg-6 col-lg-offset-3 ">
        <h4 class="letra-blanca">Cedula</h4>
        <div class="form-group">
        <input name="ced" class="form-control" value="<?php echo $user[0]['cedula_user']; ?>">
       </div> 
       <h4 class="letra-blanca">Nombre</h4> 
   <div class="form-group">
        <input name="nombre" class="form-control text-uppercase" value="<?php echo $user[0]['nombre_user']; ?>">
    </div> 
       
  <?php $edad= date('Y/m/d') - $user[0]['fecha_nac']; ?>
     <h4 class="letra-blanca">Edad</h4>
        <div class="form-group">
            
        <input name="edad" class="form-control" value="<?php 
         
                        echo $edad ; 
        ?>">
    </div>    
    
    
            <div class="form-group">                                    
                                                <?php
                                                    //include 'clases/discap.php';
                                                     $visita=new visita();
                                                    $vis=$visita->leer_visita();                                       
                                                 ?> 
                <h4 class="letra-blanca">Indique Motivo de Visista</h4>
                                                <select class="form-control text-uppercase" name="motvis" id="motvis" onclick="javascript:valor();">                                        
                                                    <?php   for($k=0;$k<sizeof( $vis);$k++){  ?>                                       
                                                       <option class="" value="<?php echo  $vis[$k]['id_mot'] ?>"><?php echo  $vis[$k]['motivo'] ?></option>                                        

                                                    <?php } ?>                                                                                
                                                </select>          
             </div>
     <button type="submit" name="confirma" class="btn btn-info">Registrar</button> 
     <input type="hidden" name="id2" value="<?php echo $user[0]['id_user']; ?>">
</div>  
 
        </div>
    </form>
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