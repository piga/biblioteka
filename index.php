<?php
   include "autoload.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Biblioteka</title>
        	<link rel="stylesheet" href="style.css">

    </head>
<body>
    <h1>Biblioteka</h1>
    
    
    <?php
    
    $ctrl = new Controller();
    
    echo "<div class='split left'>";
    $ctrl->prikazi_autor_formu();
    echo "<h2>Slijedi popis svih autora</h2>";
    $ctrl->all_autors();
    echo "</div>";

    
    echo "<div class='split right'>";
    $ctrl->prikazi_knjiga_formu();
    echo "<h2>Slijedi popis svih knjiga</h2>";
    $ctrl->all_knjige();
    echo "</div>";
    
    
   
    ?>
    
    
    </body>
</html>