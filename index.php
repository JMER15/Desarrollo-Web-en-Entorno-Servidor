<?php

/**
 * Index Principal con las actividades del Tema
 * 
 * @author José Miguel
 * 
 */

// $ejercicio1 = array("Título" => "Hola Mundo", 
// "Descripción" => "Mi primer Script en PHP",
// "Enlace"=>"U2/ejercicio1.php",
// "Tags" => "Primer Script"
// );

$aEjercicios = array(

    "Tema 1" => array(

        // array(
        //     "Título" => "Ejercicio 1",
        //     "Enlace" => "/U2/ejercicio1.php",
        //     "Etiquetas" => "Bucles,fáciles,inicio",
        //     "Github" => "https://github.com/JMER15/Desarrollo-Web-en-Entorno-Servidor/blob/main/U3/ejercicio1.php"
        // ),

        // array("Título" => "Ejercicio 2", "Enlace" => "/U2/ejercicio2.php"),

    ),
    "Tema 2" => array(

        // array("Título" => "Ejercicio 1", "Enlace" => "/U2/ejercicio1.php", "Etiquetas" => "Bucles,fáciles,inicio"),
        // array("Título" => "Ejercicio 2", "Enlace" => "/U2/ejercicio2.php"),

    ),
    "Tema 3" => array(

        array(
            "Título" => "Ejercicio 1",
            "Enlace" => "/U3/ejercicio1.php",
            "Etiquetas" => "Bucles,fáciles,inicio",
            "Github" => "https://github.com/JMER15/Desarrollo-Web-en-Entorno-Servidor/blob/main/U3/ejercicio1.php"
        ),
        array(
            "Título" => "Ejercicio 2",
            "Enlace" => "/U3/ejercicio2.php",
            "Etiquetas" => "Bucles,fáciles,inicio",
            "Github" => "https://github.com/JMER15/Desarrollo-Web-en-Entorno-Servidor/blob/main/U3/ejercicio2.php"
        ),
        array(
            "Título" => "Ejercicio 3",
            "Enlace" => "/U3/ejercicio3.php",
            "Etiquetas" => "Bucles,fáciles,inicio",
            "Github" => "https://github.com/JMER15/Desarrollo-Web-en-Entorno-Servidor/blob/main/U3/ejercicio3.php"
        ),

    ),

);

foreach ($aEjercicios as $tema => $value) {
    echo "<br/>";
    echo "<h1>" . $tema . "</h1>";
    foreach ($aEjercicios['Tema 3'] as $key => $value) { // el $value es el $value del array anterior
        echo "<h2><a href = " . $value['Enlace'] . ">" . $value['Título'] . $value['Etiquetas'] . "</a></h2>";
    }
    echo "<br/>";
}
