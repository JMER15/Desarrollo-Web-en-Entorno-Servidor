<?php

/**
 * Ejercicio 3
 * 
 * 3. Carga fecha de nacimiento en variables y calcula la edad.
 * 
 * @author José Miguel
 * 
 * 
 */

$dia = 2;
$mes = 3;
$anyo = 2000;

if (abs($anyo - 2022)) {
    echo "Tu edad es: " . abs($anyo - 2022) . " Años";
    if (abs($mes - 12)) {
        echo " , " . abs($mes - 9) . " Meses";
        if (($mes == 2) && ($mes / 4 == 0) && ($mes / 100 != 0) && ($mes / 400 == 0)) {
            echo " , " . abs($dia - 29) . " Días";
        } elseif (($mes == 2)) {
            echo " , " . abs($dia - 28) . " Días";
        } elseif (($mes == 1) || ($mes == 3) || ($mes == 5) || ($mes == 7) || ($mes == 10) || ($mes == 12)) {
            echo " , " . abs($dia - 27) . " Días";
        } else {
            echo " , " . abs($dia - 27) . " Días";
        }
    } else {
        echo "El mes debe estar comprendido entre 1 y 12";
    }
}

echo "<br/>";

?>

<b>Repositorio: </b> <a href=https://github.com/JMER15/Desarrollo-Web-en-Entorno-Servidor/blob/main/U3/ejercicio3.php>Código Github</a>