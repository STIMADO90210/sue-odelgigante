<?php 

class conectar
{
    
			public static function con()
			{
                            
				
				
				// la conexion a la base de datos db_diario
				
				$conexion=@mysql_connect('localhost','root','');
				mysql_select_db('db_info');
				return $conexion;
				}
				
				
}//fin de clase conectar
?>

