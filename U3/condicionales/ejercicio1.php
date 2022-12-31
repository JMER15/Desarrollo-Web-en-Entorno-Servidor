<?php
/**
 * Ejercicio 1
 * 
 * 1. Almacena tres números en variables y escribirlos en pantalla de manera ordenada.
 * 
 * @author José Miguel
 * 
 * 
 */
$numero = 1;
$numero2 = 4;
$numero3 = 23;

echo "Número ordenados " . "<br/>";
if (($numero > $numero2) && ($numero > $numero3)) {
    echo $numero . ",";
    if ($numero2 > $numero3) {
        echo $numero2 . ",";
        echo $numero3;
    } else {
        echo $numero3 . ",";
        echo $numero2;
    }
} elseif (($numero2 > $numero) && ($numero2 > $numero3)) {
    echo $numero2 . ",";
    if ($numero > $numero3) {
        echo $numero . ",";
        echo $numero3;
    } else {
        echo $numero3 . ",";
        echo $numero;
    }
} else {
    echo $numero3 . ",";
    if ($numero > $numero2) {
        echo $numero . ",";
        echo $numero2;
    } else {
        echo $numero2 . ",";
        echo $numero;
    }
}

echo "<br/>";

?>

<b>Repositorio: </b> <a href=https://github.com/JMER15/Desarrollo-Web-en-Entorno-Servidor/blob/main/U3/condicionales/ejercicio1.php>Código Github</a>