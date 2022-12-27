<?php
/**
 * 
 * Crear una aplicación que almacene información de países: nombre capital y bandera. Diseñar un
 * formulario que permita seleccionar un país y nos muestre el nombre de la capital y la bandera.
 * 
 * @author José Miguel
 */

// lógica de negocio
// creamos el array de países de tipo select
$paises = array(

    array('capital' => 'Madrid', 'imagen' => 'img/españa.png','pais' => 'España',),
    array('capital' => 'Buenos Aires','imagen' => 'img/argentina.png','pais' => 'Argentina'),
    array('capital' => 'Brasilia', 'imagen' => 'img/brasil.png','pais' => 'Brasil'),
    array('capital' => 'Ottawa', 'imagen' => 'img/canada.png','pais' => 'Canada',),
    array('capital' => 'París','imagen' => 'img/francia.png','pais' => 'Francia',),
    array('capital' => 'Lisboa','imagen' => 'img/portugal.png','pais' => 'Portugal',),
    // array('valor' => 6, 'pais' => 'Portugal', 'imagen' => 'img/portugal.png', 'capital' => 'Lisboa'),
    
);

// banderas para el formulario
$procesaFormulario = false;
$capital = "";
$imagen = "";
$pais = "";
$opcionSeleccionada ="";

// detectar error en la validación de datos del formulario
if (isset($_POST['enviar'])) { // los datos de la publicación vuelven a estar presentes.
    $procesaFormulario = true;

    // Lista desplegable. No hay validación solo carga de datos
    if (isset($_POST['paises'])) {
        $opcionSeleccionada = $_POST['paises'];
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Capitales</title>
</head>

<body>

    <?php
    if (!$procesaFormulario) {
    ?>
        <h1>Capitales del Mundo</h1>

        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">

            Selecciona un país:
            <select name="paises">
                <?php
                foreach ($paises as $key => $value) {
                    $selected = ($opcionSeleccionada == $value['pais']) ? 'selected' : '';
                    echo "<option value = \"" . $value['pais'] . "\" $selected>" . $value['pais'] . "</option>";
                    // este es pa que salga el nombre del pais
                }
                ?>
            </select><br><br>
            <input type="submit" name="enviar" value="Enviar">
        </form>

    <?php

    } else {
        
        foreach ($paises as $key => $value) {
            foreach ($value as $key => $value2) {

                if ($key == 'capital') {
                    $capital = $value2;
                }

                if ($key == 'imagen') {
                    $imagen = $value2;
                }

                if ($key == 'pais') {
                    $pais = $value2;
                }
                    
                if ($value2 == $_POST['paises']) {
                    echo 'La capital es: '. $capital."<br/>";
                    echo "La bandera es: <br/> <img src=".$imagen.">"."<br/>";
                    echo 'El país es: '.$pais.'<br/>';
                    echo "<a href=''>Reiniciar</a>";
                }

            }
        }
        ?>
    <?php    
    }
    ?>
</body>

</html>