<?php

 spl_autoload_register(function($className)
    {
        include_once $className.'.php';
        //  @include_once(__DIR__ . '/' . strtolower(str_replace('\\', '/', $class_name)) . '.php');

    });
?>