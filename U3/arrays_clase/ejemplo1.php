<?php
/**
 * ejemplo 1 array indexado
 */

 $cars = array('coche1','coche2','coche3','coche4');
 foreach ($cars as $key => $value) {
    echo $key . " ";
 }
 // este for each muestra los indices 0,1,2,3

 foreach ($cars as $key => $value) {
    echo $value . " ";
 }

 // este for each muestra los indices el valor coche1,coche2.....

 /*
    Es posible crear nuevos elementos con asignación automática de índices utilizando los corchetes sin índice.
    Cuando se asigna un valor a una variable array usando corchetes vacíos, el valor se añadirá al final del
    array.
 */

 $cars2 [] = 'renault';
 $cars2 [] = 'opel';
 $cars2 [] = 'citroen';

 foreach ($cars2 as $key => $value) {
    echo $value . " ";
 }

?>
