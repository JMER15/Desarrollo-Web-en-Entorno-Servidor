<?php

/**
 * Ejercicio 4
 * 
 * Modifica la página inicial realizada, incluyendo una imagen de cabecera en función de la estación del
 * año en la que nos encontremos y un color de fondo en función de la hora del día.
 * 
 * @author José Miguel
 */

 $hora = date('G'); // con G es de 0 hasta 23;
//  $hora = 21;
//  $mes = date('n');
 $mes = 3;

    // gestion del fondo según la hora
    if ($hora >= 8 && $hora < 14) {
        echo '<body style="background-color:lightblue";></body>';
    }elseif ($hora >= 14 && $hora < 21) {
        echo '<body style="background-color:orange";></body>';
    }elseif ($hora >= 21 && $hora < 8) {
        echo '<body style="background-color:darkblue";></body>';
    }

    // gestion de la estación según el mes
    if ($mes >= 1 && $mes <=2) {
        echo '<img src="img/invierno.jpg" width="200" height="200"></img>';
    }if ($mes == 3) {            
        echo '<img src="img/invierno.jpg" width="200" height="200"></img>'; 
        echo '<img src="img/primavera.jpg" width="200" height="200"></img>';
    }if ($mes >=4 && $mes <=5) {
        echo '<img src="img/primavera.jpg" width="200" height="200"></img>';
    }if ($mes == 6) {            
        echo '<img src="img/primavera.jpg" width="200" height="200"></img>'; 
        echo '<img src="img/verano.jpg" width="200" height="200"></img>';
    }if ($mes >=7 && $mes <=8) {
        echo '<img src="img/verano.jpg" width="200" height="200"></img>';
    }if ($mes == 9) {            
        echo '<img src="img/verano.jpg" width="200" height="200"></img>'; 
        echo '<img src="img/otoño.jpg" width="200" height="200"></img>';
    }if ($mes >=10 && $mes <=11) {
        echo '<img src="img/otoño.jpg" width="200" height="200"></img>';
    }if ($mes == 12) {            
        echo '<img src="img/otoño.jpg" width="200" height="200"></img>';
        echo '<img src="img/invierno.jpg" width="200" height="200"></img>'; 
    }
        
?>

<br></br>
<b>Repositorio: </b> <a href=https://github.com/JMER15/Desarrollo-Web-en-Entorno-Servidor/blob/main/U3/ejercicio4.php>Código Github</a>



