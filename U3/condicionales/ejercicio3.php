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

// Fecha actual
$diaActual = date("d");
$mesActual = date("m");
$anyoActual = date("Y");

$edad = $anyoActual - $anyo;

if ($anyoActual < $anyo) {
    echo "La fecha de nacimiento no es correcta";
}else {
    echo "Fecha de nacimiento: $dia/$mes/$anyo" . ' tu edad es: ' . $edad;
}

echo "<br/>";

?>

<b>Repositorio: </b> <a href=https://github.com/JMER15/Desarrollo-Web-en-Entorno-Servidor/blob/main/U3/condicionales/ejercicio3.php>Código Github</a>