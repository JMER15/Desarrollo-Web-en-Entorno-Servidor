<?php

/**
 * Ejercicio 2
 * 
 * 2. Carga en variables mes y año e indica el número de días del mes. Utiliza la estructura de control switch
 * 
 * @author José Miguel
 * 
 * 
 */

$mes = 2;
$anyo = 2000;

switch ($mes){
    case 1: case 3: case 5: case 7: case 8: case 10: case 12:
        echo "El mes "." $mes "." del año "."$anyo"." tiene 31 días";
        break;
    case 4: case 6: case 9: case 11:
        echo "El mes "." $mes "." del año "."$anyo"." tiene 30 días";
        break;
    case 2:
        if (($mes/4 == 0) && ($mes/100 != 0) && ($mes/400 == 0)) {
            echo "El mes "." $mes "." del año "."$anyo"." tiene 29 días";
        } else {
            echo "El mes "." $mes "." del año "."$anyo"." tiene 28 días";
        }
        break;
    default: 
    echo "No es un número de mes válido.";
}

echo "<br/>";

?>

<b>Repositorio: </b> <a href=https://github.com/JMER15/Desarrollo-Web-en-Entorno-Servidor/blob/main/U3/ejercicio2.php>Código Github</a>