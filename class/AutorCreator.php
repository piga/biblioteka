<?php

class AutorCreator extends EntityFactory
{
    private $ime, $prezime;
    
    public function __construct($i, $p)
    {
        $this->ime = $i;
        $this->prezime = $p;
    }
    
    public function stvori(): Entity
    {
        return new Autor($this->ime, $this->prezime);
    }
}

?>