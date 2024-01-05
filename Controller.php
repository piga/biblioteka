<?php

//include "View.php";

class Controller
{
    private $view, $conn;
    
    public function __construct()
    {
        $this->view = new View();
        
        //žao mi je što moram ovdje stavrati objekt baze, ali neznam drugačije.
        $db = Database::getInstance();
        $this->conn = $db->getConnection();
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
        $rows = [];
        
        $query = "select * from autor";
        $stmt = $this->conn->query($query, PDO::FETCH_ASSOC);
        $rows = $stmt->fetchAll();
        
        echo $this->view->prikazi_sve_autore($rows);
    }
    
    public function all_knjige()
    {
        $rows = [];
        
        $query = "select * from knjiga";
        $stmt = $this->conn->query($query, PDO::FETCH_ASSOC);
        $rows = $stmt->fetchAll();
        
        echo $this->view->prikazi_sve_knjige($rows);
    }
    
    public function __destruct()
    {}
}

?>