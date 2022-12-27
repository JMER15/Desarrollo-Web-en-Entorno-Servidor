<?php

/**
 * 
 * @author Jose Mi
 */

session_start();
$bandera = false;

if ($_SESSION['perfil'] === 'editor') {
    $bandera = true;
}

if (isset($_POST['enviar'])) {
    $nombre = $_POST['nombre'];
    $_SESSION['noticias'][$nombre] = array();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Categoria</title>
</head>

<body>

    <h1>Crear Categorías</h1>
    <?php

    if ($bandera) {
        echo '<form action="' . htmlspecialchars($_SERVER['PHP_SELF']) . '" method="post">';
        echo 'Categoría <input type="text" name="nombre"/>&nbsp&nbsp&nbsp';
        echo '<input type="submit" name="enviar" value="Enviar"/>';
        echo '</form>';
        ?>
        <h2>Categorias creadas:</h2>
        <?php
        foreach ($_SESSION['noticias'] as $key => $value) {
            echo '<ul><li>'.$key.'</li></ul>';
        }
        echo "<a href=salir.php>Salir</a>&nbsp&nbsp&nbsp";
        echo "<a href=logout.php>Cerrar sesion</a>";
    } else {
        echo "No tienes acceso";
    }
    ?>
</body>

</html>