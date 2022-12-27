<?php
/**
 * 
 * Implementar clase contador
 * 
 * @author josemi
 * @version 1.0.0
 */

 require_once('Contador.php');

 $contador1 = new Contador(1);
 echo 'Creando contador 1: '.'<br/>';
 $contador1 ->mostrar();
 for ($i=1; $i <5; $i++) { 
    echo 'Incrementando el contador 1 en (+1) <br/>';
    $contador1 ->incrementar().'<br/>';
    $contador1 ->mostrar();
 }

 echo '<br/>';

 $contador2 = new Contador(20);
 echo 'Creando contador 2: '.'<br/>';
 $contador2 ->mostrar();
 for ($i=1; $i <3; $i++) { 
    echo 'Incrementando el contador 2 en (+1) <br/>';
    $contador2 ->incrementar().'<br/>';
    $contador2 ->mostrar();
 }

 echo '<br/>';

 $contador20 = new Contador(200);
 echo 'Creando contador 4: '.'<br/>';
 $contador20 ->mostrar();
 for ($i=1; $i <3; $i++) { 
    echo 'Incrementando el contador 4 en (+1) <br/>';
    $contador20 ->incrementar().'<br/>';
    $contador20 ->mostrar();
 }
 
 
?>