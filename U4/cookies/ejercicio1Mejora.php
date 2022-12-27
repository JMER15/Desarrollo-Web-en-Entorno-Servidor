<?php

/**
 * Ejercicio 3
 * 
 * Crea un formulario de login que permita al usuario recordar los datos introducidos. Incluye una
 * opción para borrar la información almacenada.
 * 
 * @author José Miguel Escribano Ruiz
 */

//logica de negocio
$procesaFormulario = false;
$usuario = '';
$password = '';

// array

$arrayContrasenas = array(
    array('usuario' => 'josemi', 'contrasena' => 'josemi'),
    array('usuario' => 'maria', 'contrasena' => 'maria'),
    array('usuario' => 'hugo', 'contrasena' => 'hugo'),
    array('usuario' => 'javi', 'contrasena' => 'javi'),
    array('usuario' => 'jose', 'contrasena' => 'jose'),
);


if (isset($_COOKIE['usuario'])) {
    $usuario = $_COOKIE['usuario'];
    $password = $_COOKIE['contrasena'];
}

if (isset($_POST['send'])) {
    foreach ($arrayContrasenas as $key => $value) {
        // echo " El usuario es: ".$value['usuario']. " y la contraseña es: ". $value['contrasena']. "</br>";
        if ($_POST['usuario'] == $value['usuario']  && $_POST['contrasena'] == $value['contrasena']) { //el usuario es el de la cookie
            $procesaFormulario = true;
            if (isset($_POST['recordar'])) {
                setcookie('usuario', $_POST['usuario'], time() + 3600);
                setcookie('contrasena', $_POST['contrasena'], time() + 3600);
                print_r($_COOKIE);
            } else {
                setcookie('usuario', $_POST['usuario'], time() - 3600);
                setcookie('contrasena', $_POST['contrasena'], time() - 3600);
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
    <title>Ejercicio 3</title>
</head>

<body>

    <h1>Logueo en un formulario</h1>

    <?php
    if ($procesaFormulario) {
        echo "Cookie ok";  // si queremos que salga el ok en la misma pagina cuando logueamos
    } else {
    ?>
        <form action="" method="POST">
            Usuario <input type="text" name="usuario" value="<?php echo $usuario ?>">
            Contraseña <input type="password" name="contrasena" value="<?php echo $password ?>">
            <input type="checkbox" name="recordar" value="recordar"> Acepta los terminos
            <input type="submit" name="send" value="Enviar">
        </form>
    <?php // esto es si quiero que me vuelva a cargar el formulario
    }

    ?>

</body>

</html>