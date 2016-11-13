   
<?php 
       
       
// includes de todas las clases 
include 'libreria.php';
   
// guardando registros de ususarios

if(isset($_GET['id']) and $_GET['id']!=''){
    
  $id2=$_GET['id'];
   
$usuario=new usuario();
$user=$usuario->leer_usuario_id($_GET['id']);

//--------------------------------------------------------------------------------------------------  

//--------------------------------------------------------------------------------------------------  
$discap=new discap();
$disc=$discap->leer_discap_user($_GET['id']);
$nro_d=$disc[0]['disc_user'];
//$nro_disc=$disc[0]['disc_user'];
$discap=new discap();
$disc=$discap->leer_discap_id($nro_d);
$discapacida=$disc[0]['discapacida'];


//--------------------------------------------------------------------------------------------------  
$indico=new indigena();
$ind=$indico->leer_indigena_user($_GET['id']);  
$nro_i=$ind[0]['indi_user'];
$indico=new indigena();
$ind=$indico->leer_indigena_id($nro_i);

    $comuna=$ind[0]['comunidad'];
//--------------------------------------------------------------------------------------------------  
            
$motivo=new visita() ;
$mot=$motivo->contar_regvis_user($_GET['id']);  
$nro_v=$mot[0]['mot_visita'];
$motivo=new visita();
$mot=$motivo->leer_visita_id($nro_v);

    $motivos=$mot[0]['motivo'];
    
}

//-------------------------------------------------------------------------------------------------------------------

if(isset($_POST['id2']) and $_POST['id2']!=''){
   $id2=$_POST['id2'];
    $nomb=$_POST['nombre'];
   $ced=$_POST['cedula'];
   $telf=$_POST['telefono'];
   $dia_nac=$_POST['dia_nac'];
   $mes_nac=$_POST['mes_nac'];
   $ano_nac=$_POST['ano_nac'];
   $fecha_nac=$ano_nac.'/'.$mes_nac.'/'.$dia_nac;
   $sexo=$_POST['sexo'];
 
     
  // $fecha=date('d-m-Y');
  // $fecha=cambiaf_a_normal($fecha);
   
$usuario=new usuario();
$user=$usuario->actualizar_usuario2_id($nomb, $ced, $telf, $fecha_nac, $sexo, $id2);
//--------------------------------------------------------------------------------------------------  
//$usuario=new usuario();
//$user=$usuario->leer_usuario();
//$ult= sizeof($user);
//$id_ult=$user[$ult-1]['id_user'];
//--------------------------------------------------------------------------------------------------  
$disca=$_POST['discap'];
$discap=new discap();
$disc=$discap->editar_discap_user($id2, $disca);

//--------------------------------------------------------------------------------------------------  
    
$indico=$_POST['indio'];
$indio=new indigena();
$ind=$indio->editar_indigena_user($id2, $indico);  
    
    
//--------------------------------------------------------------------------------------------------    

//$nomb_dia=$dia[date('w')];
//$motvis=$_POST['motvis'];
//$visita=new visita();
//$vis=$visita->meter_regvis_user($id_ult, $motvis, $fecha, $nomb_dia);
    ?>
<script>
    
        alert('Usuario Se Actualizo Correctamente');
       window.location='mant_usuario.php';
</script>


<?php         
// window.location='mant_usuario.php';          
          
        }



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



