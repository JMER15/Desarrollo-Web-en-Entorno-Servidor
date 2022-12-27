<?php
/**
 * ejemplo 2 arrays asociativos
 * 
 */

    $age = array("Peter"=>35,
             "Ben"=>37,
             "Joe"=>43
    );

    foreach ($age as $key => $value) {
        echo $value . " ";
    }
    // con $value recorremos el valor de la edad 35,37,43

    foreach ($age as $key => $value) {
        echo $key . " ";
    }
    // con $key recorremos el valor de la edad peter,ben,joe el (indice es una cadena)

    $age = array("Peter"=>35,"Ben"=>37,"Joe"=>43);
    foreach($age as $x=>$x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br/>";
}

?>
