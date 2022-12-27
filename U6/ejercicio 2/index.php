<?php
include_once('config/config.php');
include_once('lib/functions.php');

session_start();

if (!isset($_SESSION['perfil'])) {
    $_SESSION['perfil'] = 'invitado';
}

$mensajeError = '';
$login = false;

if (isset($_POST['login'])) {

    $user = clearData($_POST['user']);
    $pass = clearData($_POST['pass']);

    if (($_POST['user'] == 'usuario' && ($_POST['pass'] == 'usuario'))) {
        $_SESSION['usuario'] = 'Usuario';
    } else {
        $mensajeError = 'Error de credenciales';
    }
}

// conexión base de datos
$db = conectaDB();

$arrayEquipos = getEquipos($db);

// buscar un equipo 
if (isset($_POST['buscar'])) {
    var_dump($_POST['name']);
    $name = $_POST['name'];
    $arrayEquipos = getEquipo($name, $db);
}

// eliminar equipo
if (isset($_GET['delete'])) {
    $id = $_GET['id'];
    deleteEquipos($id, $db);
    $arrayEquipos = getEquipos($db);
}

// añadir equipo
if (isset($_POST['anadir'])) {
    echo header('Location: anadir.php');
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
    
    <ul>
        <?php
        if (!$login) {
            foreach ($arrayEquipos as $key => $value) {
                echo '<li>'.$value['equipo'].'</li>';
                echo "<a href='edit.php?edit=".$value['equipo']."&id=".$value['id']."'>Edit</a>&nbsp&nbsp
                <a href='index.php?delete=".$value['equipo']."&id=".$value['id']."'>Delete</a>";
            } 
        }else{
            foreach ($arrayEquipos as $key => $value) {
                echo '<li>'.$value['equipo'].'</li>';
            } 
        }
        ?>
    </ul>

</body>

</html>