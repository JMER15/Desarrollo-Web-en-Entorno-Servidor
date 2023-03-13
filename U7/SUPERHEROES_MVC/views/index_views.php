<?php

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

    <h1>Superheroes MVC</h1>
    <?php
    if ($_SESSION['perfil'] != "autorizado") {
        include_once '../app/include/login_form.php';
    }
    if (isset($_SESSION['error'])) {
        echo $_SESSION['error'];
        unset($_SESSION['error']);
    }
    ?>

    vardump($_SESSION['perfil']);

    <h2>Lista de Superheroes</h2>
    <form action="/search" method="POST">
        <input type="text" name="nombre">
        <input type="submit" value="Buscar Equipo" name="buscar">
    </form>
    <table border="1">

        <tr>
            <th>Nombre</th>
            <th>Velocidad</th>
            <?php
            if ($_SESSION['perfil'] == "autorizado") {
            echo "<a href=\"superheroes/add\">Agregar Superheroe</a>";
            ?>
            <th>Acciones</th>
            <?php
            }
            ?>
        </tr>

        <?php
        foreach ($data as $superheroes) {
            //tabla con nombre y velocidad
        ?>
            <tr>
                <td><?php echo $superheroes["nombre"]; ?></td>
                <td><?php echo $superheroes["velocidad"]; ?></td>
                <?php
                if ($_SESSION['perfil'] == "autorizado") {
                ?>
                <td>
                    <a href="superheroes/edit/<?php echo $superheroes['id']; ?>">Editar</a>
                    <a href="superheroes/delete/<?php echo $superheroes['id']; ?>">Eliminar</a>
                </td>
            </tr>
           <?php
                }
            }
            
            ?> 
    </table>


</body>

</html>