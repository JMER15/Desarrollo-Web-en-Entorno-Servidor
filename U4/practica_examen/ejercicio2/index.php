<?php

/**
 * 
 * @author Jose Mi
 */

include_once('lib/functions.php');

session_start();

$noticias = array(
    "videojuegos" => array("Videojuego1", "Videojuego2", "Videojuego3"),
    "series" => array("Serie1", "Serie2", "Serie3"),
    "cine" => array("Pelicula1", "Pelicula2", "Pelicula3"),
    "literatura" => array("Literatura1", "Literatura2", "Literatura3")
);

$aUsuarios = array(
    array('usuario' => "editor", 'psw' => 'editor', 'perfil' => 'editor'),
    array('redactor' => "redactor", "psw" => 'redactor', "perfil" => "redactor")
);

if (!$_SESSION['usuario']) {
    $nombre = "";
    $psw = "";
    $_SESSION['usuario'] = null;
}

if (isset($_POST['enviar']) && !empty($_POST['nombre']) && !empty($_POST['psw'])) {
    //si se ha enviado el formulario y los campos no están vacíos
    $nombre = clearData($_POST['nombre']);
    $psw = $_POST['psw'];

    foreach ($aUsuarios as $key => $value) {

        if ($value['perfil'] == 'editor') {

            if ($value['usuario'] === $nombre &&  $value['psw'] === $psw) {
                $_SESSION['usuario'] = $value['usuario'];
                $_SESSION['perfil'] = $value['perfil'];
                $_SESSION['psw'] = $value['psw'];
                $_SESSION['noticias'] = $noticias;
            }
        } else {
            if ($value['redactor'] === $nombre &&  $value['psw'] === $psw) {
                $_SESSION['usuario'] = $value['redactor'];
                $_SESSION['perfil'] = $value['perfil'];
                $_SESSION['psw'] = $value['psw'];
                $_SESSION['noticias'] = $noticias;
            }
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>

<body>

    <?php
    if (isset($_SESSION['perfil']) && isset($_SESSION['usuario'])) {

        if ($_SESSION['perfil'] === 'editor') {
    ?>
            <h2>Hola, estás cómo editor</h2>
            <a href="crearCategoria.php">Crear Categoria</a>
            <a href="salir.php">Salir</a>
            <a href="logout.php">Cerrar Sessión</a>
        <?php
        } elseif ($_SESSION['perfil'] === 'redactor') {
        ?>
            <h2>Hola, estás cómo redactor</h2>
            <a href="crearNoticia.php">Crear Noticia</a>
            <a href="salir.php">Salir</a>
            <a href="logout.php">Cerrar Sessión</a>
        <?php
        }
    } else {
        ?>
        <h1>Login Examen</h1>
        <form action="" method="post">
            Usuario: <input type="text" name="nombre" value="" /><br><br>
            Contraseña: <input type="password" name="psw" value="" /><br><br>
           <input type="submit" name="enviar" value="Acceder" /><br>
        </form>
    <?php
    }
    // var_dump($_SESSION['perfil']);
    ?>

</body>

</html>