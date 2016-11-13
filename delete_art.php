<?php

include 'libreria.php';
$id_del=$_GET['id'];
$blog=new blog();
$b=$blog->delete_blog_id($id_del);
  ?>
<script>
    
        alert('Articulo Eliminado Correctamente');
        window.location='blog_full.php'; 
</script>

    <?php
        
?>
