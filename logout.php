<?php
include 'libreria.php';


 
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<?php
include 'cabecera.php';
include 'vistas/cabeza.php';
 
 ?>
<body>
<?php
         $_SESSION['id']='';
         $_SESSION['nombre']='';
         $_SESSION['email']='';
         $_SESSION['nivel']='';
         $_SESSION['cargo']='';
 
 session_destroy();
 
 ?>
 <script>
 

 window.setTimeout('window.location="index.php";',".$ss."); 
 
 </script>"; 
</body>
</html>