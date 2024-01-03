<?php
   include "autoloadMVC.php";
?>

<!DOCTYPE html>
<html>
<body>
    <h1>Biblioteka</h1>
    <p>
        
    </p>
    
    <?php
    
    $ctrl = new Controller();
    $ctrl->prikazi_autor_formu();
    $ctrl->prikazi_knjiga_formu();
    $ctrl->all_autors();
    ?>
    
    
    </body>
</html>