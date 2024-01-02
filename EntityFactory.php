<?php
include_once "Database.php";
    
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
            $stmt->bindParam(2, $his->prezime);

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