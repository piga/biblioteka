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
        echo "Objekt Autor je uništen. <br>";
    }
}

class Knjiga implements Entity
{
    private $autor_id, $naslov, $god_izdanja, $conn;
    
    public function __construct($ai, $n, $gi)
    {
        $this->autor_id = $ai;
        $this->naslov = $n;
        $this->god_izdanja = $gi;
        $db = Database::getInstance();
        $this->conn = $db->getConnection();
    }
    
    public function spremi()
    {
    try
            {

                $query = "insert into knjiga (autor_id, naslov, godina_izdanja) values (?, ?, ?)";
                $stmt = $this->conn->prepare($query);

                $stmt->bindParam(1, $this->autor_id);
                $stmt->bindParam(2, $this->naslov);
                $stmt->bindParam(3, $this->god_izdanja);

                $stmt->execute();

                echo "Knjiga uspješno dodana. <br>";
            }
        catch (PDOException $e)
        {
            echo "spremanje knjige je pošlo po zlu: ".$e->getMessage();
        }

    }
    public function __destruct()
    {
        echo "Objekt Knjiga je uništena. <br>";
    }
}
?>