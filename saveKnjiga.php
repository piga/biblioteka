<?php

function save_knjiga() : string
{
    try
    {
        $db = Database::getInstance();
        $conn = $db->getConnection();

        $query = "insert into knjiga (autor_id, naslov, godina_izdanja) values (?, ?, ?)";
        $stmt = $conn->prepare($query);

        $stmt->bindParam(1, $autor_id);
        $stmt->bindParam(2, $naslov);
        $stmt->bindParam(3, $god_izdanja);

        $ime = "2";
        $prezime = "U registraturi";
        $god_izdanja = "1786";

        $stmt->execute();

        return "Knjiga uspješno dodana. <br>";
    }
    catch (PDOException $e)
    {
        echo "spremanje autora je pošlo po zlu: ".$e->getMessage();
    }
        
}

?>