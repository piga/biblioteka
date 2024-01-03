<?php

//include "View.php";

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
    
    public function __destruct()
    {}
}

?>