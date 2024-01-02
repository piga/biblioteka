<?php

function knjiga_forma(): string
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

?>
