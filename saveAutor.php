<?php
include_once "EntityFactory.php";
include_once "ControllerBiblioteka.php";

if(isset($_POST["ime"]) && isset($_POST["prezime"]))
{
    $ime = $_POST["ime"];
    $prezime = $_POST["prezime"];
    
    $a_c = new AutorCreator($ime, $prezime);
    $autor = $a_c->stvori();
    $autor->spremi();
    
    $kontroler = new ControllerBiblioteka();
    $kontroler->prikazi();
}
    

?>