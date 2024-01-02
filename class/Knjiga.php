<?php

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