<?php

/**
 * 
 */

session_start();

$bandera = false;

if ($_SESSION['perfil'] === "redactor") {
    $bandera = true;
}

if (isset($_POST['enviar']) && !empty($_POST['nombre']) && !empty($_POST['categoria'])) {
    $nombre = $_POST['nombre'];
    $categoria = $_POST['categoria'];

    if ($categoria == $_SESSION['noticias'][$categoria]) { //si la categoria que le paso existe en la sesión
        $_SESSION['noticias'][$categoria] = array_push($_SESSION['noticias'][$categoria], $nombre);
    } else {
        echo 'no existe esa categoría';
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Noticias</title>
</head>

<body>

    <h1>Crear Noticias</h1>
    <?php
    if ($bandera) {
    ?>
        <form action="" method="post">
            Noticia <input type="text" name="nombre" /><br><br>
            Categoria <input type="text" name="categoria" /><br><br>
            <input type="submit" name="enviar" value="Enviar" /><br>
        </form>

        <h2>Noticias Creadas: </h2>

        <?php
        foreach ($_SESSION['noticias'] as $key => $value) {
            echo "<h3>" . $key . "</h3>";
            foreach ($value as $value2) {
                echo "<li>" . $value2 . "</li>";
            }
        }
        ?>
        <a href=salir.php>Salir</a><br>
        <a href=logout.php>Cerrar sesion</a>;
    <?php
    } else {
        echo 'No tienes acceso';
    }
    ?>

</body>

</html>