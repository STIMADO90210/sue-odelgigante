   
<?php 
        
// includes de todas las clases 
include 'libreria.php';
$hallado=0;
if(isset($_POST['cedula'])){
    $per=new usuario();
    $user=$per->buscar_cedula($_POST['cedula']); 
    $hallado=  sizeof($user);
}

// guardando registros de ususarios
if($hallado==0){
if(isset($_POST['registrar']) and $_POST['nombre']!=''){
    
  $nomb=$_POST['nombre'];
   $ced=$_POST['cedula'];
   $telf=$_POST['telefono'];
   
   $dia_nac=$_POST['dia_nac'];
   $mes_nac=$_POST['mes_nac'];
   $ano_nac=$_POST['ano_nac'];
   $fecha_nac=$ano_nac.'/'.$mes_nac.'/'.$dia_nac;
   
   $sexo=$_POST['sexo'];
   //$fecha=date('d-m-Y');
   $cont=1;
  // $fecha=cambiaf_a_normal($fecha);
   
$usuario=new usuario();
$user=$usuario->guarda_usuario($nomb, $ced, $telf, $fecha_nac, $sexo,$cont);
//--------------------------------------------------------------------------------------------------  
$usuario=new usuario();
$user=$usuario->leer_usuario();
if(sizeof($user)>0){
$ult=sizeof($user);
$indice=$user[$ult-1]['id_user'];
  $id_ult=$indice;
}else{
    $id_ult=1;  
}

//--------------------------------------------------------------------------------------------------  

$disca=$_POST['discap'];
$discap=new discap();
$disc=$discap->meter_discap_user($id_ult, $disca);

//--------------------------------------------------------------------------------------------------  

$indico=$_POST['indio'];
$indio=new indigena();
$ind=$indio->meter_indigena_user($id_ult, $indico);  
    
    
//--------------------------------------------------------------------------------------------------    

$nomb_dia=$dia[date('w')];
$motvis=$_POST['motvis'];
$visita=new visita();
$fecha=date('Y-m-d');
$vis=$visita->meter_regvis_user($id_ult, $motvis, $fecha, $nomb_dia);
//--------------------------------------------------------------------------------------------------  



    ?>
<script>    
        alert('Usuario Se Registro Correctamente');
        window.location='listado1.php';
</script>
    <?php

}
}else{
    ?>
<script>
    
        alert('Cedula ya registrada Verifique los Datos');
       
</script>

    <?php
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
<br>
<br>
<br>


<div class="mbr-section mbr-section__container mbr-section__container--middle">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-xs-center">
                    <h3 class="mbr-section-title display-2">Registro Usuarios Nuevos</h3>
                    <small class="mbr-section-subtitle bg-danger">Introducir Datos Del Usuario</small>
                </div>
            </div>
        </div>
    </div>
    <div class="mbr-section mbr-section-nopadding">
        <div class="container color-negro">
            <br>
            <br>
            <div class="row">
                <div class="col-xs-12 col-lg-10 col-lg-offset-1" data-form-type="">
                    <!----------------------------------------------------------------------------------->
                    <form action="" method="post" class="form-group" name="form1" >                      
                          
                        <div class="row row-sm-offset">

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label letra-blanca" for="form1-0-name">Nombre y Apellido<span class="form-asterisk">*</span></label>
                                    <input type="text" class="form-control" name="nombre" required="" data-form-field="Name" id="form1-0-name">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label letra-blanca" for="form1-0-email">Cedula<span class="form-asterisk">*</span></label>
                                    <input type="text" class="form-control" name="cedula" required="" data-form-field="Email" id="form1-0-email">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label letra-blanca" for="form1-0-phone">Telefono</label>
                                    <input type="text" class="form-control" name="telefono" data-form-field="Phone" id="form1-0-phone">
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
                                            
                                    <!--<input type="email" class="form-control" name="edad" required="" data-form-field="Email" id="form1-0-email">-->
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <div class="form-group">
                                    <label class="form-control-label letra-blanca" for="form1-0-phone">Sexo</label>
                                    <select class="form-control" name="sexo">
                                       
                                        <option class="text-lg-left" value="m">Masculino</option>
                                        <option class="text-lg-left" value="f">Femenino</option>
                                        
                                    </select>
                                    
                                </div>
                            </div>
                            
                            
                             <div class="col-lg-4">
                                       
                                <div class="form-group">
                                    <label class="form-control-label letra-blanca" for="form1-0-phone">discapacidad</label>
                                    <?php
                                        //include 'clases/discap.php';
                                        $discap=new discap();                                                    
                                        $dis=$discap->leer_discap();                                       
                                     ?> 
                                    <select class="form-control" name="discap"> 
                                        <option value="0">No Aplica</option>
                                        <?php   for($i=0;$i<sizeof($dis);$i++){  ?>                                       
                                           <option class="" value="<?php echo $dis[$i]['id_disc'] ?>"><?php echo $dis[$i]['discapacida'] ?></option>                                        
                                        <?php } ?>                                                                                
                                    </select>                                    
                                </div>
                            </div>
                            
                            
                             <div class="col-lg-6">
                                       
                                <div class="form-group">
                                    <label class="form-control-label letra-blanca" for="form1-0-phone">Comunidad Indigena</label>
                                    <?php
                                        //include 'clases/discap.php';
                                         $indigena=new indigena();                                                    
                                    $ind=$indigena->leer_indigena();                                       
                                     ?> 
                                    <select class="form-control" name="indio">
                                         <option value="0">No Aplica</option>
                                        <?php   for($i=0;$i<sizeof($ind);$i++){  ?>                                       
                                           <option class="" value="<?php echo $ind[$i]['id_ind'] ?>"><?php echo $ind[$i]['comunidad'] ?></option>                                        
                                        <?php } ?>                                                                                
                                    </select>                                    
                                </div>
                            </div>
                            
                            
                              <div class="col-lg-6">
                                       
                                <div class="form-group">
                                    <label class="form-control-label letra-blanca" for="form1-0-phone">Motivo de Visista</label>
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

                       
                            <input type="hidden" name="tipvis" value="0">
                            <div><input type="submit" name="registrar" class="btn btn-info"  value=REGISTRAR" /></div>
                            
                        

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