<?php

class ViewBiblioteka
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
}
?>
