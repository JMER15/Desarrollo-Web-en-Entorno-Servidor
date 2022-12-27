<?php

/**
 * Gestión de formularios
 * 
 * @author José Miguel
 */

// logica de negocio
$numero1 = 0;
$numero2 = 0;

$mensajeError1 = "";
$mensajeError2 = "";

$procesaFormulario = false;

if (isset($_POST['enviar'])) {
    $procesaFormulario = true;

    // validamos el primer input
    $numero1 = $_POST['numero1'];
    if (empty($numero1)) {
        $mensajeError1 = "campo del numero 1 requerido";
        $procesaFormulario = false;
    }
    $numero2 = $_POST['numero2'];
    if (empty($numero2) ) {
        $mensajeError2 = "campo del numero 2 requerido";
        $procesaFormulario = false;
    }
}

echo var_dump($numero1);
echo var_dump($numero2);

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

    <?php

    if ($procesaFormulario) {
        echo $numero1 + $numero2;
    } else {
    ?>
        <form action="" method="POST">
            <input type="number" name="numero1" value="<?php echo $numero1; ?>" /> <?php echo $mensajeError1 ?>
            <br />
            <input type="number" name="numero2" value="<?php echo $numero2; ?>" /> <?php echo $mensajeError2 ?>
            <br />
            <input type="submit" name="enviar" value="enviar" />
        </form>
    <?php
    }
    ?>


</body>

</html>