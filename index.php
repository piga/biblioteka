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
    
    echo "<h2>Slijedi popis svih autora</h2>";
    $ctrl->all_autors();
    
    echo "<h2>Slijedi popis svih knjiga</h2>";
    $ctrl->all_knjige();
   
    ?>
    
    
    </body>
</html>