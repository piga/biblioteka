<?php

include_once "autoload.php";

if(isset($_POST["ime"]) && isset($_POST["prezime"]))
{
    $ime = $_POST["ime"];
    $prezime = $_POST["prezime"];
    
    $a_c = new AutorCreator($ime, $prezime);
    $autor = $a_c->stvori();
    $autor->spremi();
    
    //sada radim redirect na početnu stranicu
    header("Location: http://biblioteka.localhost");
    exit();   //neznam zašto mi je potreban exit ali tako je pisalo na internetu.
}

?>