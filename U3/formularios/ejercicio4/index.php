<?php
/**
 * 
 * Personajes de One piece
 * 
 * @author JoséMi
 */

//Lógica de negocio
$onePiece = array(

    array(
        'imagen2' => 'img/luffy.jpg', 'fruta' => 'Gomu Gomu no mi', 'imagen' => 'img/gomu.jpg', 
        'Haki' => 'Del rey, Armadura, Observación, buen nivel de haki en los 3 elementos','personaje' => 'Monkey D Luffy' 
    ),
    array(
        'imagen2' => 'img/katakuri.jpg', 'fruta' => 'Mochi Mochi no mi', 
        'imagen' => 'img/mochi.jpg', 'Haki' => 'Del rey, Armadura, Observación','personaje' => 'Charlotte Katakuri', 
    ),
    array(
        'imagen2' => 'img/shanks.jpg','fruta' => 'Ninguna', 'imagen' => 'img/sinfruta.jpg', 
        'Haki' => 'Del rey, Armadura, Observación, haki del rey más tocho de One Piece','personaje' => 'Akagami D Shanks', 
    ),
    array(
        'imagen2' => 'img/barbablanca.jpg','fruta' => 'Gura Gura no mi', 'imagen' => 'img/gura.jpg', 
        'Haki' => 'Del rey, Armadura, Observación a altísimo nivel comparable con Shanks y Roger','personaje' => 'Edward Newgate', 
    ),
    array(
        'imagen2' => 'img/zoro.jpg','fruta' => 'Ninguna Especialidad: Espadachín', 'imagen' => 'img/sinfruta2.jpg', 
        'Haki' => 'De armadura','personaje' => 'Roronoa Zoro', 
    ),

);

$procesaFormulario = false;
$personaje = "";
$fruta = "";
$haki = "";
$imagen = "";
$imagen2 = "";
$opcionSeleccionada = "";

// detectar error en la validación solo mostrar
if (isset($_POST['enviar'])) {
    $procesaFormulario = true;

    // lista desplegable
    if (isset($_POST['personajes'])) {
        $opcionSeleccionada = $_POST['personajes'];
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>One Piece</title>
</head>

<body>

    <?php
    if (!$procesaFormulario) {
    ?>
        <h1>Personajes de One Piece</h1>

        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">

            Seleccione un personaje:
            <select name="personajes">
                <?php
                foreach ($onePiece as $key => $value) {
                    $selected = ($opcionSeleccionada == $value['personaje']) ? 'selected' : '';
                    echo "<option value = \"" . $value['personaje'] . "\" $selected>" . $value['personaje'] . "</option>";
                    // este es pa que salga el nombre del pais
                }
                ?>
            </select><br><br>
            <input type="submit" name="enviar" value="Enviar">

        </form>
    <?php
    } else {
        foreach ($onePiece as $key => $value) {
            foreach ($value as $key => $value2) {

                if ($key == 'personaje') {
                    $personaje = $value2;
                }

                if ($key == 'imagen2') {
                    $imagen2 = $value2;
                }

                if ($key == 'fruta') {
                    $fruta = $value2;
                }

                if ($key == 'imagen') {
                    $imagen = $value2;
                }

                if ($key == 'Haki') {
                    $haki = $value2;
                }

                if ($value2 == $_POST['personajes']) {
                    echo 'El personaje es: '.$personaje.'<br/><br/>';
                    echo "<img src=".$imagen2.">"."<br/><br/>";
                    echo "La fruta de ".$personaje." es: ".$fruta."<br/><br/>";
                    echo "<img src=".$imagen.">"."<br/><br/>";
                    echo "El personaje ". $personaje. " tiene los siguientes hakis: ".$haki."<br/><br/>";
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