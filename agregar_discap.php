 <?php 
include 'libreria.php';


			if(isset($_POST['discap']) and $_POST['discap']!=''){
				$discap=new discap();
				$d=$discap->meter_discap($_POST['discap']);
			   
			   ?>
				
					<script> 
							alert('Discapacidad se Añadio Correctamente');
						    window.location="mant_discap.php"
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
 
 if(isset($_GET['id']) and $_GET['id']!=''){
      $disc=new discap();
      $d=$disc->elimina_discap_id($_GET['id']) ;
      
                    
 }
 
 
  ?>
    
</section>

<section class="mbr-section" id="listado1" style="background-color: rgb(255, 255, 255); padding-top: 120px; padding-bottom: 120px;">
<div class="mbr-section mbr-section__container mbr-section__container--middle">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-xs-center">
                        <h3 class="mbr-section-title display-2 ">Agregar Nueva Discapacidad</h3>
                        <small class="mbr-section-subtitle bg-danger">Agregar</small>
                       
                                   
                    </div>
                </div>
            </div>
        </div>


    <div class="mbr-testimonials mbr-section mbr-section-nopadding" id="recarga">
        

<div class="container">
	<div class="col-lg-8">
         <form class="form-group  col-xs-offset-6" id="discap" name="discap" method="post" action="" >
                <div class="form-group">
                   
                          <input name="discap" id="discap" class="form-control" placeholder="DISCAPACIDAD">
                </div>
                                                  
                                                    
         <br>
        
                   
                 <button type="submit" class="btn btn-danger">GUARDAR</button>                                                    
                       <a href="mant_discap.php" class="btn btn-info">CANCELAR</a>
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
</html><!------------------------------------------------------------------------------------------------------------------------------>
