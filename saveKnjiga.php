<?php

function save_knjiga()
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

            $autor_id = "24";
            $naslov = "Ja sam obrambeni igrač";
            $god_izdanja = "1990";

            $stmt->execute();

            echo "Knjiga uspješno dodana. <br>";
        }
        catch (PDOException $e)
        {
            echo "spremanje knjige je pošlo po zlu: ".$e->getMessage();
        }
    }

?>