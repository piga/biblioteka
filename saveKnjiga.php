
<?php
include_once "EntityFactory.php";
//include_once "ControllerBiblioteka.php";

if(isset($_POST["autor_id"]) && isset($_POST["naslov"]) && isset($_POST["god_izdanja"]))
{
    $ai = $_POST["autor_id"];
    $n = $_POST["naslov"];
    $gi = $_POST["god_izdanja"];
    
    $k_c = new KnjigaCreator($ai, $n, $gi);
    $knjiga = $k_c->stvori();
    $knjiga->spremi();
}
 
?>