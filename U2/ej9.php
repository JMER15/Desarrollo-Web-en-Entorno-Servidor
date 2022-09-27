<?php

/**
 * Ejercicio 9
 * 
 * Escribir un script que utilizando variables permita obtener el siguiente resultado:
 * Valor es string.
 * Valor es double.
 * Valor es boolean.
 * Valor es integer.
 * Valor is NULL.
 *
 * @author José Miguel Escribano Ruiz
 * 
 */

$string = "hola";
echo "Valor es ", gettype($string), "</br>";

$double = 6.7;
echo "Valor es ", gettype($double), "</br>";

$boolean = true;
echo "Valor es ", gettype($boolean), "</br>";

$integer = 6;
echo "Valor es ", gettype($integer), "</br>";

$null = null;
echo "Valor es ", gettype($null), "</br>";

echo "<br/>";
?>

<b>Repositorio: </b> <a href=https://github.com/JMER15/Desarrollo-Web-en-Entorno-Servidor/blob/main/U2/ej9.php>Código Github</a>