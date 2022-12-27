<?php

/**
 * 
 * @author josemi 
 */

 //array baraja española

// $cartas = array(1 => "uno copas", 2 => "dos copas", 3 => "tres copas", 4 => "cuatro copas", 5 => "cinco copas", 6 => "seis copas", 7 => "siete copas", 
// 8 => "sota copas", 9 => "caballo copas", 10 => "rey copas", 11 => "uno espadas", 12 => "dos espadas", 13 => "tres espadas", 14 => "cuatro espadas",
// 15 => "cinco espadas", 16 => "seis espadas", 17 => "siete espadas", 18 => "sota espadas", 19 => "caballo espadas", 20 => "rey espadas", 21 => "uno oros",
// 22 => "dos oros", 23 => "tres oros", 24 => "cuatro oros", 25 => "cinco oros", 26 => "seis oros", 27 => "siete oros", 28 => "sota oros", 29 => "caballo oros",
// 30 => "rey oros", 31 => "uno bastos", 32 => "dos bastos", 33 => "tres bastos", 34 => "cuatro bastos", 35 => "cinco bastos", 36 => "seis bastos", 37 => "siete bastos",
// 38 => "sota bastos", 39 => "caballo bastos", 40 => "rey bastos");

$cartas1 = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40);

// desordena el array
shuffle($cartas1);

// retorna el palo de la carta

foreach ($cartas1 as $key => $value) {

    if ($value >= 1 && $value <= 7) {
        return $value;
    } else {
        return 0.5;
    }
}


