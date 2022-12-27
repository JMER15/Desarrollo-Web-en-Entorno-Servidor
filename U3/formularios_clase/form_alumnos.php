<?php

/**
 * Gestión de formularios
 * 
 * @author José Miguel
 */
$aDatosPersonales = array("nombre","apellidos","telefono");
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
    <form action="procesa_formulario3.php" method="POST">
    <?php
    foreach ($aDatosPersonales as $key => $value) { //$key toma valores 0,1,2
        echo "<input name='$value' />"; //entrada[] se permite anotación de arrays
    }
    ?>
    <input type="submit" name="enviar" value="enviar" />
    </form>
</body>

</html>