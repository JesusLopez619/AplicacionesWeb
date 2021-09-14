<?php
$p1 = $_GET ['persona1'];
$e1 = $_GET ['edad1'];
$p2 = $_GET ['persona2'];
$e2 = $_GET ['edad2'];

if($e1>$e2){
    echo "$p1 tiene $e1 de edad y es mayor que $p2 que tiene $e2 de edad";
}else if($e2>$e1){
    echo "$p2 tiene $e2 de edad y es mayor que $p1 que tiene $e1 de edad";
}else if($e2=$e1){
    echo "$p1 tiene $e1 de edad la misma edad que $p2 que es $e2";
}
?>

<form methot="GET">
        Nombre de la 1era persona<br>
        <input type="text" name="persona1" >
        <br>
        Edad de 1era persona<br>
        <input type="number" name="edad1">
        <br>
        Nombre de la 2da persona<br>
        <input type="text" name="persona2">
        <br>
        Edad de 2da persona<br>
        <input type="number" name="edad2">
        <br>
        <input type="submit" name="envio" >
</form>