<?php

/**
 * Fichero añadir equipos
 * 
 * @author josemi 
 */

session_start();
include_once('config/config.php');
require_once('vendor/autoload.php');

use App\Models\Equipo;

$equipoClase = new Equipo();
$db = $equipoClase->conectaDB();

if ($_SESSION['perfil'] == 'invitado') {
    header('Location: login.php');
}

if (isset($_POST['anadir'])) {
    $name = $_POST['name'];
    $equipoClase->insertEquipos($name,$db);
    echo 'Equipo añadido correctamente.';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>CB POKEMONS</title>
</head>

<body>

    <h1>CB POKEMONS</h1>

    <h2>Añadir nuevo equipo:</h2>

    <form action="" method="POST">
        <input type="text" name="name" value=""><br><br>
        <input type="submit" value="Añadir" name="anadir">&nbsp&nbsp&nbsp
        <a href="index.php">Volver</a>
    </form>

</body>

</html>