<?php
/**
 * Respuesta a un Formulario
 * 
 * @author José Miguel
 * 
 */

//  echo var_dump($_POST);
 foreach ($_POST as $key => $value) {
    if ($value != "enviar") {
       echo $key. " es". $value ."<br/>";
    }
 }

?>