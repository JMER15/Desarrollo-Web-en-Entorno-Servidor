<?php

require_once('include/functions.php');

$arrayTest = array(

    array('f' => 3, 'c' => 4),
    array('f' => 3, 'c' => 7),
    array('f' => 3, 'c' => 6),

);

if (existeCoordenada(3,4,$arrayTest)) {
    echo "existe";
}


?>