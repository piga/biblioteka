
<?php

include_once "autoload.php";

if(isset($_POST["autor_id"]) && isset($_POST["naslov"]) && isset($_POST["god_izdanja"]))
{
    $ai = $_POST["autor_id"];
    $n = $_POST["naslov"];
    $gi = $_POST["god_izdanja"];
    
    $k_c = new KnjigaCreator($ai, $n, $gi);
    $knjiga = $k_c->stvori();
    $knjiga->spremi();
    
    //sada radim redirect na početnu stranicu
    header("Location: http://biblioteka.localhost");
    exit();  //neznam zašto mi je potreban exit ali tako je pisalo na internetu.
}
 
?>