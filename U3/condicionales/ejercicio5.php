<?php
/**
 * Ejercicio 5
 * 
 * Script que muestre una lista de enlaces en función del perfil de usuario:
 * Perfil Administrador: Pagina1, Pagina2, Pagina3, Pagina4
 * Perfil Usuario: Pagina1, Pagina2
 * 
 * @author José Miguel
 */   

// descomentar para ver el resultado
// $perfil = "Administrador";

$perfil = "Usuario";

if ($perfil == 'Administrador') {

    echo "Soy el usuario ".$perfil."<br/>";
    echo "<a href = index.html>Página 1</a>"." ";
    echo "<a href = index.html>Página 2</a>"." ";
    echo "<a href = index.html>Página 3</a>"." ";
    echo "<a href = index.html>Página 4</a>"." ";
} else{
    echo "Soy el usuario ".$perfil."<br/>";
    echo "<a href = index.html>Página 1</a>"." ";
    echo "<a href = index.html>Página 2</a>"." ";
}

?>

<br></br>
<b>Repositorio: </b> <a href=https://github.com/JMER15/Desarrollo-Web-en-Entorno-Servidor/blob/main/U3/condicionales/ejercicio5.php>Código Github</a>