<?php
 /*spl_autoload_register(function($className)
    {
        include_once $className.".php";
        //  @include_once(__DIR__ . '/' . strtolower(str_replace('\\', '/', $class_name)) . '.php');

    });*/
//neznam zašto mi ovo gore ne radi.
//spl_autoload_call("index");
spl_autoload_call("saveAutor");
spl_autoload_call("Database");
spl_autoload_call("saveKnjiga");
spl_autoload_call("View");

?>