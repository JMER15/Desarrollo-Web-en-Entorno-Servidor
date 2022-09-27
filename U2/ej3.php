<?php
/**
 * Ejercicio 3 
 * 
 * Script que, a partir del radio almacenado en una variable y la definición de la constante PI, calcule el
 * área del círculo y la longitud de la circunferencia. El debe mostrar valor de radio, longitud de la
 * circunferencia, área del círculo y dibujará un círculo utilizando gráficos vectoriales.
 * 
 * @author José Miguel Escribano Ruiz
 */
 $radio = 10;
 const PI = 3.14;
 $area = PI**$radio;
 $longitudCircunferencia = 2 * PI * $radio;

 echo "El Radio es: $radio </br>";
 echo "El Área es: $area </br>";
 echo "La longitud de la circunferencia es: $longitudCircunferencia </br>";
 
 echo '<svg width="100" height="100">
  <circle cx="50" cy="50" r="'.$radio.'" stroke="green" stroke-width="4" fill="yellow" />
</svg>';
?>

<b>Repositorio: </b> <a href=https://github.com/JMER15/Desarrollo-Web-en-Entorno-Servidor/blob/main/U2/ej3.php>Código Github</a>