 <?php 
include 'libreria.php';

function cont_vis_user($id,$dia,$fec){
    
    
 }

function buscar_mot($id){
    $sql="SELECT * FROM mot_visita WHERE id_mot='$id'";
				$res=mysql_query($sql,conectar::con());
				$reg=mysql_fetch_assoc($res);
			        echo $reg['motivo'];	
			
}


    $id_user=$_GET['id'];
    $usuario=new usuario();                                                    
    $user=$usuario->leer_usuario_id($id_user) ; 
 
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
            <div class="container">
                
                    <div class="col-xs-12 text-xs-center">
                        <h3 class="mbr-section-title display-2 ">DETALLE DE VISISTAS</h3>
                        <small class="mbr-section-subtitle bg-danger">VISITAS DEL USUARIO</small>
                    </div>
               
            </div>
        </div>


    <div class="mbr-testimonials mbr-section mbr-section-nopadding">
        <div class="container">
            <div class="col-lg-8 col-lg-offset-2">

                <h2 class=""><?php echo strtoupper($user[0]['nombre_user']) ?> <a href="imprimir_reg.php?id=<?php echo $id_user ?>" class="btn btn-black col-lg-offset-3"> Imprimir Registros</a></h2>
                <table class="table table-bordered text-lg-center">
                    <tr class="table-inverse  letra-blanca "> 
                                          
                       
                        <td>Dia</td>
                        <td>Fecha</td>
                         <td>Motivo Visista</td>
                        
                      
                        
                                                                                              
                    </tr>
                    
                    <?php 
                        $visita=new visita();
                        $reg=$visita->leer_regvis_user($id_user);
                        
                            
                    for($i=0;$i<sizeof($reg);$i++){ 
                       
                       
                    ?>
                    <tr>                                                                                                                                                                                                                                                         
                       
                         <td><?php 
                                
                           
                               echo $reg[$i]['dia_visita'];
                                
                                ?></td>
                        
                         
                        <td><?php echo cambiaf_a_normal($reg[$i]['fecha_visita']); ?></td>
                       
                        <td><?php
                                   buscar_mot($reg[$i]['mot_visita']);
                                ?></td>                                                                                                                                                                                                                                                                                                                                            
                    </tr>
                    
                    <?php 
                    cont_vis_user($reg[$i]['id_user'],$reg[$i]['dia_visita'],$reg[$i]['fecha_visita']);
                    } ?>
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