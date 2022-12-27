<?php 
/**
 * 
 * @author
 */

 //logica negocio
 session_start();
 if (!isset($_SESSION['perfil'])) {
    $_SESSION['perfil'] = 'invitado';
    $_SESSION['user'] = [];
 }

 //includes
 include('config/config.php')


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio1</title>
</head>
<body>

    <div class="cabecera">
        <h1>Ejercicio 1</h1>
    </div>

    <div>
        <?php
            if ($_SESSION['perfil'] == 'invitado') {
                include('include/login_form.html');
                echo ('No tines cuenta!!! <a href = "registro.php">Registrate</a>');
            } 
            else {
                echo ('Estas cómo'.$_SESSION['perfil']);
                echo ('<a href = "salir.php">Salir</a>');
            }
        ?>
    </div>

    <div>
        <?php 
            foreach ($perfiles as $key => $value) {
                # code...
            }
        ?>
    </div>

    <div></div>
    
</body>
</html>