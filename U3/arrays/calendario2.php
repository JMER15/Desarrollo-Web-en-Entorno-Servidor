<?php

/**
 * Ejercicio 5
 * Dado el mes y año almacenados en variables, escribir un programa que muestre el calendario mensual
 * correspondiente. Marcar el día actual en verde y los festivos en rojo.
 *
 * Mejora calendario con un array de los días festivos: colores diferentes, nacionales, comunidad, locales.
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

// arrays con los días festivos
$aFestivos = array(

    "Nacionales" => array(
        array('dia' => 1, 'mes' => 1),
        array('dia' => 6, 'mes' => 1),
        array('dia' => 19, 'mes' => 3),
        array('dia' => 1, 'mes' => 5),
        array('dia' => 15, 'mes' => 8),
        array('dia' => 12, 'mes' => 10),
        array('dia' => 1, 'mes' => 11),
        array('dia' => 6, 'mes' => 12),
        array('dia' => 8, 'mes' => 12),
        array('dia' => 25, 'mes' => 12),
    ),

    "Comunidad" => array(
        array('dia' => 28, 'mes' => 2),
    ),

    "Locales" => array(
        array('dia' => 24, 'mes' => 10),
    ),
);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bucles/calendario.css">
    <title>Calendario del mes Actual</title>
</head>

<body>
    <h1>Calendario</h1>
    <?php
    echo "Mes: " . $mes . " del año: " . $anyo;
    echo "<br/>";
    $pascua = date("M-d-Y", easter_date("$anyoActual"));
    echo $pascua;

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

        //establecemos si es dia laboral o domingo
        $diaHoy = "diaLaboral";

        //domingos
        if (date("w", mktime(0, 0, 0, $mesActual, $x, $anyoActual)) == 0) {
            $diaHoy = "domingo";
        }

        //dia actual
        if ($x == $diaActual && $mes == $mesActual && $anyo == $anyoActual) { //*
            $diaHoy = "diaActual";
        }

        //festivo nacional
        foreach ($aFestivos['Nacionales'] as $key => $value) {
            if ($value['dia'] == $x && $value['mes'] == $mes) {
                $diaHoy = "diaNacional";
            }
        }

        //festivo local
        foreach ($aFestivos['Locales'] as $key => $value) {
            if ($value['dia'] == $x && $value['mes'] == $mes) {
                $diaHoy = "diaLocal";
            }
        }

        // festivo dia de andalucía
        foreach ($aFestivos['Comunidad'] as $key => $value) {
            if ($value['dia'] == $x && $value['mes'] == $mes) {
                $diaHoy = "diaComunidad";
            }
        }

        echo "<td class=\"$diaHoy\">$x</td>";

        // nueva semana
        if (($x + $diaUnoSemana - 1) % 7 == 0) {
            echo "</tr>";
        }
    }

    echo "</table>";
    ?>

    <b>Repositorio: </b> <a href=https://github.com/JMER15/Desarrollo-Web-en-Entorno-Servidor/blob/main/U3/arrays/calendario2.php>Código Github</a>

</body>

</html>