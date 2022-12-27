<?php
/**
 * 
 */
session_start();

require_once('config/config.php');
require_once('lib/functions.php');

if (!isset($_SESSION['tablero'])) { // si no esta creada la sesión 
    $_SESSION['tablero'] = crearTablero(NUM_FILAS, NUM_COLUMNAS, NUM_MINAS);
    $_SESSION['contador'] = 0;
    $_SESSION['tableroVisible'] = crearTableroCeros(NUM_FILAS,NUM_COLUMNAS);
}

//poner antes de mostrar tablero
if (isset($_GET['filas'])) {
    clickCasilla($_GET['filas'],$_GET['columnas']);
}

mostrarTablero($_SESSION['tablero']);
echo '<br/><br/>';

mostrarTableroVisible();
echo '<br/><br/>';

echo '<a href="destroy.php">Reiniciar</a>';

?>


