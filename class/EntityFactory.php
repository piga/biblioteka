<?php
    
abstract class EntityFactory
{
    abstract public function stvori(): Entity;
    
    
    public function __destruct()
    {
        echo "Objekt Kreator uništen. <br>";
    }
}










?>