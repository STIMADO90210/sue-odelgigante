 <?php 
include 'libreria.php';

   if (isset($_GET['id_delete'])and $_GET['id_delete']!=''){
       $id_delete=$_GET['id_delete'];
       ?>
   
        <script>  
                 elim= confirm("Desea Eliminar El Articulo # " + <?php echo $id_delete ?>);
                 if(elim){                     
                     window.location='delete_art.php?id=<?php echo $id_delete ?>';                      
                 }else{
                    alert('Eliminar cancelado');
                    window.location='blog_full.php';
                 }
        </script> 
        
        <?php
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
                        <h3 class="mbr-section-title display-2 ">Articulos del Blog</h3>
                        <a href="add_articulo.php" class="btn btn-lg btn-primary">Añadir Articulo</a>
                       
                        
                       
                                                               
                    </div>
                </div>
            </div>
        </div>


    <div class="mbr-testimonials mbr-section mbr-section-nopadding" id="recarga">
        <div class="container">
            <div class="row">
  
                
                <table class="table table-bordered">
                    <tr class="table-inverse  letra-blanca text-lg-center">
                        <td>ID</td>
                        <td>Articulo</td>
                        <td colspan="2" >Acciones</td>
                    </tr>
                    <?php 
                    $blog=new blog();
                    $b=$blog->leer_blog();
                    for($i=0;$i<  sizeof($b);$i++){
                    ?>
                    <tr class="text-lg-center">
                        <td><br> <?php  echo $b[$i]['id_art']; ?></td>
                        <td class="">
                            <br>
                            <?php  echo "<p class='letra-azul'>". strtoupper($b[$i]['titulo_art'])."</p>"; ?>
                        </td>
                        <td ><a href="edit_articulo.php?id=<?php echo $b[$i]['id_art'] ?>" class="btn btn-primary">Editar</a></td>
                        <td><a href="lista_blog.php?id_delete=<?php echo $b[$i]['id_art'] ?>" class="btn btn-danger">Eliminar</a></td>
                        
                    </tr>
                    <?php 
                    }
                    ?>
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