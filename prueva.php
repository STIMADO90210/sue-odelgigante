<?php

include 'libreria.php';

   

  $nomb=$_POST['nombre'];
   $ced=$_POST['cedula'];
   $telf=$_POST['telefono'];
   $edad=$_POST['edad'];
   $sexo=$_POST['sexo'];
   $fecha=date('d-m-Y');
  // $fecha=cambiaf_a_normal($fecha);
   
$usuario=new usuario();
$user=$usuario->guarda_usuario($nomb, $ced, $telf, $edad, $sexo, $fecha);
//--------------------------------------------------------------------------------------------------  
$usuario=new usuario();
$user=$usuario->leer_usuario();
$ult= sizeof($user);
$id_ult=$user[$ult-1]['id_user'];
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
$vis=$visita->meter_regvis_user($id_ult, $motvis, $fecha, $nomb_dia);


?>
<!------------------------------------------------------------------------------------------------------------------------------>
                            <div class="modal-open" id="agregar">
                                
                                        <div class=" modal-dialog" >
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    <h3 class="modal-title text-danger ">Agrega Discapacidad</h3>
                                                </div>
                                                <div class="modal-body">
                                                   
                                                    <p>Identación en PHP
                                                    PHP es un lenguaje que no requiere de identación (sangrado)
                                                    para ser interpretado. Por el contrario, todo el código fuente
                                                    PHP puede ser escrito sin identación, aunque esto, es una
                                                    práctica desaconsejada, ya que al igual que el código
                                                    embebido, dificulta la lectura y la consecuente escalabilidad y
                                                        mantenimiento de la app. 
                                                    </p>
                                                </div>
                                                <div class="modal-footer">
                                                   
                                                    <a class="btn btn-danger">Cerrar</a>
                                                    <a class="btn btn-info">Cancelar</a>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    
                                 </div>
                                            
                            <!------------------------------------------------------------------------------------------------------------------------------>