<div class="mbr-section mbr-section__container mbr-section__container--middle">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-xs-center">
                    <h3 class="mbr-section-title display-2">Editar Usuarios</h3>
                    <small class="mbr-section-subtitle bg-danger">Editar Datos Del Usuario</small>
                </div>
            </div>
        </div>
    </div>
    <div class="mbr-section mbr-section-nopadding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-lg-10 col-lg-offset-1" data-form-type="">
                    <!----------------------------------------------------------------------------------->
                    <form action="editar_usuario.php" method="post" class="form-group" name="form1" >                      
                          
                        <div class="row row-sm-offset">

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="form1-0-name">Nombre y Apellido<span class="form-asterisk">*</span></label>
                                    <input type="text"  value="<?php echo $user[0]['nombre_user']; ?>" class="form-control" name="nombre" required=""  >
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="form1-0-email">Cedula<span class="form-asterisk">*</span></label>
                                    <input type="text" value="<?php echo $user[0]['cedula_user']; ?>" class="form-control" name="cedula" required="" data-form-field="Email" id="form1-0-email">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="form1-0-phone">Telefono</label>
                                    <input type="text" value="<?php echo $user[0]['telefono_user']; ?>" class="form-control" name="telefono" data-form-field="Phone" id="form1-0-phone">
                                </div>
                            </div>
                            
                            <div class="col-lg-6">
                                <div class="form-group">
                                    
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label class="form-control-label letra-blanca" for="">Dia</label>
                                    <select class="form-control" name="dia_nac">
                                        
                                        <?php for($d=1;$d<31;$d++){ ?>
                                        <option class="text-lg-left" value="<?php echo $d ?>"><?php echo $d ?></option>
                                        <?php } ?>
                                    </select>
                                        </div>
                                    </div>   
                                    <div class="col-lg-5">
                                         <div class="form-group">
                                              <label class="form-control-label letra-blanca" for="">Mes</label>
                                    <select class="form-control" name="mes_nac">
                                        <?php for($m=0;$m<12;$m++){ ?>
                                        <option class="text-lg-left" value="<?php echo $m ?>"><?php echo $mes[$m] ?></option>
                                        <?php } ?>
                                    </select>
                                         </div>
                                   </div>   
                                    <div class="col-lg-4">
                                         <div class="form-group">
                                              <label class="form-control-label letra-blanca" for="">Año</label>
                                    <select class="form-control" name="ano_nac">
                                        <?php for($a=2016;$a>1900;$a--){ ?>
                                        <option class="text-lg-left" value="<?php echo $a ?>"><?php echo $a ?></option>
                                        <?php } ?>
                                    </select>
                                         </div>
                                    </div>        
                                    
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <div class="form-group">
                                    <label class="form-control-label" for="form1-0-phone">Sexo</label>
                                    
                                    <select class="form-control" name="sexo">   
                                        
                                            <?php
                                            
                                            if($user[0]['sexo_user']=='m'){$sex='Masculino';}
                                            if($user[0]['sexo_user']=='f'){$sex='Femenino';}
                                            echo $sex;
                                            ?></option>
                                        <option class="text-lg-left" value="m">Masculino</option>
                                        <option class="text-lg-left" value="f">Femenino</option>
                                        
                                    </select>
                                    
                                </div>
                            </div>
                            
                            
                             <div class="col-lg-4">
                                       
                                <div class="form-group">
                                    <label class="form-control-label" for="form1-0-phone">discapacidad</label>
                                    <?php
                                        //include 'clases/discap.php';
                                 
                                         $di=new discap();                                                    
                                         $d=$discap->leer_discap_user($id2);
                                         
                                         $nro_dis=$d[1]['disc_user'];   
                                         $di2=new discap();
                                         $d2=$di2->leer_discap_id($nro_dis);
                                     ?> 
                                    <select class="form-control" name="discap"> 
                                        
                                        <option class="" value='<?php echo $d2[0]['id_disc'] ?>'><?php echo $d2[0]['discapacida'] ?></option> 
                                        <?php  
                                        //include 'clases/discap.php';
                                         $discap=new discap();                                                    
                                         $dis=$discap->leer_discap();
                                        for($i=0;$i<sizeof($dis);$i++){  ?>                                       
                                           <option class="" value="<?php echo $dis[$i]['id_disc'] ?>"><?php echo $dis[$i]['discapacida'] ?></option>                                        
                                        <?php } ?>                                                                                
                                    </select>                                    
                                </div>
                            </div>
                            
                            
                             <div class="col-lg-6">
                                       
                                <div class="form-group">
                                    <label class="form-control-label" for="form1-0-phone">Comunidad Indigena</label>
                                    <?php
                                        $ind=new indigena;                                                    
                                         $e=$ind->leer_indigena_user($id2);
                                         
                                         $nro_dis2=$e[0]['indi_user'];   
                                         $ind2=new indigena;
                                         $e2=$ind2->leer_indigena_id($nro_dis2);                                      
                                     ?> 
                                    <select class="form-control" name="indio">    
                                        
                                        
                                        <option class="" value="<?php echo $e2[0]['id_ind'] ?>"><?php echo $e2[0]['comunidad'] ?></option>
                                        <?php 
                                         //include 'clases/discap.php';
                                         $indigena=new indigena();                                                    
                                        $ind=$indigena->leer_indigena();
                                        for($i=0;$i<sizeof($ind);$i++){  ?>                                       
                                           <option class="" value="<?php echo $ind[$i]['id_ind'] ?>"><?php echo $ind[$i]['comunidad'] ?></option>                                        
                                        <?php } ?>                                                                                
                                    </select>                                    
                                </div>
                            </div>
                            
                            
                              <div class="col-lg-6">
                                       
                                <div class="form-group">
                                    <label class="form-control-label" for="form1-0-phone">Motivo de Visista</label>
                                    <?php
                                        //include 'clases/discap.php';
                                         $visita=new visita();
                                        $vis=$visita->leer_visita();                                       
                                     ?> 
                                    <select class="form-control" name="motvis">    
                                        
                                        <?php   for($i=0;$i<sizeof( $vis);$i++){  ?>                                       
                                           <option class="" value="<?php echo  $vis[$i]['id_mot'] ?>"><?php echo  $vis[$i]['motivo'] ?></option>                                        
                                        <?php } ?>                                                                                
                                    </select>                                    
                                </div>
                            </div>
                            
                            
                         

                        </div>

                       
                            
                        <div><input type="submit" name="actualizar" class="btn btn-primary"  value=ACTUALIZAR /></div>
                         <input type="hidden" name="id2" value="<?php echo $id2 ?>">
                        

                    </form>
                </div>
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