<?php

/**
 * 7 y medio en php
 * 
 * @author josemi 
 */

session_start();

if (!isset($_SESSION['plantaUser']) && !isset($_SESSION['plantaIA'])) {
    $_SESSION['plantaUser']  = false;
    $_SESSION['plantaIA']  = false;
}

if (!isset($_SESSION['puntosJugador']) && !isset($_SESSION['puntosIA'])) {
    $_SESSION['puntosJugador']  = 0;
    $_SESSION['puntosIA']  = 0;
}

if (isset($_POST['nuevapartida']) || isset($_POST['rendirse'])) {
    session_unset();
    session_destroy();
    session_start();
    header('Location:index.php');
}

if (!isset($_SESSION['cartas'])) {

    $_SESSION['cartas'] = array(
        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25,
        26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40
    );

    shuffle($_SESSION['cartas']);
    $_SESSION['puntos'] = 0;
    $_SESSION['victorias'] = 0;
    $_SESSION['derrotas'] = 0;
}

if (!isset($_SESSION['cartasJugador'])) {
    $_SESSION['cartasJugador'] = array();
}

if (!isset($_SESSION['cartasIA'])) {
    $_SESSION['cartasIA'] = array();
}

if (isset($_POST['pedircarta'])) {

    $carta = array_pop($_SESSION['cartas']); //sacamos del array una carta y la metemos en el array de jugador
    array_push($_SESSION['cartasJugador'], $carta);

    //puntuación jugador con módulo del valor de la carta
    if ($carta % 10 >= 1 && $carta % 10 <= 7) {
        $_SESSION['puntosJugador'] += $carta % 10;
    } else {
        $_SESSION['puntosJugador'] += 0.5;
    }

    $cartaIA = array_pop($_SESSION['cartas']); //sacamos del array una carta y la metemos en el array de IA
    array_push($_SESSION['cartasIA'], $cartaIA);

    //puntuación IA con módulo %
    if ($cartaIA % 10 >= 1 && $cartaIA % 10 <= 7) {
        $_SESSION['puntosIA'] += $cartaIA % 10;
    } else {
        $_SESSION['puntosIA'] += 0.5;
    }

    //comprobamos si la IA tiene que pedir carta 3 niveles de dificultad
    if ($_SESSION['puntosIA'] < 5.5) {
        $carta1 = array_pop($_SESSION['cartas']);
        array_push($_SESSION['cartasIA'], $carta1);
    }

    if ($_SESSION['puntosIA'] >= 5.5 && $_SESSION['puntosIA'] < 6.5) {
        $carta1 = array_pop($_SESSION['cartas']);
        array_push($_SESSION['cartasIA'], $carta1);
    }

    if ($_SESSION['puntosIA'] >= 6.5 && $_SESSION['puntosIA'] < 7.5) {
        $carta1 = array_pop($_SESSION['cartas']);
        array_push($_SESSION['cartasIA'], $carta1);
    }

    if ($_SESSION['puntosIA'] >= 7.5) {
        $_SESSION['plantaIA'] = true;
    }

    //comprobamos si el jugador se pasa cuando damos a pedir carta
    if ($_SESSION['puntosJugador'] > 7.5 and $_SESSION['puntosIA'] > 7.5) {
        $_SESSION['plantaUser'] = true;
        $_SESSION['plantaIA'] = true;
        echo 'Los 2 se han pasado';
    }
}

//comprobamos si el jugador se pasa cuando nos plantamos
if (isset($_POST['plantarse'])) {

    $_SESSION['plantaUser'] = true;
    $_SESSION['plantaIA'] = true;

    if ($_SESSION['puntosJugador'] > 7.5 and $_SESSION['puntosIA'] > 7.5) {
        echo 'Los 2 se han pasado';
    } elseif ($_SESSION['puntosJugador'] <= 7.5) {
        echo 'Has ganado';
    } else {
        echo 'IA ha ganado';
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen RA4</title>
</head>

<body>

    <center>
        <h1>Las 7 y media</h1>
    </center>

    <h2>Número de victorias: </h2>

    <form action="" method="POST">
        <input type="submit" name="pedircarta" value="Pedir carta">
        <input type="submit" name="nuevapartida" value="Nueva Partida">
        <input type="submit" name="plantarse" value="Plantarse">
    </form>

    <h2>Cartas Jugador</h2>
    <?php
    foreach ($_SESSION['cartasJugador'] as $key => $value) {
        echo "<img src='img/img/$value.jpg' alt=''>";
    }
    var_dump($_SESSION['puntosJugador']);

    echo "<h2>Cartas IA</h2>";

    foreach ($_SESSION['cartasIA'] as $key => $value) {

        if ($_SESSION['plantaUser'] and $_SESSION['plantaIA']) {
            echo "<img src='img/img/$value.jpg' alt=''>";
        } else {
            echo "<img src='img/img/reverso.jpg' alt=''>";
        }
    }

    ?>
</body>

</html>