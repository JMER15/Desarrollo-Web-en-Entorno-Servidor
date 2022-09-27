<?php

/**
 * Ejercicio 8
 * 
 * A veces es necesario conocer exactamente el contenido de una variable. Piensa como puedes hacer
 * esto y escribe un script con la siguiente salida:
 * 
 * string(5) “Harry”
 * Harry
 * int(28)
 * NULL
 *
 * @author José Miguel Escribano Ruiz
 * 
 */

$string = "Harry";
echo var_dump($string) . "<br/>";
echo "$string" . "<br/>";

$entero = 28;
echo var_dump($entero) . "<br/>";

$null = null;
echo var_dump($null) . "<br/>";

echo "<br/>";
?>

<b>Repositorio: </b> <a href=https://github.com/JMER15/Desarrollo-Web-en-Entorno-Servidor/blob/main/U2/ej8.php>Código Github</a>