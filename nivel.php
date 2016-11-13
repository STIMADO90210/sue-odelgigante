<?php

 class nivel{
     private $nivel;
            
                //metodo  constructor
					public function contruc()
					{
						$this->$nivel=array();
					}
                                        
                                        
                                        function loguea($email,$pass){
                                            $sql="SELECT * FROM niveles WHERE email='$email' and password='$pass'";
                                               $res=mysql_query($sql,conectar::con());
                                               
                                                while($reg=mysql_fetch_assoc($res))
                                                {
                                                        $this->nivel[]=$reg;
                                                }
                                                        return $this->nivel;	
                                         }
 }
        
?>