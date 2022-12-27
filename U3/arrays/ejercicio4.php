<?php

/**
 * Ejercicio 4
 * 
 * Un restaurante dispone de una carta de 3 primeros, 5 segundos y 3 postres. Almacenar información
 * incluyendo foto y mostrar los menús disponibles. Mostrar el precio del menú suponiendo que éste se
 * calcula sumando el precio de cada uno de los platos incluidos y con un descuento del 20 %.
 * 
 * @author José Miguel 
 */

// logica de negocio
$randomPrimerPlato = random_int(0, 2); // indices del array primer plato
$randomSegundoPlato = random_int(0, 4); // indices del array segundo plato
$randomPostre = random_int(0, 2); // indices del array tercer plato

$carta = array(

    'Primer Plato' => array(

        array("Plato" => "Lentejas", "Precio" => "5 euros"),
        array("Plato" => "Garbanzos", "Precio" => "4 euros"),
        array("Plato" => "Arroz", "Precio" => "3 euros"),

    ),

    'Segundo Plato' => array(

        array("Plato" => "Pechuga de Pollo", "Precio" => "3 euros"),
        array("Plato" => "Ensalada", "Precio" => "2 euros"),
        array("Plato" => "Lenguado Adobado", "Precio" => "5 euros"),
        array("Plato" => "Lomo Adobado", "Precio" => "7 euros"),
        array("Plato" => "Secreto", "Precio" => "8 euros"),

    ),

    'Postre' => array(

        array("Plato" => "Flan de Vainilla", "Precio" => "2 euros"),
        array("Plato" => "Tarta de Queso", "Precio" => "3 euros"),
        array("Plato" => "Batido de Chocolate", "Precio" => "1 euro"),

    ),

);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Menú</title>
</head>

<body>
    <h1>Menú de un restaurante</h1>

    <?php
    foreach ($carta as $key => $value) {
        echo "<br/>";
        echo "<b>" . $key . ": </b><br/>";
        foreach ($value as $key => $value2) {
            echo "<br/>";
            echo $value2['Plato'] . " " .  $value2['Precio'] . "<br/>";
        }
    }

    echo "<br>";

    $precioMenu = (int)$carta['Primer Plato'][$randomPrimerPlato]['Precio'] + (int)$carta['Segundo Plato'][$randomSegundoPlato]['Precio'] +
        (int) $carta['Postre'][$randomPostre]['Precio'];
    // cojo una opción de cada plato del menú random

    $PrecioMenuDescuento = ($precioMenu * 0.8);
    // aplico el 20% de descuento multiplicando directamente por 0.8 para obtener el 80%

    echo "<b>Precio sin descuento: " . $precioMenu . " euros.<br/></b>";
    echo "<b>Precio con el 20% de descuento del menú: " . $PrecioMenuDescuento . " euros.<br/></b>";
    ?>
    <div id="derecha">
        <b>Repositorio: </b> <a href=faltasubirloagithub>Código Github</a>
    </div>

</body>

</html>