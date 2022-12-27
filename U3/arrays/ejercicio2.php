<?php

/**
 * 2. Crear un array con los alumnos de clase y permitir la selección aleatoria de uno de ellos. El resultado
 * debe mostrar nombre y fotografía.
 *
 * @author José Miguel
 */

// arrays con los alumnos de clase
$aAlumnos = array(

    array('Nombre' => 'Alumno 1', 'foto' => 'foto1.png'),
    array('Nombre' => 'Alumno 2', 'foto' => 'foto2.png'),
    array('Nombre' => 'Alumno 3', 'foto' => 'foto3.png'),
    array('Nombre' => 'Alumno 4', 'foto' => 'foto4.png'),
    array('Nombre' => 'Alumno 5', 'foto' => 'foto5.png'),
    array('Nombre' => 'Alumno 6', 'foto' => 'foto6.png'),

);

$aleatorio = rand(0, (count($aAlumnos)-1)); // random desde 0 hasta la longitud del array menos 1

// echo $aleatorio;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bucles/calendario.css">
    <title>Ejercicio 2 Arrays</title>
</head>

<body>
    <h1>Arrays de alumnos aleatorios</h1>

    <?php
        echo "Nombre: ".$aAlumnos[$aleatorio]['Nombre'];
        echo "<br/>";
        echo "Foto: ".$aAlumnos[$aleatorio]['foto'];
        echo "<br/>";
    ?>

    <br/>
    <b>Repositorio: </b> <a href=faltasubirloagithub>Código Github</a>
</body>

</html>