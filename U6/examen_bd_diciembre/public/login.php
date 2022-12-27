<?php

/**
 * 
 * @author josemi
 */

session_start();

require('../vendor/autoload.php');

use Dotenv\Dotenv;
use App\Models\Usuarios;

$dotenv = Dotenv::createImmutable(__DIR__ . '/..');
$dotenv->load();

include('../app/config/config.php');

$usuario = new Usuarios();
$db = $usuario->open_connection();

$mensajeError = '';

//login admin

if (!isset($_SESSION['perfil'])) {
    $_SESSION['perfil'] = 'invitado';
}

if (isset($_POST['cerrarSesion'])) {
    $_SESSION['perfil'] = 'invitado';
}

if ($_SESSION['perfil'] == 'admin') {
    header('Location: index.php');
}

if (isset($_POST['send'])) {
    $user = $_POST['user'];
    $password = $_POST['password'];

    if (!empty($usuario->login())) {
        $_SESSION['perfil'] = 'admin';
        header('Location: index.php');
    } else {
        $mensajeError = 'Error en las credenciales.';
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>

    <h1>Bookmarks</h1>

    <h2>Login</h2>

    <form action="" method="POST">
        
        <?php 
        include('../app/include/login_form.html')
        ?>

        <a href="index.php">Invitado</a>

    </form>

    <span>
        <?php
        echo $mensajeError;
        ?>
    </span>

</body>

</html>