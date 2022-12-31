<?php
/**
 * Ejercicio 4
 * 
 * 4. Mostrar paleta de colores. Utilizar una tabla que muestre el color y el valor hexadecimal que le
 * corresponde. Cada celda será un enlace a una página que mostrará un fondo de pantalla con el color
 * seleccionado. ¿Puedes hacerlo con los conocimientos que tienes?
 * 
 * @author José Miguel
 * 
 */

echo "<h1>Gama de Colores</h1>";

echo "<table HEIGHT='40%'; WIDTH = '100%'>";

for ($x = 100; $x < 255; $x+=32) {
    echo "<tr>";
    for ($y = 100; $y < 255; $y+=32) {
        for ($z = 100; $z < 255; $z+=32) {
            echo "<td bgcolor= '#".dechex($x).dechex($y).dechex($z)."'>
            <a href = ejercicio9-2.php?color=".dechex($x).dechex($y).dechex($z). ">".dechex($x).dechex($y).dechex($z)."</a>
            </td>";
        }
    }
    echo "</tr>";
}
echo "</table>";

echo "<br/>";

?>

<b>Repositorio: </b> <a href=https://github.com/JMER15/Desarrollo-Web-en-Entorno-Servidor/blob/main/U3/bucles/ejercicio4.php>Código Github</a>