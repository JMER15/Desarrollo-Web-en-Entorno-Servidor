<?php

/**
 * 
 * Adivina el personaje de One Piece
 * 
 * @author JoseMi
 */

$personajes = array(
    array('luffy', 'img/luffy.jpg'),
    array('kaido', 'img/kaido.jpg'),
    // array('franky', 'img/franky.jpg'),
    // array('buggy', 'img/buggy.jpg'),
);

$arrayRespuestas = array('luffy', 'kaido');

$procesaFormulario = false;
$error = false;
$name = "";
$nameError = "";

// validar los datos que me da el usuario
if (isset($_POST['enviar'])) {
    $procesaFormulario = true;

    if (empty($_POST['name'])) {
        $nameError = 'el nombre esta vacio';
        $error = true;
    } else {
        $name = $_POST['name'];
    }

    if ($error) {
        $procesaFormulario = false;
    }
}

// var_dump($_POST['name']);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
</head>

<body>

    <?php
    if (!$procesaFormulario) {
    ?>
        <h1>Personajes de One Piece</h1>

        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">

            Indica los nombres de los personajes:

            <?php
            foreach ($personajes as $key => $value) {
                echo "<br/><br/><br/>";
                echo "<img src=" . $value[1] . ">" . "<br/><br/>"; ?>
                <input type="text" name="name[]" value="<?php echo $name; ?>">
            <?php
            }
            ?>

            </select><br><br>
            <input type="submit" name="enviar" value="Enviar">

        </form>

    <?php
    } else {

        foreach ($_POST['name'] as $key => $value) {

            if ($value == $arrayRespuestas[count($value)]) {
                echo 'acierto';
            } else {
                echo 'fallo';
            }
        }

        // }
    }
    // print_r($personajes).'<br/>';
    // print_r($_POST['name']).'<br/>';

    ?>
</body>

</html>