<?php
    echo $nombre=$_POST['nombre']," ",$apellido=$_POST['apellido'];

    echo "es de la ciudad de ",$ciudad=$_POST['ciudad']," su edad es ",$edad=$_POST['edad'];

    echo " su numero personal es ",$telefono=$_POST['telefono']," su correo es personal es ",$correo=$_POST['correo'];

    echo " es una persona ",$estado_civil=$_POST['estado_civil'];
?>

<form method="post">

    <label>Nombre: </label><input type="text" name="nombre"><br>
    <label>Apellido: </label><input type="text" name="apellido"><br>
    <label>Ciudad: </label><select name="ciudad">
        <option>Empalme</option>
        <option>Guaymas</option>
        <option>Hermosillo</option>
        <option>Obregon</option>
        <option>California</option>
        <option>Durango</option>
        <option>Alamos</option>
        <option>phoenix</option>
    </select>
       <br>
            <label>Edad: </label><input type="number" name="edad"><br>
            <label>Telefono: </label><input type="text" name="telefono"><br>
            <label>Correo: </label><input type="text" name="correo"><br>
            Estado civil:<br>
    <select name="estado_civil">
        <option>Soltero</option>
        <option>Casado</option>
    </select>
        <button> Enviar </button>
</form>

