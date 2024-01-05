<?php

//include "autoload.php";

class Controller
{
    private $view;
    
    public function __construct()
    {        
        $this->view = new View();
    }
    
    public function prikazi_autor_formu()
    {
        echo $this->view->autor_forma();
    }
    public function prikazi_knjiga_formu()
    {
        echo $this->view->knjiga_forma();
    }
    
    public function all_autors()
    {
        $autor = new Autor();
        
        $rows = $autor->all();
                
        echo $this->view->prikazi_sve_autore($rows);
    }
    
    public function all_knjige()
    {
        $knjiga = new Knjiga();
        
        $rows = $knjiga->all();
                
        echo $this->view->prikazi_sve_knjige($rows);
    }
    
    public function __destruct()
    {}
}

?>