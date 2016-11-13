<?php
include_once 'clases/conecta.php';
include_once 'C:\xampp/htdocs/infocentro/fpdf181/fpdf.php';
include_once 'clases/usuarios.php';
include_once 'clases/discap.php';
include_once 'clases/indigena.php';
include_once 'clases/visita.php';
include_once 'clases/regvisita.php';
include_once 'clases/contador.php';
include_once 'clases/nivel.php';
include_once 'clases/blog.php';
include_once 'clases/comenta.php';

?>



<?php 
// activa la fecha zona horaria de caracas
				date_default_timezone_set('America/caracas');
                                
                            
       
       
       
				// verifica si no hay session abierta y la activa inmediatamente
				if(!session_start())
				{	
					session_start();
				}
 function buscarfecha($fec){
     $visita=  array();
     $sql="SELECT * FROM cont WHERE fecha='$fec'";
     $res=mysql_query($sql,conectar::con());
     while($reg=mysql_fetch_assoc($res))
				{
					$visita[]=$reg;
				}
					return $visita;
 }


        $dia=array('domingo','lunes','martes','miercoles','jueves','viernes','sabado');
        $mes=  array('enero','febrero','marzo','abril','mayo','junio','julio','agosto','septiembre','octubre','noviembre','diciembre');
        
        function cambiaf_a_normal($fecha){ 
                ereg( "([0-9]{2,4})-([0-9]{1,2})-([0-9]{1,2})", $fecha, $mifecha); 
                $lafecha=$mifecha[3]."-".$mifecha[2]."-".$mifecha[1]; 
                return $lafecha; 
        } 
        
?>
