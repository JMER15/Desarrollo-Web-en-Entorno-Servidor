<?php

/**
 * 
 * @author josemi
 */

session_start();
require_once('vendor/autoload.php');

use App\Models\Equipo;

include('config/config.php');

$equipo = new Equipo();
$db = $equipo->conectaDB();

$mensajeError = '';

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

    if (!empty($equipo->login($user, $password, $db))) {
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

    <h1>CB POKEMONS</h1>

    <h2>Login</h2>

    <form action="" method="POST">
        <label>Usuario:</label>
        <input type="text" name="user" placeholder="Usuario"><br><br>

        <label>Contraseña: </label>
        <input type="password" name="password" placeholder="Contraseña"><br><br>

        <input type="submit" value="Acceder" name="send">&nbsp&nbsp&nbsp

        <a href="index.php">Invitado</a>

    </form>

    <span>
        <?php
        echo $mensajeError;
        ?>
    </span>

</body>

</html>