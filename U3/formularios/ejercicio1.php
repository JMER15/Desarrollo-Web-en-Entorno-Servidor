<?php
/**
 * funcion para limpiar una cadena de entrada
 * parámetro: cadena procedente de un formulario
 * return: cadena limpia
 */
function clear_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

//Definimos las variables tipo text con valor inicial en este caso ""
$name = "";
$email = "";
$gender = "";
$comment = "";
$website = "";

// definimos las variables de error
$nameError = "";
$emailError = "";
$websiteError = "";

// para el género usamos un array
$genero = ['hombre', 'mujer', 'otros'];

// variable para error en género
$genderError = "";

// variables para la movilidad
// array vehículos
$vehiculos = ['bike', 'car', 'patinete'];

// array con las opciones seleccionadas
$vehiculosSeleccion = [];

// opciones con valor y literal
//observar el resultado del procesamiento
$opciones  = array(
    array('valor' => 1, 'literal' => 'Opción 1'),
    array('valor' => 2, 'literal' => 'Opción 2'),
    array('valor' => 3, 'literal' => 'Opción 3'),
    array('valor' => 4, 'literal' => 'Opción 4'),
);
$opcionSeleccionada = 1; // por defecto es 1

// variables para las marcas de coches
$cars = ['Renault', 'Mercedes'];
// array con las opciones seleccionadas
$carsSeleccionado = [];

$procesaFormulario = false;
$error = false;

// detectar error en la validación de datos del formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //Qué método de solicitud se utilizó para acceder a la página; es decir, 'GET', 'HEAD', 'POST', 'PUT'
    $procesaFormulario = true;

    //validación del nombre
    if (empty($_POST['name'])) {
        $nameError = 'name is required';
        $error = true;
    } else {
        $name = clear_input($_POST['name']);
    }

    //validación email
    if (empty($_POST['email'])) {
        $emailError = 'email is required';
        $error = true;
    } else {
        $email = clear_input($_POST['email']);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailError = 'formato de email incorrecto';
            $error = true;
        }
    }

    // comentario
    $comment = clear_input($_POST['comment']);

    // validación url
    $website = clear_input($_POST['website']);

    // validación gender
    if (empty($_POST['gender'])) {
        $genderError = 'gender is required';
        $error = true;
    } else {
        $gender = $_POST['gender'];
    }

    // vehículos seleccionados. No hay validación solo carga de datos
    if (isset($_POST['vehicle'])) {
        $vehiculosSeleccion = $_POST['vehicle'];
    }

    // Lista desplegable. No hay validación solo carga de datos
    if (isset($_POST['combo'])) {
        $opcionSeleccionada = $_POST['combo'];
    }

    // selección múltiple
    if (isset($_POST['cars'])) {
        $carsSeleccionado = $_POST['cars'];
    }

    // ajustamos bandera de proceso del formulario en función del error
    if ($error) {
        $procesaFormulario = false;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curriculum</title>
    <style>
        .error {
            color: #FF0000
        }
    </style>
</head>

<body>

    <?php
    if (!$procesaFormulario) {
    ?>
        <h1>Validación Formulario PHP</h1>
        <p><span class="error">*Campos Requeridos..</span></p>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">

            Nombre: <input type="text" name="name" value="<?php echo $name; ?>">
            <span class="error">*<?php echo $nameError; ?></span><br /><br />

            Email: <input type="text" name="email" value="<?php echo $email; ?>">
            <span class="error">*<?php echo $emailError; ?></span><br /><br />

            URL: <input type="text" name="website" value="<?php echo $website; ?>">
            <span class="error"><?php echo $websiteError; ?></span><br /><br />

            Comentario: <br />
            <textarea name="comment" cols="30" rows="10"><?php echo $comment; ?></textarea><br /><br />

            Género:
            <?php
            foreach ($genero as $key => $value) {
                $check = "";
                if ($gender == $value) {
                    $check = "checked";
                }
                echo "<input type=\"radio\" name=\"gender\" value = \"$value\" $check>$value";
            }
            echo "<span class=\"error\"> * $genderError</span><br><br>";
            ?>

            Transporte: <br>
            <?php
            foreach ($vehiculos as $key => $value) {
                $selected = (in_array($value, $vehiculosSeleccion)) ? 'checked' : '';
                echo "<input type=\"checkbox\" name=\"vehicle[]\" value = \"" . $value . "\" $selected>" . $value;
            }
            ?>
            <br><br>

            Selecciona una opción:
            <select name="combo">
                <?php
                foreach ($opciones as $key => $value) {
                    $selected = ($opcionSeleccionada == $value['valor']) ? 'selected' : '';
                    echo "<option value = \"" . $value['value'] . "\" $selected>" . $value['literal'] . "</option>";
                }
                ?>
            </select><br><br>

            Selecciona vehículos (múltiple):
            <select multiple name="cars[]">
                <?php
                foreach ($cars as $key => $value) {
                    $selected = (in_array($value, $carsSeleccionado)) ? 'selected' : '';
                    echo "<option value = \"" . $value . "\" $selected>" . $value . "</option>";
                }
                ?>
            </select><br><br>
            <input type="submit" name= "enviar" value="Enviar">
        </form>

    <?php
    } //procesa formulario
    else {
        echo "todos los datos están correctos";
        echo "Tus inputs: ";
        echo $name."<br/>";
        echo $email."<br/>";
        echo $website."<br/>";
        echo $comment."<br/>";
        echo $gender."<br/>";
        // bucle seleccion multiple vehículos
        foreach ($vehiculosSeleccion as $key => $value) {
            echo $value.'<br/>';
        }
        // bucle selección múltiple marcas coches
        foreach ($carsSeleccionado as $key => $value) {
            echo $value.'<br/>';
        }
        // esto es para ver lo que hay en $_GET Y $_POST
       foreach ($_REQUEST as $key => $value) {
        echo $key;
       }
    }
    ?>

</body>

</html>