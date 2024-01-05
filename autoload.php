<?php

function u_class_folderu($className)
{
    $file = 'class/'.$className.'.php';
    
    if(file_exists($file)) include_once $file;
}

function u_root_folderu($className)
{
    $file = $className.'.php';
    
    if(file_exists($file)) include_once $file;
}

 spl_autoload_register('u_class_folderu');
 spl_autoload_register('u_root_folderu');
?>