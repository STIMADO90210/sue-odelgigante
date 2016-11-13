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
<section class="mbr-section" id="listado1" style="background-color: rgb(255, 255, 255); padding-top: 120px; padding-bottom: 120px;">
<div class="mbr-section mbr-section__container mbr-section__container--middle">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 text-xs-center">
                        <h3 class="mbr-section-title display-2 ">Lista de Usuarios</h3>
                        <small class="mbr-section-subtitle bg-danger">Usuarios del Infocentro </small>
                        
                    </div>
                </div>
            </div>
        </div>

    
    <a href="imprime_usuario.php" class="btn btn-info col-lg-offset-2">Imprimer Reporte</a>
    <br>

    <div class="mbr-testimonials mbr-section mbr-section-nopadding">
        <div class="container">
            <div class="row">

                
                <table class="table table-bordered text-lg-center table-responsive">
                    <tr class="table-inverse  letra-blanca "> 
                        <td>N°</td>
                        <td>Nombre</td>
                        <td>Cedula</td>
                        <td>Telf</td>
                        
                        <td>Edad</td>
                        <td>Sexo</td>
                         <td>Fecha<br>Inscripcion</td> 
                        <td>Visitante<br>(N/R)</td>                        
                        <td>Discap</td>                       
                        <td>Comunidad<br> Indigena</td>
                       
                        <td># Visitas</td>                                                                        
                        
                    </tr>
                    
                    <?php 
                     $usuario=new usuario();
                        $user=$usuario->leer_usuario();  
                    for($i=0;$i<sizeof($user);$i++)
                    { ?>
                    <tr>                    
                        <td><?php echo $user[$i]['id_user'] ?></td>
                        <td><?php echo $user[$i]['nombre_user'] ?></td>
                        <td><?php echo $user[$i]['cedula_user'] ?></td>
                        <td><?php echo $user[$i]['telefono_user'] ?></td>
                       
                        
                        <td><?php
                                 $edad= date('Y/m/d') - $user[$i]['fecha_nac'];
                                echo $edad; 
                                ?></td>
                        
                        
                        <td><?php 
                            if($user[$i]['sexo_user']=='m'){$sex='Masculino';}
                            if($user[$i]['sexo_user']=='f'){$sex='Femenino';}
                        echo $sex; 
                                ?></td>
                        
                        <td><?php echo cambiaf_a_normal($user[$i]['fecha_inscrip']) ?></td>
                        
                        
                        <td><?php
                        
                               $nro=$user[$i]['cont_vis'];
                                switch ($nro)
                                 { 
                                     case 1:
                                         $tv='Nuevo';
                                         break;
                                     case $nro>1:  
                                         $tv='Regular';
                                         break;
                                 }
                            
                         echo $tv;
                                ?></td>
                       
                        
                        <td><?php                        
                                     $discap=new discap();                                                    
                                     $dis=$discap->leer_discap_user($user[$i]['id_user']);  
                                     $pos=$dis[0]['disc_user'];
                                     $discap=new discap();
                                     $dis=$discap->leer_discap_id($pos); 
                                     if(sizeof($dis==0)){
                                   echo  'NO APLICA' ;
                                     }else{
                                   echo  $dis[0]['discapacida'] ;
                                     }
                                ?></td>
                        
                        
                        
                        <td><?php
                                     $indigena=new indigena();                                                    
                                   $ind=$indigena->leer_indigena_user($user[$i]['id_user']);
                                   $posi=$ind[0]['indi_user'];
                                   
                                   $indigena=new indigena();                                                    
                                   $ind=$indigena->leer_indigena_id($posi);
                                   if(sizeof($ind==0)){
                                       echo  'NO APLICA' ;
                                     }else{                                                                      
                                     echo $ind[0]['comunidad'] ;
                                     }
                                
                                
                                ?></td>
                        
                          
                        
                        
                        <td><?php
                        
                            
                            echo $nro;
                     
                                
                        ?></td>
                       
                        
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