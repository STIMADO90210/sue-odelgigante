<!DOCTYPE html>
<html>
<?php
include 'libreria.php';
include 'cabecera.php';

?>
<body>
 <!----------------------------------------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------------------------------------->   
<section id="menu-0">
    
  <?php
 include 'vistas/cabeza.php';
 
 if(isset($_POST['email']) and  $_POST['email']!='') {
     $nivel=new nivel();
     $n=$nivel->loguea($_POST['email'], $_POST['pass']);
     if(sizeof($n)>0){
        
         $_SESSION['id']=$n[0]['id_niv'];
         $_SESSION['nombre']=$n[0]['nombre_niv'];
         $_SESSION['email']=$n[0]['email_niv'];
         $_SESSION['nivel']=$n[0]['nivel'];
         $_SESSION['cargo']=$n[0]['cargo_nivel'];
         
         ?>
            <script>
                alert('Bienvenido al sistema');
                window.location='index.php';
            </script>
         <?php
         
     }
 }
  ?>

</section>

<!----------------------------------------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------------------------------------->
<section>
    <br>
    <br>
    <br><br>
    <br>
    
    <div class="container">
        <div class="mbr-section mbr-section__container mbr-section__container--middle">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-xs-center">
                        <h3 class="mbr-section-title display-2 ">INICIAR SESSION</h3>
                        <small class="mbr-section-subtitle bg-danger">FORMULARIO PARA LOGUEARSE</small>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    
    <div class="container col-lg-6 col-lg-offset-2">
        <form class="form-group" action="" method="post">
            <div class="form-group">
                <input class="form-control" name="email" id="email" placeholder="Email">                    
            </div>
            <div class="form-group">
                <input class="form-control" type="password" name="pass" id="pass" placeholder="Password">                    
            </div>
            <button class="btn btn-primary col-lg-offset-2" type="submit">   Enviar                      </button>
        </form>
        
    </div>
    
     <br>
    <br>
    <br><br>
    <br><br>
    <br>
    <br><br>
    <br>
    
</section>
<!----------------------------------------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------------------------------------->

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