<?php

/**
 * Index Principal con las actividades de los Temas
 * 
 * @author José Miguel
 * 
 */

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

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Tema 3</h1>

    <h2>Bucles</h2>
    <h3><a href="U3/bucles/ejercicio1.php">Ejercicio 1</a></h3>
    <h3><a href="U3/bucles/ejercicio2.php">Ejercicio 2</a></h3>
    <h3><a href="U3/bucles/ejercicio3.php">Ejercicio 3</a></h3>
    <h3><a href="U3/bucles/ejercicio4.php">Ejercicio 4</a></h3>
    <h3><a href="U3/bucles/ejercicio4-2.php">Ejercicio 4-2</a></h3>
    <h3><a href="U3/bucles/calendario1.php">Calendario 1</a></h3>

    <h2>Arrays</h2>
    <h3><a href="U3/arrays/ejercicio1.php">Ejercicio 1</a></h3>
    <h3><a href="U3/arrays/ejercicio2.php">Ejercicio 2</a></h3>
    <h3><a href="U3/arrays/ejercicio3.php">Ejercicio 3</a></h3>
    <h3><a href="U3/arrays/ejercicio4.php">Ejercicio 4</a></h3>
    <h3><a href="U3/arrays/calendario2.php">Calendario 2</a></h3>
    <br>
    <h2>Condicionales</h2>
    <h3><a href="U3/condicionales/ejercicio1.php">Ejercicio 1</a></h3>
    <h3><a href="U3/condicionales/ejercicio2.php">Ejercicio 2</a></h3>
    <h3><a href="U3/condicionales/ejercicio3.php">Ejercicio 3</a></h3>
    <h3><a href="U3/condicionales/ejercicio4.php">Ejercicio 4</a></h3>
    <h3><a href="U3/condicionales/ejercicio5.php">Ejercicio 5</a></h3>

    <h2>Verbos Irregulares</h2>
    <h3><a href="U3/verbos_irregulares/">Verbos Irregulares</a></h3>

    <h2>Tabla de Multiplicar</h2>
    <h3><a href="U3/tabla_multiplicar/">Tabla de multiplicar</a></h3>

    <h1>Tema 4</h1>

    <h2>Cookies</h2>
    <h3><a href="U4/cookies/">Cookies</a></h3>

    <h2>Ficheros</h2>
    <h3><a href="U4/ficheros/">Ficheros</a></h3>

    <h2>Sesiones</h2>
    <h3><a href="U4/sesiones/">Sesiones</a></h3>

    <h2>Sesiones</h2>
    <h3><a href="U4/autentication/">Autenticacion</a></h3>

    <h1>Tema 5</h1>
    <h2>POO</h2>
    <h3><a href="U5/mascotas/">POO</a></h3>

    <h1>Tema 6</h1>
    <h2>Bases de Datos</h2>
    <h3><a href="https://github.com/JMER15/Desarrollo-Web-en-Entorno-Servidor/tree/main/U6">Bases de Datos</a></h3>

    <h1>Tema 7</h1>
    <h2>MVC</h2>
    <h3><a href="https://github.com/JMER15/Desarrollo-Web-en-Entorno-Servidor/tree/main/U7">MVC</a></h3>

    <h1>Tema 8</h1>
    <h2>Api Contactos-app</h2>
    <h3><a href="https://github.com/JMER15/Desarrollo-Web-en-Entorno-Servidor/tree/main/U8">Api contactos</a></h3>

    <h1>Tema 9</h1>
    <h2>Api Contactos-app Con cliente</h2>
    <h3><a href="https://github.com/JMER15/Desarrollo-Web-en-Entorno-Servidor/tree/main/U9/ContactosApp">Api contactos-cliente</a></h3>

    <h2>Api Contactos-app Con cliente-laravel</h2>
    <h3><a href="https://github.com/JMER15/Api-Contactos-Cliente-Angular">Api contactos-cliente-laravel</a></h3>

    <h1>Tema 10</h1>
    <h2>Symblog</h2>
    <h3><a href="https://github.com/JMER15/Desarrollo-Web-en-Entorno-Servidor/tree/main/U10/SymblogApp">SymblogApp</a></h3>

</body>
</html>