 <?php 
include 'libreria.php';
if(isset($_GET['accion'])){
    $accion=$_GET['accion'];    
}


if (isset($_GET['id']) and (isset($_GET['accion'])==2 or isset($_GET['accion']))==3){
     $accion=$_GET['accion']; 
     $id_niv=$_GET['id'];
     $niveli=new nivel();
     $n=$niveli->leer_nivel_id($id_niv);
}




if(isset($_POST['admin']) and $_POST['admin']!=''){
    if($_POST['accion']==2){
        
    $id2=$_POST['id2'];
    $admin=$_POST['admin'];
     $email=$_POST['email'];
      $pass=$_POST['pass'];
     $nivel=$_POST['nivel'];
     $niveli=new nivel();
     $n=$niveli->actualizar_nivel_id($id2,$admin,$email,$pass,$nivel);
     ?>
<script>
    
        alert('Nivel De Acceso Se Actualizo Correctamente');
       window.location='mant_nivel.php';
</script>

    <?php
    // 
    }
 

                     
    if($_POST['accion']==1){
 
    $admin=$_POST['admin'];
     $email=$_POST['email'];
      $pass=$_POST['pass'];
     $nivel=$_POST['nivel'];
      $niveli=new nivel();
     $n=$niveli->add_nivel($admin,$email,$pass,$nivel);
      ?>
<script>
    
        alert('Nivel De AccesoSe Registro Correctamente');
       window.location='mant_nivel.php';
</script>

    <?php
    //  
    }   
      
    if($_POST['accion']==3){
       
        $id2=$_POST['id2'];
     $niveli=new nivel();
     $n=$niveli->elimina_nivel_id($id2);
     
      ?>
<script>
    
        alert('Nivel De Acceso  Se Elimino Correctamente');
        window.location='mant_nivel.php';
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
include 'vistas/cabeza.php';                                                             
 
 //----------------------------------------------------------------------------------------------
 
 
 
 
  ?>
    
</section>

<section class="mbr-section" id="listado1" style="background-color: rgb(255, 255, 255); padding-top: 120px; padding-bottom: 120px;">
<div class="mbr-section mbr-section__container mbr-section__container--middle">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-xs-center">
                        <h3 class="mbr-section-title display-2 ">Administrador del Sistema</h3>
                        <small class="mbr-section-subtitle bg-danger">
                            <?php if($accion==1){ ?>
                                Agregar  Administrador 
                            <?php } ?>
                           <?php if($accion==2){ ?>
                                Editar  Administrador   
                            <?php } ?>  
                            <?php if($accion==3){ ?>
                                Eliminar  Administrador   
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
                    
                        <?php if($accion==1){ ?>
                             <div class="form-group">
                                 <input class="form-control" type="text" name="admin" id="admin" placeholder="NOMBRE">
                             </div>
                         <div class="form-group">
                             <input class="form-control" type="email" name="email" id="email" placeholder="EMAIL">
                             </div>
                        <div class="form-group">
                            <input  class="form-control" type="password" name="pass" id="pass" placeholder="PASSWORD">
                             </div>
                            <div class="form-group">
                                <select class="form-control" type="text" name="nivel" id="nivel" >
                                    <option value="0">MASTER</option>
                                    <option value="1">ADMINISTRADOR</option>
                                    <option value="2">USUARIO</option>
                                </select>
                             </div>
                        <?php } ?>
                        
                            
                            
                        <?php if($accion==2 or $accion==3)  { ?>
                        <div class="form-group">
                             <input class="form-control" type="text" name="admin" id="admin" value="<?php echo strtoupper($n[0]['nombre_niv']) ?>" >                             
                         </div>  
                        <div class="form-group">
                            <input class="form-control" type="email" name="email" id="email" value="<?php echo strtoupper($n[0]['email']) ?>" >                             
                         </div> 
                        <div class="form-group">
                            <input class="form-control" type="text" name="pass" id="pass" value="<?php echo strtoupper($n[0]['password']) ?>" >                             
                         </div> 
                        <div class="form-group">
                                <select class="form-control" type="text" name="nivel" id="nivel" >
                                    <?php 
                                    if($n[0]['nivel']==0){$adm='MASTER';}
                                    if($n[0]['nivel']==1){$adm='ADMINISTRADOR';}
                                    if($n[0]['nivel']==2){$adm='USUARIO';}
                                    ?>
                                    <option value="<?php echo $n[0]['nivel']   ?>"><?php echo $adm;   ?></option>
                                    <option value="0">MASTER</option>
                                    <option value="1">ADMINISTRADOR</option>
                                    <option value="2">USUARIO</option>
                                </select>
                             </div>
                         <?php } ?>     
                   
                        <?php if($accion==1){ ?>
                        <button type="submit" class="btn btn-primary ">GUARDAR</button>
                        <input type="hidden" name="accion" value="<?php echo $accion ?>">
                        <?php } ?>
                        <?php if($accion==2){ ?>
                        <button type="submit" class="btn btn-primary ">ACTUALIZAR</button>
                        <input type="hidden" name="accion" value="<?php echo $accion ?>">
                        <input type="hidden" name="id2" value="<?php echo $id_niv ?>">
                        <?php } ?>
                        <?php if($accion==3){ ?>
                        <button type="submit" class="btn btn-primary">ELIMINAR</button>
                        <input type="hidden" name="accion" value="<?php echo $accion ?>">
                        <input type="hidden" name="id2" value="<?php echo $id_niv ?>">
                        <?php } ?>
                        
                        <a href="mant_nivel.php"  class="btn btn-danger col-lg-offset-3">CANCELAR</a>
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