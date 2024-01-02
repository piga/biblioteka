<?php

class KnjigaCreator extends EntityFactory
{
    private $autor_id, $naslov, $god_izdanja;
    
    public function __construct($ai, $n, $gi)
    {
        $this->autor_id = $ai;
        $this->naslov = $n;
        $this->gi = $gi;
    }
    
    public function stvori(): Entity
    {
        return new Knjiga($this->autor_id, $this->naslov, $this->gi);
    }
}

?>