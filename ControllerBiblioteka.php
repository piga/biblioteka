<?php

class ControllerBiblioteka
{
    
    public function prikazi()
    {
        $view = new ViewBiblioteka();
        
        echo $view->autor_forma();
        echo $view->knjiga_forma();
    }
    
}

?>