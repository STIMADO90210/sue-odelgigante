 <?php 
include 'libreria.php';      

if(isset($_POST['nick']) and $_POST['nick']!=''){
    $nick=$_POST['nick'];
    $fecha=$_POST['fecha'];
     $hora=$_POST['hora'];
    $comenta=$_POST['comenta'];
    $id2=$_POST['id_art'];
    $come=new comenta();
    $c=$come->add_comenta($fecha,$hora,$nick,$comenta,$id2);
    ?>
<script>
    
       
        window.location='blog_detalle.php?id=<?php echo $id2 ;?>';
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
<br>
<br>
<br>
<br>
<section class="mbr-section" id="listado1" style="background-color: rgb(255, 255, 255); padding-top: 120px; padding-bottom: 120px;">



    <div class="mbr-testimonials mbr-section mbr-section-nopadding" id="recarga">
        <?php 
        if(isset($_GET['id'])){
            $id=$_GET['id'];
        }
        $blog=new blog();
        $b=$blog->leer_blog_id($id);
      
        ?>
        <div class="container jumbotron color-negro">
           
            <div class="row">
                <div class="container ">
                    <div class="text-uppercase letra-blanca text-lg-center"><h1 class=""><?php echo $b[0]['titulo_art'] ?></h1></div>
                </div>
                
                <div class="container">
                <div class="text-uppercase letra-amarilla text-lg-right"><h5>Publicado : <?php echo $b[0]['fec_art'] ?></h5></div>
                </div>
                
                <div class="col-lg-8 center col-lg-offset-2 ">
                    <img src="assets/images/<?php echo $b[0]['img_art'] ?>" class="img-thumbnail center" >
                </div>
                <div class="col-lg-12">
                    <div class=" container">
                    <div class="" ><h3 class="text-justify letra-blanca">
                    
                        <br>
                        <?php 
                    
                    
                    
                    echo "<p>" . $b[0]['cont_art'] ."</p>"; 
                            
                            ?></h3></div>
                </div>
                
                <br>
                        <br>
                        <br>
                        <div class="clearfix"></div>
                        <a  href="blog_full.php" class="btn btn-info btn-lg  col-lg-offset-2">Volver a Lista de Articulos .... </a> 
                        </div>
            </div>
            <br>
        </div>
        <br>
        
        <br>
        <div class="col-lg-6">
        <div class="container color-negro">
            <br>
            <h3 class="letra-blanca">Deja Tu Comentario</h3>
        <form action="" method="post" name="form1" class="form-group">
                <div class="form-group">
                    <input class="form-control" name="nick" placeholder="Nick">
                </div>
            
            
                    <div class="form-group">
                        <h5 class="letra-blanca">Comentario</h5>
                        <textarea name="comenta" id="comenta" rows="5" class="form-control" >
                        
                        </textarea>
                    </div>              
            
                
            <?php 
                $fecha=date('d-m-Y');
                $hora=date('h-i-s a');
            ?>  
            <button type="submit" class="btn btn-info pull-lg-right">Comentar</button>
            <input type="hidden" name="fecha" value="<?php echo  $fecha ?>">
            <input type="hidden" name="hora" value="<?php echo  $hora ?>">
            <input type="hidden" name="id_art" value="<?php echo  $id ?>">
            </form>
        </div>
        </div>
        <div class="clearfix"></div>
        <br>
        <br>
        
                             <?php 
                             $come=new comenta();
                             $c=$come->leer_comenta_id($id);
                                if(sizeof($c)==0){
                                     ?>
                        <h3 class="col-lg-offset-1 ">No Hay Comentarios Publicados en este Articulo</h3>
                                    <?php 
                                }else{
                                     ?>
                       <h3 class="col-lg-offset-1 ">Comentarios</h3>
                                    <?php 
                                }
                           ?>
        
        <br>
        <?php 
        
        for($i=0;$i<  sizeof($c);$i++){ ?>
        <div class="container color-negro">
            <br>
            <div class="col-lg-3 letra-blanca">
                <h4>        <?php echo 'NICK : '. strtoupper($c[$i]['nick']) ?></h4>
            </div>
             <div class="col-lg-3 letra-blanca">
                <h4>        <?php echo 'FECHA: '. strtoupper($c[$i]['fecha']) ?></h4>
            </div>
            <div class="col-lg-3 letra-blanca">
                <h4>        <?php echo 'HORA: '. strtoupper($c[$i]['hora']) ?></h4>
            </div>
            <div class="container">
            <div class="col-lg-12 color-blanco">
                <br>
                <h4 class=" letra-azul">        <?php echo  strtoupper($c[$i]['comentario']) ?></h4>
                <br>
            </div>
                </div>
            <br>
             
        </div>
        
        <?php } ?>
        <br>
        <br>
        <div class="clearfix"></div>
        
        
        <br>
        <br>
        
        
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