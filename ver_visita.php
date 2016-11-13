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
<section class="mbr-section" id="listado2" style="background-color: rgb(255, 255, 255); padding-top: 120px; padding-bottom: 120px;">
<div class="mbr-section mbr-section__container mbr-section__container--middle">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-xs-center">
                        <h3 class="mbr-section-title display-2 ">Registro de Visitas al Infocentro</h3>
                        <small class="mbr-section-subtitle bg-danger">Buscar Visitante y Registrar Visita</small>
                    </div>
                </div>
            </div>
        </div>


    <div class="mbr-testimonials mbr-section mbr-section-nopadding">
        <div class="container">
            <div class="row">
               
                <form action="" name="buscar" id="buscar" class=" form-group " method="post">
                <div class="form-group">
                    <div class="col-lg-4">
                    <input  class=" form-control" name="buscar">                                                                                                                                                                    
                    </div>
                    <div class="col-lg-2">
                    <input class="" type="image" src="assets/images/magnifying-glass.png" width="50">                                                                       
                    </div>                      
                 </div> 
                 </form>   
                
                <div class="col-lg-12">
                    <h6 class="col-lg-offset-1">Buscar Por Cedula</h6>
                </div>
               
               
               
                <?php 
                    
                ?>
                 <form action="" method="post" name="reg" class="form-group">
                 
                <table class="table table-bordered text-lg-center table-responsive">
                    <tr class="table-inverse  letra-blanca "> 
                       
                        <td>Cedula</td>
                        <td>Nombre</td>
                        <td>Edad</td>                        
                        <td>Telefono</td> 
                        <td>Registrar Visita</td> 
                    </tr>
                    
                    

                    
                    <?php 
                    //var_dump($_POST['buscar']);
                    $cedu="";
                    
                    if(isset($_POST['buscar'])!=""){
                        $cedu=$_POST['buscar'];
                    }
                    $usuario=new usuario();
                    if($cedu==""){
                         $user=$usuario->leer_usuario(); 
                    }else{
                         $user=$usuario->leer_usuario_ced($cedu);                                                                    
                    }                                                                                                                                                                                                                   
                    
                    
                    for($i=0;$i<  sizeof($user);$i++){ ?>
                    <tr class="">                    
                        <td><?php echo $user[$i]['cedula_user'] ?></td>
                        <td><?php echo $user[$i]['nombre_user'] ?></td> 
                        
                        <td><?php 
                        $edad= date('Y/m/d') - $user[$i]['fecha_nac'];
                        echo $edad ; 
                                
                                ?></td>
                        
                         <td><?php echo $user[$i]['telefono_user'] ?></td>                         
                       
                             
                         <td><a href="mostrar_reg.php?id=<?php echo $user[$i]['id_user'] ?>" class="btn btn-danger">Ver Visitas</a></td> 
                        
                       <!---<button type="submit"  class="btn btn-primary">Registrar Visita</button>--->
                        
                       
                    </tr>
                    <?php } ?>
                </table>
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