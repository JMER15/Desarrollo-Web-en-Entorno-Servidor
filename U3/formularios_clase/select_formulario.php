<?php

/**
 * Gestión de formularios
 * 
 * @author José Miguel
 */
$aDatosPersonales = array("nombre", "apellidos", "telefono");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba formularios</title>
</head>

<body>
    <form action="procesa_formulario4.php" method="post">
        <select name="select" id="">
            <option value="lunes">Lunes</option>
            <option value="martes">Martes</option>
            <option>Miercoles</option>
            <option>Jueves</option>
            <option>Viernes</option>
            <option>Sábado</option>
            <option>Domingo</option>
        </select>
        <input type="submit" name="enviar" value="enviar" />
    </form>

</body>

</html>