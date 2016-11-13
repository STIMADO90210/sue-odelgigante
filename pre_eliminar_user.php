   
<?php 
       // includes de todas las clases 
include 'libreria.php';
   // guardando registros de ususarios

if(isset($_GET['id2']) and $_GET['accion']='Eliminar'){
    $persona=new usuario;
    $user=$persona->eliminar_usuario_id($_GET['id2']);
    ?>
<script>
    alert('Se Elimino El Registro Correctamente');
    window.location='mant_usuario.php';
</script>
    <?php
}
// guardando registros de ususarios

if(isset($_GET['id']) and $_GET['id']!=''){
    
  
   
$usuario=new usuario();
$user=$usuario->leer_usuario_id($_GET['id']);

//--------------------------------------------------------------------------------------------------  

//--------------------------------------------------------------------------------------------------  
//$discap=new discap();
//$disc=$discap->leer_discap_user($_GET['id']);
//$nro_d=$disc[0]['disc_user'];
//$nro_disc=$disc[0]['disc_user'];
//$discap=new discap();
//$disc=$discap->leer_discap_id($nro_d);
//$discapacida=$disc[0]['discapacida'];


//--------------------------------------------------------------------------------------------------  
//$indico=new indigena();
//$ind=$indico->leer_indigena_user($_GET['id']);  
//$nro_i=$ind[0]['indi_user'];
//$indico=new indigena();
//$ind=$indico->leer_indigena_id($nro_i);

    //$comuna=$ind[0]['comunidad'];
//--------------------------------------------------------------------------------------------------  
            
//$motivo=new visita() ;
//$mot=$motivo->contar_regvis_user($_GET['id']);  
//$nro_v=$mot[0]['mot_visita'];
//$motivo=new visita();
//$mot=$motivo->leer_visita_id($nro_v);

    //$motivos=$mot[0]['motivo'];
    
}

//-------------------------------------------------------------------------------------------------------------------





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

<br><br>
<br><br>
<div class="mbr-section mbr-section__container mbr-section__container--middle">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-xs-center">
                    <h3 class="mbr-section-title display-2">Eliminar Usuarios</h3>
                    <small class="mbr-section-subtitle bg-danger">Eliminar Datos Del Usuario</small>
                </div>
            </div>
        </div>
    </div>
    <div class="mbr-section mbr-section-nopadding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-lg-6 col-lg-offset-3 color-negro" data-form-type="">
                    <!----------------------------------------------------------------------------------->
                   
                    <br>
                    <div class="row">
                        <div class="container text-md-center">
                    <?php 
                            echo "<h5 class='letra-blanca'> Nombre :" ." ".$user[0]['nombre_user']."</h5><br>";
                            
                    
                            echo "<h5 class='letra-blanca'>Cedula : " ." ". $user[0]['cedula_user']."</h5><br>";
                            
                            echo "<h5 class='letra-blanca'>Edad :" ." ". $user[0]['edad_user']."</h5><br>";
                            echo "<h5 class='letra-blanca'>Telefono :  " ."". $user[0]['telefono_user']."</h5><br>";
                            if($user[0]['sexo_user']=='m'){$sex='Masculino';}
                            if($user[0]['sexo_user']=='f'){$sex='Femenino';}
                            echo "<h5 class='letra-blanca'>Sexo : " ." ". $sex."</h5><br>";
                            
                            
                    ?>
                        </div>
                    </div>
                    <br>
                </div>
                <br>
                 <br>
                  <br>
                <div class="container col-lg-6 col-lg-offset-3">
                    <br>
                    <br>
                    <div class="bg-info col-lg-12 ">
                        <br>
                        <h5 class="text-lg-center">Esta Seguro de Querer Eliminar Este Registro</h5>
                    
                    <br>
                    </div>
                     <br>
                    <br> <br>
                    <br>
                <a href="pre_eliminar_user.php?id2=<?php  echo $user[0]['id_user'] ?>&accion='Eliminar'" class="btn btn-danger">Eliminar</a>
                <a href="mant_usuario.php" class="btn btn-primary">Cancelar</a>
                
                
            </div>
        </div>
    </div>
 
<br>
<br>
<br>
<br>
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