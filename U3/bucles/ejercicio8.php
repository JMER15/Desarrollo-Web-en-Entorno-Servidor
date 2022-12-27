<?php

/**
 * Ejercicio 8
 * 
 * 3. Tablas de multiplicar del 1 al 10. Aplicar estilos en filas/columnas
 * 
 * @author José Miguel
 * 
 * 
 */

echo "<h1>Tabla de Multiplicar del 1 al 10</h1>";
echo "<table border='1'>";

for ($i=1; $i <=10 ; $i++) { 
    echo "<td bgcolor='AliceYellow'>Tabla del $i</td>";
}

for ($i = 1; $i <= 10; $i++) {
    echo "<tr>";
    for ($x = 1; $x <= 10; $x++) {
        echo "<td bgcolor='AliceBlue'>" . $i * $x . "</td>";
    }
    echo "</tr>";
}
echo "</table>";

echo "<br/>";

?>

<b>Repositorio: </b> <a href=https://github.com/JMER15/Desarrollo-Web-en-Entorno-Servidor/blob/main/U3/ejercicio8.php>Código Github</a>