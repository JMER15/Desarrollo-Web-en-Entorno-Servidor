<?php

/**
 * Define un array que permita almacenar y mostrar la siguiente información.
 * 
 * a. Meses del año.
 * b. Tablero para jugar al juego de los barcos.
 * c. Nota de los alumnos de 2o DAW para el módulo DWES.
 * d. Verbos irregulares en inglés.
 * e. Información sobre continentes, países, capitales y banderas.
 * 
 * @author José Miguel
 */

    //array meses del año
    $aMesesAnyo = ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre',
                    'Noviembre','Diciembre'];

    // Tablero para jugar al juego de los barcos
    $aTablero = array(

        array(0,0,0,0,0,0,0,0,0,0),
        array(0,0,0,0,0,0,0,0,0,0),
        array(0,0,0,0,0,0,0,0,0,0),
        array(0,0,0,0,0,0,0,0,0,0),
        array(0,0,0,0,0,0,0,0,0,0),
        array(0,0,0,0,0,0,0,0,0,0),
        array(0,0,0,0,0,0,0,0,0,0),
        array(0,0,0,0,0,0,0,0,0,0),
        array(0,0,0,0,0,0,0,0,0,0),
        array(0,0,0,0,0,0,0,0,0,0),

        // guardamos en el array todo 0 que seria el tablero sin los barcos; si queremos poner un barco el 0 pasaria a 1
    );
    
    // Tablero para jugar al juego de los barcos
    $aTablero2 = array(

        array(0,0,0,1,1,0,0,0,0,0), //barquito de 2
        array(1,0,0,0,0,0,0,0,0,0),
        array(1,0,0,0,0,0,0,0,0,0),
        array(1,0,0,0,0,0,0,0,0,0), //barquito de 3 en vertical
        array(0,0,0,0,0,0,0,0,0,0),
        array(0,0,0,0,0,0,0,0,0,0),
        array(0,0,0,0,0,0,0,0,0,0),
        array(0,0,0,0,0,0,0,0,0,0),
        array(0,0,0,0,0,0,0,0,0,0),
        array(0,0,0,0,0,0,0,0,0,0),
        
    );
        
    // Nota de los alumnos de 2º de daw para el módulo DWES
    $aAsignaturas =  array(

        "DWES" => array(

            array(
                "Alumno" => "Josemi", "Nota" => "8",
            ),
            array(
                "Alumno" => "Maria", "Nota" => "8",
            ),
            array(
                "Alumno" => "Javi", "Nota" => "9",
            ),
            array(
                "Alumno" => "Hugo", "Nota" => "9",
            ),
            array(
                "Alumno" => "Jose Luis", "Nota" => "8",
            ),

        ),

        "DWEC" => array(

            array(
                "Alumno" => "Josemi", "Nota" => "9",
            ),
            array(
                "Alumno" => "Maria", "Nota" => "9",
            ),
            array(
                "Alumno" => "Javi", "Nota" => "10",
            ),
            array(
                "Alumno" => "Hugo", "Nota" => "9",
            ),
            array(
                "Alumno" => "Jose Luis", "Nota" => "9",
            ),

        ),

    );

    // Verbos irregulares en ingles
    $aVerbosIrregulares = array(

        array("Base Form" => "arise" , "Past Form" => "arose", "Past Participle" => "arisen"),
        array("Base Form" => "awake" , "Past Form" => "awoke", "Past Participle" => "awoken"),
        array("Base Form" => "bear" , "Past Form" => "bore", "Past Participle" => "borne"),
        array("Base Form" => "beat" , "Past Form" => "beat", "Past Participle" => "beaten"),

    );

    // // sacar todos
    // foreach ($aVerbosIrregulares as $key => $value) {
    //     foreach ($value as $key2 => $value2) {
    //         echo $key2 .':'.$value2;
    //     }
    // }

    // sacar solo un verbo
    foreach ($aVerbosIrregulares[0] as $key => $value) {
        echo $key. ':'. $value;
    }
    
    // Información sobre continentes, países, capitales y banderas.
    $aPaises =  array(

        "España" => array(
            array("Continente" => "Europa", "Capital" => "Madrid", "Bandera" => "banderaEspaña.png"),
        ),
        "Portugal" => array(
            array("Continente" => "Europa", "Capital" => "Lisboa", "Bandera" => "banderaLisboa.png"),
        ),
        "Brasil" => array(
            array("Continente" => "América", "Capital" => "Brasilia", "Bandera" => "banderaBrasil.png"),
        ),
        "Japón" => array(
            array("Continente" => "Asia", "Capital" => "Tokyo", "Bandera" => "banderaJapon.png"),
        ),

    );

    echo "<b>Repositorio: </b> <a href=https://github.com/JMER15/Desarrollo-Web-en-Entorno-Servidor/blob/main/U3/arrays/ejercicio3.php>Código Github</a>"

?>