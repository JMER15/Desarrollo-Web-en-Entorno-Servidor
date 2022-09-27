<?php
/**
 * Ejercicio 7
 * 
 * Escribir un script que declare una variable y muestre la siguiente información en pantalla:
 * Valor actual 8.
 * Suma 2. Valor ahora 10.
 * Resta 4. Valor ahora 6.
 * Multipica por 5. Valor ahora 30.
 * Divide por 3. Valor ahora 10.
 * Incrementa el valor en 1. Valor ahora 11.
 * Decrementa el valor en 1. Valor ahora 11.
 *
 * @author José Miguel Escribano Ruiz
 * 
 */
$x = 8;

echo "Valor Actual ".$x.'<br/>';
echo "Suma 2. Valor ahora ".($x+2).'<br/>';
echo "Resta 4. Valor ahora ".((($x+2))-4).'<br/>';
echo "Multipica por 5. Valor ahora ".(((($x+2))-4)*5).'<br/>';
echo "Divide por 3. Valor ahora ".((((($x+2))-4)*5)/3).'<br/>';
echo "Incrementa el valor en 1. Valor ahora ".(((((($x+2))-4)*5)/3)+1).'<br/>';
echo "Decrementa el valor en 1. Valor ahora ".(((((($x+2))-4)*5)/3)).'<br/>';

echo "<br/>"
?>

<b>Repositorio: </b> <a href=https://github.com/JMER15/Desarrollo-Web-en-Entorno-Servidor/blob/main/U2/ej7.php>Código Github</a>