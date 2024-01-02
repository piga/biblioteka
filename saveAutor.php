<?php

function save_autor() : string
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

        return "Autor uspješno dodan. <br>";
    }
    catch (PDOException $e)
    {
        echo "spremanje autora je pošlo po zlu: ".$e->getMessage();
    }
        
}

?>