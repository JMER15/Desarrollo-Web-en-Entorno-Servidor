<?php

session_start();

require('../vendor/autoload.php');

use Dotenv\Dotenv;
use App\Models\Usuarios;

$dotenv = Dotenv::createImmutable(__DIR__ . '/..');
$dotenv->load();

include('../app/config/config.php');

$usuario = Usuarios::getInstancia();
$db = $usuario->open_connection();


if (!isset($_SESSION['perfil'])) {
    $_SESSION['perfil'] = 'invitado';
}

$mensajeError = '';
$login = false;

if ($_SESSION['perfil'] == 'admin') {
    $login = true;
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Login</h1>

<?php
    echo "logueado: " . $login;
?>

</body>

</html>