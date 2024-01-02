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
        try
        {
            global $conn;

            $query = "insert into autor (ime, prezime) values (?, ?)";
            $stmt = $conn->prepare($query);

            $stmt->bindParam(1, $ime);
            $stmt->bindParam(2, $prezime);

            $ime = "jure";
            $prezime = "juric";    

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
        try
        {
            global $conn;
            
            $db = Database::getInstance();
            $conn = $db->getConnection();

            $query = "insert into knjiga (autor_id, naslov, godina_izdanja) values (?, ?, ?)";
            $stmt = $conn->prepare($query);

            $stmt->bindParam(1, $autor_id);
            $stmt->bindParam(2, $naslov);
            $stmt->bindParam(3, $god_izdanja);

            $autor_id = "1";
            $naslov = "U registraturi";
            $god_izdanja = "1799";

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