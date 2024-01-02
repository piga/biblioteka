<?php
   require "autoload.php";
?>

<!DOCTYPE html>
<html>
<body>
    <h1>Biblioteka</h1>
    <p>
        <?php 
      
        
        
        $kontroler = new ControllerBiblioteka();
        $kontroler->prikazi();
        
        //echo save_autor();
        
        //echo save_knjiga();
        
        ?>
    </p>
    </body>
</html>