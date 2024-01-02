<?php
   require "autoload.php";
?>

<!DOCTYPE html>
<html>
<body>
    <h1>Hello</h1>
    <p>
        <?php 
      
        $a_c     = new AutorCreator();
        $autor   = $a_c->stvori();
        $autor->spremi();
        unset($autor);
        unset($a_c);

        $k_c = new KnjigaCreator();
        $knjiga = $k_c -> stvori();
        $knjiga->spremi();
        unset($knjiga);
        unset($k_c);
        
        //echo save_autor();
        
        //echo save_knjiga();
        
        ?>
    </p>
    </body>
</html>