<?php

if (isset($_POST['enviar'])) {

    if (!empty($_POST['categoria'])) { //si no está vacío es que se ha seleccionado algo lo guardo en cookie
        foreach ($_POST['categoria'] as $value) {
            //creamos cookie
            setcookie($value, $value, time() + 3600, "/");
        }
    } else {
        echo 'No has seleccionado ninguna categoría';
    }

    // redirijo al mostrarNoticias.php
    header('Location: mostrarNoticias.php');
}


if (isset($_GET['borrar'])) {

    if(isset($_COOKIE)){
        foreach($_COOKIE as $key=>$value){
            setcookie($key,"",time()+3600,"/");
        }
    }
} 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>

    <?php
         //Muestro formulario
         echo "<h1>Preferencias</h1>";
         echo "<form action='index.php' method='post'>";
         echo "<input type='checkbox' name='categoria[]' value='videojuegos'>Videojuegos<br>";
         echo "<input type='checkbox' name='categoria[]' value='series'>Series<br>";
         echo "<input type='checkbox' name='categoria[]' value='cine'>Cine<br>";
         echo "<input type='checkbox' name='categoria[]' value='literatura'>Literatura<br>";
         echo "<br/>";
         echo "<input type='submit' name='enviar' value='Enviar'>";
         echo "</form>";
         echo "<br/>";
         echo "<a href=mostrarNoticias.php>Ver datos</a><br>";  
         echo "<br/>";      
         echo "<a href='index.php?borrar=true'>Eliminar datos</a>";
    ?>
    
</body>
</html>
