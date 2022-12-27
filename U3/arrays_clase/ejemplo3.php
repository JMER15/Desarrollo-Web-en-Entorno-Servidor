<?php
/**
 * ejemplo 3 array multidimensionales
 * 
 * Array indexado bidimensional donde cada elemento es un array asociativo.
 */

    //ejemplo 1
    $cars = array (
            array("marca"=>"Volvo", "m1"=>100, "m2"=> 96),
            array("marca"=>"BMW", "m1"=>60, "m2"=>59),
            array("marca"=>"Toyota", "m1"=>110, "m2"=>100)
        );

        //pruebas para sacar valores
        echo $cars[0]['marca'] . "<br/> ";
        echo $cars[0]['m1'] . "<br/> ";
        echo $cars[0]['m2'] . "<br/> ";
        echo $cars[2]['m2'] . "<br/> ";
        echo $cars[2]['marca'] . "<br/> ";
        echo $cars[1]['m1'] . "<br/> ";
        // primer corchete es el indice del array y el segundo corchete los valores asociativos del segundo array
    
    foreach ($cars as $key => $value) {
        echo $key ." ";
    }
    // es indexado porque contiene 3 arrays dentro que son los indices numericos

    // foreach ($cars as $key => $value) {
    //     echo $value ." ";
    // }
    // aqui da error porque el $value es otro array y necesitamos recorrerlo con otro for each

   // ejemplo 2
    $families = array (
                "Griffin"=>array ("Peter", "Lois", "Megan"),
                "Quagmire"=>array("Glenn"),
                "Brown"=>array("Cleveland", "Loretta", "Junior")
                );

            echo $families['Griffin'][2]; // esto mostraría megan 

    // ejemplo 3
    $frutas = array(

            "manzana" => array(
                    "color" => "rojo",
                    "sabor" => "dulce",
                    "forma" => "redondeada"),
            "naranja" => array(
                    "color" => "naranja",
                    "sabor" => "ácido",
                    "forma" => "redondeada"),
            "plátano" => array(
                    "color" => "amarillo",
                    "sabor" => "paste-y",
                    "forma" => "aplatanada")

        );

        // cual es la salida de echo $a["manzana"]["sabor"];
        echo "<br/>";
        echo $frutas["manzana"]["sabor"]; //dulce
        echo "<br/>";

        foreach ($frutas as $key => $value) {
            foreach ($value as $key => $value2) {
               echo "key: " . $key . " valor: " . $value2 . " , ";
            }
        }
?>
