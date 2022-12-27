<?php

/**
 * Ejercicio 8
 * 
 * Tablas de multiplicar del 1 al 10. Aplicar estilos en filas/columnas
 * 
 * Ampliación de tabla de multiplicar con formularios e input.
 * 
 * @author José Miguel
 * 
 */

// logica de negocio
$NUMERO_HUECOS = 2;
$huecos = [];

$mensaje1 = "Mal";
$mensaje2 = "Bien";
$mensajeError = "No ha introducido ningún dato";

$procesaFormulario = false;

for ($i = 0; $i < $NUMERO_HUECOS; $i++) {
    do {
        $fila = rand(1, 10);
        $columna = rand(1, 10);
    } while (in_array(array("fila" => $fila, "columna" => $columna), $huecos));  // comprobar que la fila y la columna no están ya en el array
    array_push($huecos, array("fila" => $fila, "columna" => $columna));
}

if (isset($_POST['enviar'])) {
    if (empty($_POST[$huecos['fila']['columna']])) {
        echo $mensajeError;
    }else{
        echo $mensajeError = "OK";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla Multiplicar</title>
</head>

<body>
    <h1>Tabla Multiplicar del 1 al 10</h1>

    <?php

    echo "<table border='1'>";

    for ($i = 1; $i <= 10; $i++) {
        echo "<td bgcolor='AliceYellow'>Tabla del $i</td>";
    }

    for ($i = 1; $i <= 10; $i++) {

        echo "<tr>";

        for ($x = 1; $x <= 10; $x++) {

            $entra = true;

            foreach ($huecos as $key => $value) {
                if ($value["fila"] == $i && $value["columna"] == $x) {
                    echo '<td><input name = "n[' . $i . '][' . $x . ']". value = ""></input></td>';
                    $entra = false;
                }
            }
            if ($entra) {
                echo "<td bgcolor='AliceBlue'>" . $i * $x . "</td>";
            }
        }
    }

    echo "</tr>";

    echo "</table>";

    echo "<br/>";
    ?>

</body>

<form action="" method="POST">
    <input type="submit" name="enviar" value="Enviar" />
</form>

</html>
<br />

<b>Repositorio: </b> <a href=https://github.com/JMER15/Desarrollo-Web-en-Entorno-Servidor/blob/main/U3/ejercicio8.php>Código Github</a>