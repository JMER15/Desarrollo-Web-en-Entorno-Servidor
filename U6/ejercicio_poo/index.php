<?php
require_once('vendor/autoload.php');

use App\Models\Equipo;

include_once('config/config.php');
include_once('lib/functions.php');

session_start();
// conexión base de datos
$equipoClase = new Equipo();
$db = $equipoClase->conectaDB();

if (!isset($_SESSION['perfil'])) {
    $_SESSION['perfil'] = 'invitado';
}

$mensajeError = '';
$login = false;

// if (isset($_POST['login'])) {

//     $user = clearData($_POST['user']);
//     $pass = clearData($_POST['pass']);

//     if (($_POST['user'] == 'usuario' && ($_POST['pass'] == 'usuario'))) {
//         $_SESSION['usuario'] = 'Usuario';
//     } else {
//         $mensajeError = 'Error de credenciales';
//     }
// }

if ($_SESSION['perfil'] == 'admin') {
    $login = true;
}

$arrayEquipos = $equipoClase->getEquipos($db);

// buscar un equipo 
if (isset($_POST['buscar'])) {
    // var_dump($_POST['name']);
    $name = $_POST['name'];
    $arrayEquipos = $equipoClase->getEquipo($name, $db);
}

// eliminar equipo
if (isset($_GET['delete'])) {

    if ($_SESSION['perfil'] == 'admin') {
        $id = $_GET['id'];
        $equipoClase->deleteEquipos($id, $db);
        $arrayEquipos = $equipoClase->getEquipos($db);
    } else {
        header('Location: login.php');
    }
}

// añadir equipo
if (isset($_POST['anadir'])) {
    header('Location: anadir.php');
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

    <form action="" method="POST">
        <input type="text" name="name">
        <input type="submit" value="Buscar Equipo" name="buscar">
        <input type="submit" value="Añadir Equipo" name="anadir">
    </form>

    <h2>Equipos en la base de datos</h2>

    <form action="login.php" method="POST">
        <!-- poner post -->
        <input type="submit" value="Cerrar Sesión" name="cerrarSesion">
    </form>

    <ul>
        <?php
        if ($login) {
            foreach ($arrayEquipos as $key => $value) {
                echo '<li>' . $value['equipo'] . '</li>';
                echo "<a href='edit.php?edit=" . $value['equipo'] . "&id=" . $value['id'] . "'>Edit</a>&nbsp&nbsp
                <a href='index.php?delete=" . $value['equipo'] . "&id=" . $value['id'] . "'>Delete</a>";
            }
        } else {
            foreach ($arrayEquipos as $key => $value) {
                echo '<li>' . $value['equipo'] . '</li>';
            }
        }
        ?>
    </ul>

</body>

</html>