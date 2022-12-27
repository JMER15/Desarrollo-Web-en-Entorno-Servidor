<?php
/**
 * 
 * @author José Miguel
 * 
 */
session_start();
if (!$_SESSION) { // si la sesion no esta creada la creo
    $_SESSION['count'] = 0;
    $_SESSION['inicioTime'] = time();
    $_SESSION['intervaloTime'] = 1;
} else {
    if (isset($_SESSION['inicioTime'])) {
        $tiempo_transcurrido = time();
        /*se multiplica por 60 segundos ya que se configura en minutos*/
        $tiempo_maximo = $_SESSION['inicioTime'] + ($_SESSION['intervaloTime'] * 5);
        if ($tiempo_transcurrido > $tiempo_maximo) {
            $_SESSION['count'] = 0;
            $_SESSION['inicioTime'] = time();
        } 
        echo $_SESSION['count']++;
    } else {
        /*Si no existe se crea o si lo prefiere destruya la sesión*/
        session_destroy();
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    ?>
</body>

</html>