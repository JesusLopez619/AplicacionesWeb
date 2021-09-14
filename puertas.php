<?php

if (isset( $_GET['slc'])){
    
    $op=$_GET['op'];
    switch($op){ 
    case 0:
        echo "GANASTE UN RELUCIENTE AUTO DEL AÑO";
        break;
    case 1:
        echo "GANASTE UNA MISERA PIEDRA";
        break;
    case 2:
        echo "GANASTE UNA CABRA PA LA LECHE";
        break;
} }

?>

<form>

<form >
        Escoga una puerta para ganar un premio
        <br>
       
        <select name="op">
            <option value="0">Puerta_1</option>
            <option value="1">Puerta_2</option>
            <option value="2">Puerta_3</option>
            
        </select>
        
        <input type="submit" name="slc" value="Seleccionar">
    </form>

</form>