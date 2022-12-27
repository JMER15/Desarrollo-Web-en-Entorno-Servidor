<?php

/**
 * Fichero editar equipos
 * 
 * @author: josemi
 */
session_start();
include_once('config/config.php');
require_once('vendor/autoload.php');

use App\Models\Equipo;

$equipoClase = new Equipo();
$db = $equipoClase->conectaDB();

$name = $_GET['edit'];
$id = $_GET['id'];


if ($_SESSION['perfil'] == 'invitado') { //para que el invitado no pueda acceder por la url
    header('Location: login.php');
    exit;
    // exit para salir del if
}

if (isset($_POST['modificar'])) {
    $name1 = $_POST['name'];
    $data = array('equipo' => $name, 'id' => $id, 'newName' => $name1);
    $equipoClase->updateEquipos($data, $db);
    header('Location: index.php');
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

    <h2>Modificando el equipo: <?php echo $name ?></h2>
    <form action="" method="POST">
        <input type="text" name="name" value="<?php echo $name; ?>"><br><br>
        <input type="submit" value="Modificar" name="modificar">&nbsp&nbsp&nbsp
        <a href="index.php">Volver</a>
    </form>
</body>

</html>