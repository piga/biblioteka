<?php

class Autor implements Entity
{
    private $ime, $prezime, $conn;
    
    public function __construct($i, $p)
    {
        $this->ime = $i;
        $this->prezime = $p;
        $db = Database::getInstance();
        $this->conn = $db->getConnection();
    }
    
    public function spremi()
    {
        try
        {
            $query = "insert into autor (ime, prezime) values (?, ?)";
            $stmt = $this->conn->prepare($query);

            $stmt->bindParam(1, $this->ime);
            $stmt->bindParam(2, $this->prezime);

            $stmt->execute();

            echo "Autor uspješno dodan. <br>";
        }
        catch (PDOException $e)
        {
            echo "spremanje autora je pošlo po zlu: ".$e->getMessage();
        }
    }
    public function __destruct()
    {
    
    }
}


?>