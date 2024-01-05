<?php

class View
{
    public function autor_forma(): string
    {
        return "
        <form action='saveAutor.php' method='POST'>
    <label for='ime'>Unesi ime autora: </label>
    <input type='text' name='ime' placeholder='npr. Darko'>
    <br>
    
    <label for='prezime'>Unesi prezime autora: </label>
    <input type='text' name='prezime' placeholder='npr. Vulin'>
    <br>
    <input type='submit' value='Spremi u bazu'>
    </form>
    ";
    
    }
    
    function knjiga_forma(): string
    {
        return "
        <form action='saveKnjiga.php' method='POST'>
    <label for='autor_id'>Unesi id autora: </label>
    <input type='text' name='autor_id' placeholder='npr. 23'>
    <br>
    
    <label for='naslov'>Unesi naslov knjige: </label>
    <input type='text' name='naslov' placeholder='npr. Zločin i kazna'>
    <br>
    
    <label for='god_izdanja'>Unesi godinu izdanja knjige: </label>
    <input type='text' name='god_izdanja' placeholder='npr. 2006'>
    <br>
    <input type='submit' value='Spremi u bazu'>
    </form>
    ";
    }
    
    public function prikazi_sve_autore($autori): string
    {
        $tablica = "<table border='1'>
        <tr>
            <th>ID</th>
            <th>Ime</th>
            <th>Prezime</th>
        </tr>
        ";
        
        foreach($autori as $autor)
        {
            $id = "<td>{$autor['id']}</td>";  //možda bi radilo i bez vitičastih zagrada
            $ime = "<td>{$autor['ime']}</td>";  
            $prezime = "<td>{$autor['prezime']}</td>";
                
            $red = "<tr>$id $ime $prezime</tr>";
            
            $tablica .= $red;
        }
        
        $tablica .= "</table>";
        
        return $tablica;
    }
   
    public function prikazi_sve_knjige($knjige): string
    {
        //funkcija će vratiti tablicu.
      $tablica = "<table border='1'>   
        <tr>
            <th>ID</th>
            <th>Autod ID</th>
            <th>Naslov</th>
            <th>Godina izdanja</th>
        </tr>
        ";
        
        foreach($knjige as $knjiga)
        {
            $id = "<td>{$knjiga['id']}</td>";  //možda bi radilo i bez vitičastih zagrada
            $a_id = "<td>{$knjiga['autor_id']}</td>";  
            $nasl = "<td>{$knjiga['naslov']}</td>";
            $god_izd = "<td>{$knjiga['godina_izdanja']}</td>";
                
            $red = "<tr>$id $a_id $nasl $god_izd</tr>";
            
            $tablica .= $red;
        }
        
        $tablica .= "</table>";
        
        return $tablica;
    }
    
    public function __destruct()
    {}
}
?>
