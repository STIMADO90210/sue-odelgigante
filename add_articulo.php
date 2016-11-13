 <?php 
include 'libreria.php';
//var_dump($_POST);

      if(isset($_POST['titulo'])and $_POST['titulo']!=''){
          $titulo=$_POST['titulo'];
          $arti=$_POST['arti'];
           $imagen=$_POST['imagen'];
           $fecha=date('d-m-Y');
           
           $blog=new blog();
           $b=$blog->add_blog($titulo,$arti,$imagen,$fecha);
           ?>
<script>
    
        alert('Articulo Se Registro Correctamente');
        window.location='blog_full.php';
</script>

    <?php
    //        
      }               
 
 ?>
<!DOCTYPE html>
<html>
<!----------------------------------------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------------------------------------->  
<script type="text/JavaScript">
<!--
   
// -->
</script>

    <?php
include 'cabecera.php';
?>
<!----------------------------------------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------------------------------------->

<body onload="JavaScript:AutoRefresh(15000);">
    
  
 <!----------------------------------------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------------------------------------->   
<section id="menu-0">   
  <?php
 include 'vistas/cabeza.php';                                                             
 
 //----------------------------------------------------------------------------------------------
 
 
 
 
  ?>
    
</section>

<section class="mbr-section" id="listado1" style="background-color: rgb(255, 255, 255); padding-top: 120px; padding-bottom: 120px;">
<div class="mbr-section mbr-section__container mbr-section__container--middle">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-xs-center">
                        <h3 class="mbr-section-title display-2 ">Modulo Blog</h3>
                        <small class="mbr-section-subtitle bg-danger">Modulo Ingresar Articulos Nuevos al Blog</small>                                                                                                                                      
                    </div>
                </div>
            </div>
        </div>


    <div class="mbr-testimonials mbr-section mbr-section-nopadding" id="recarga">
        <div class="container">
            <div class="row">
  
                <form action="" method="post" name="form1" id="form1" class="form-group">
                    <div class="form-group">
                        <input class="form-control" name="titulo" id="titulo" placeholder="TITULO">
                    </div>
                    <div class="form-group">
                        <h5>Articulo</h5>
                        <textarea name="arti" id="arti" rows="8" class="form-control" >
                        
                        </textarea>
                    </div>    
                     
                   <div class="form-group col-lg-9">                    
                        <input class="form-control color-blanco" name="imagen" type="text" placeholder="IMAGEN">
                        
                    </div>    
                    <a onclick="javascript:subirimagen();" class="btn btn-danger">BUSCAR IMAGEN</a>
                    <br>
                    <br>
                    <br>
                    <div class="clearfix"></div>
                    <button type="submit" class="btn btn-primary col-lg-4" name="enviar">Guardar Articulo</button>
                    
                </form>
                
                
                

            </div>

        </div>

    </div>

</section>

<section class="mbr-section mbr-section-md-padding mbr-footer footer1" id="contacts1-0" style="background-color: rgb(46, 46, 46); padding-top: 90px; padding-bottom: 40px;">
    
   <?php
    include 'vistas/rodapie.php';
   ?>
    
</section>
 
<script> 
 function subirimagen()
  {
	  self.name = 'opener';
	  remote = open('subirimg.php','remote','toolbar=yes, scrollbars=yes, resizable=yes, top=100, left=100, width=1150, height=500');
	  remote.focus();
	  
  }
  </script>







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