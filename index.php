<?php

/**
 * Index Principal con las actividades de los Temas
 * 
 * @author José Miguel
 * 
 */

// $ejercicio1 = array("Título" => "Hola Mundo", 
// "Descripcion" => "Mi primer Script en PHP",
// "Enlace"=>"U2/ejercicio1.php",
// "Tags" => "Primer Script"
// );

$aEjercicios = array(

    "Tema 1" => array(

        array(
            "Título" => "Ejercicio 1",
            "Descripcion" => "Mi primer Script en PHP",
            "Enlace" => "/U2/ejercicio1.php",
            "Etiquetas" => "Bucles,fáciles,inicio",
            "Github" => "https://github.com/JMER15/Desarrollo-Web-en-Entorno-Servidor/blob/main/U3/ejercicio1.php"
        ),

    ),

    "Tema 2" => array(

        array(
            "Título" => "Ejercicio 1",
            "Descripcion" => "Mi primer Script en PHP Hola Mundo",
            "Enlace" => "U2/ej1.php",
            "Etiquetas" => "Ejercicicios Introducción",
            "Github" => "https://github.com/JMER15/Desarrollo-Web-en-Entorno-Servidor/blob/main/U2/ej1.php"
        ),

        array(
            "Título" => "Ejercicio 2",
            "Descripcion" => "Ficha Personal",
            "Enlace" => "U2/ej2.php",
            "Etiquetas" => "Ejercicicios Introducción",
            "Github" => "https://github.com/JMER15/Desarrollo-Web-en-Entorno-Servidor/blob/main/U2/ej2.php"
        ),

        array(
            "Título" => "Ejercicio 3",
            "Descripcion" => "Área del círculo",
            "Enlace" => "U2/ej3.php",
            "Etiquetas" => "Ejercicicios Introducción",
            "Github" => "https://github.com/JMER15/Desarrollo-Web-en-Entorno-Servidor/blob/main/U2/ej3.php"
        ),

        array(
            "Título" => "Ejercicio 4",
            "Descripcion" => "Sálida siguiente Script",
            "Enlace" => "U2/ej4.php",
            "Etiquetas" => "Ejercicicios Introducción",
            "Github" => "https://github.com/JMER15/Desarrollo-Web-en-Entorno-Servidor/blob/main/U2/ej4.php"
        ),

        array(
            "Título" => "Ejercicio 5",
            "Descripcion" => "Suma 2 Números",
            "Enlace" => "U2/ej5.php",
            "Etiquetas" => "Ejercicicios Introducción",
            "Github" => "https://github.com/JMER15/Desarrollo-Web-en-Entorno-Servidor/blob/main/U2/ej5.php"
        ),

        array(
            "Título" => "Ejercicio 6",
            "Descripcion" => "Script Carga",
            "Enlace" => "U2/ej6.php",
            "Etiquetas" => "Ejercicicios Introducción",
            "Github" => "https://github.com/JMER15/Desarrollo-Web-en-Entorno-Servidor/blob/main/U2/ej6.php"
        ),

        array(
            "Título" => "Ejercicio 7",
            "Descripcion" => "Muestra Información",
            "Enlace" => "U2/ej7.php",
            "Etiquetas" => "Ejercicicios Introducción",
            "Github" => "https://github.com/JMER15/Desarrollo-Web-en-Entorno-Servidor/blob/main/U2/ej7.php"
        ),

        array(
            "Título" => "Ejercicio 8",
            "Descripcion" => "Carga Script 2",
            "Enlace" => "U2/ej8.php",
            "Etiquetas" => "Ejercicicios Introducción",
            "Github" => "https://github.com/JMER15/Desarrollo-Web-en-Entorno-Servidor/blob/main/U2/ej8.php"
        ),

        array(
            "Título" => "Ejercicio 9",
            "Descripcion" => "Carga Script 3",
            "Enlace" => "U2/ej9.php",
            "Etiquetas" => "Ejercicicios Introducción",
            "Github" => "https://github.com/JMER15/Desarrollo-Web-en-Entorno-Servidor/blob/main/U2/ej9.php"
        ),

        array(
            "Título" => "Ejercicio 10",
            "Descripcion" => "Heredoc",
            "Enlace" => "U2/ej10.php",
            "Etiquetas" => "Ejercicicios Introducción",
            "Github" => "https://github.com/JMER15/Desarrollo-Web-en-Entorno-Servidor/blob/main/U2/ej10.php"
        ),
        
    ), 

    // "Tema 3" => array(

    //     array(
    //         "Título" => "Ejercicio 1",
    //         "Descripcion" => "Mi primer Script en PHP",
    //         "Enlace" => "/U3/bucles/ejercicio1.php",
    //         "Etiquetas" => "Bucles,fáciles,inicio",
    //         "Github" => "https://github.com/JMER15/Desarrollo-Web-en-Entorno-Servidor/blob/main/U3/ejercicio1.php"
    //     ),
    //     array(
    //         "Título" => "Ejercicio 2",
    //         "Descripcion" => "Mi primer Script en PHP",
    //         "Enlace" => "/U3/bucles/ejercicio2.php",
    //         "Etiquetas" => "Bucles,fáciles,inicio",
    //         "Github" => "https://github.com/JMER15/Desarrollo-Web-en-Entorno-Servidor/blob/main/U3/ejercicio2.php"
    //     ),
    //     array(
    //         "Título" => "Ejercicio 3",
    //         "Descripcion" => "Mi primer Script en PHP",
    //         "Enlace" => "/U3/bucles/ejercicio3.php",
    //         "Etiquetas" => "Bucles,fáciles,inicio",
    //         "Github" => "https://github.com/JMER15/Desarrollo-Web-en-Entorno-Servidor/blob/main/U3/ejercicio3.php"
    //     ),
    //     array(
    //         "Título" => "Ejercicio 5",
    //         "Descripcion" => "Mi primer Script en PHP",
    //         "Enlace" => "/U3/bucles/calendario1.php",
    //         "Etiquetas" => "Bucles,fáciles,inicio",
    //         "Github" => "https://github.com/JMER15/Desarrollo-Web-en-Entorno-Servidor/blob/main/U3/ejercicio3.php"
    //     ),

    // ),

);

foreach ($aEjercicios as $tema => $value) {
    echo "<br/>";
    echo "<h1>" . $tema . "</h1>";
    foreach ($value as $key => $value) { // el $value es el $value del array anterior(primer for each)
        echo "<h3><a href = " . $value['Enlace'] . ">" . $value['Título']."</a></h3>";
        echo "<p>" . $value["Descripcion"] . "</p>";
    }
    echo "<br/>";
}