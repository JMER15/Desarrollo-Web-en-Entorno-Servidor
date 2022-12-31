<?php
/**
 * Dado el mes y año almacenados en variables, escribir un programa que muestre el calendario mensual
 * correspondiente. Marcar el día actual en verde y los festivos en rojo.
 * 
 * @author José Miguel
 */

// Cargamos variables y sacamos fecha del dia actual
$anyoActual = date('Y');
$mesActual = date("m");
$diaActual = date("j"); // dia sin ceros a la izquierda

// para mostrar el calendario mes y año actual
$anyo = date("Y");
$mes = date("m"); // tiene que ser m y no F porque en la comparación del if da error sino *

// numero de dias del mes actual
$cantidadDiasMes = cal_days_in_month(CAL_GREGORIAN, $mesActual, $anyoActual);

// dia de la semana del primer dia del mes
$diaUnoSemana = date("w", mktime(0, 0, 0, $mesActual, 1, $anyoActual));

// huecos hasta empezar a escribir
$huecos = ($diaUnoSemana + 6) % 7;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="calendario.css">
    <title>Calendario del mes Actual</title>
</head>

<body>
    <h1>Calendario</h1>
    <?php
    echo "Mes: " . $mes . " del año: " . $anyo;
    echo "<table>";
    // cabecera del calendario
    echo "<th>L</th><th>M</th><th>X</th><th>J</th><th>V</th><th>S</th><th>D</th>";
    echo "<tr>";

    // imprimir huecos del calendario
    for ($i = 1; $i <= $huecos; $i++) {
        echo "<td></td>";
    }
    // bucle hasta el numero de dias del mes
    for ($x = 1; $x <= $cantidadDiasMes; $x++) {

        //establecemos si es dia actual o domingo
        $diaHoy = "diaLaboral";
        //domingos
        if (date("w", mktime(0, 0, 0, $mesActual, $x, $anyoActual)) == 0) {
            $diaHoy = "domingo";
        }
        if ($x == $diaActual && $mes == $mesActual && $anyo == $anyoActual) { //*
            $diaHoy = "diaActual";
        }
        echo "<td class=\"$diaHoy\">$x</td>";
        // nueva semana
        if (($x + $diaUnoSemana - 1) % 7 == 0) {
            echo "</tr>";
        }
    }

    echo "</table>";
    ?>

    <br/>
    <b>Repositorio: </b> <a href=https://github.com/JMER15/Desarrollo-Web-en-Entorno-Servidor/blob/main/U3/bucles/calendario1.php>Código Github</a>

</body>

</html>