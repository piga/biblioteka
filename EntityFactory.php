<?php

abstract class EntityFactory
{
    abstract public function stvori(): Entity;
    
    
    public function __destruct()
    {
        echo "Objekt Kreator uništen. <br>";
    }
}


class AutorCreator extends EntityFactory
{
    public function stvori(): Entity
    {
        return new Autor();
    }
}


class KnjigaCreator extends EntityFactory
{
    
    public function stvori(): Entity
    {
        return new Knjiga();
    }
}


interface Entity
{
    public function spremi();
        
}

class Autor implements Entity
{
    public function spremi()
    {
        save_autor();
    }
    public function __destruct()
    {
        echo "Objekt Autor je uništen. <br>";
    }
}

class Knjiga implements Entity
{
    public function spremi()
    {
        save_knjiga();
    }
    public function __destruct()
    {
        echo "Objekt Knjiga je uništena. <br>";
    }
}
?>