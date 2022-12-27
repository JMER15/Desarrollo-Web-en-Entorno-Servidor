<?php
/**
 * Subida de imágenes
 * 
 * @author JoséMi
 */

include('config/config.php');

if (isset($_POST['submit'])) {

    $tmp = explode('.', $_FILES['file']['name']); // array con las partes del nombre // hay que hacerle un (String) deprecated
    $ext = end($tmp); // elemento final del array

    var_dump($_FILES['file']);
    echo $ext;

    if (($_FILES['file']['size'] < MAXSIZE) &&
        in_array($_FILES['file']['type'], $formatosPermitidos) &&
        in_array($ext, $extensiones)
    ) {

        if ($_FILES['file']['error'] > 0) {
            echo "Return Code: " . $_FILES['file']['error'] . '<br/>';
        } else {
            $filename = $_FILES['file']['name'];
            $filename = uniqid() . '.' . pathinfo($filename, PATHINFO_EXTENSION);
            echo "Upload :" . $_FILES['file']['name'] . '<br/>';
            echo "Type :" . $_FILES['file']['type'] . '<br/>';
            echo "Size :" . ($_FILES['file']['size'] / 1024) . '<br/>';
            echo "Temp file :" . $_FILES['file']['tmp_name'] . '<br/>';

            if (file_exists(DIRUPLOAD . $filename)) {
                echo $_FILES['file']['name'] . "existe";
            } else {
                move_uploaded_file($_FILES['file']['tmp_name'], DIRUPLOAD . $filename);
                echo "Stored in: " . DIRUPLOAD . $filename;
            }
            // echo '<br/>';
            // echo "<a href = \"".$_SERVER['HTTP_REFERER']."\">Volver</a>"; // no se recomienda
            echo '<br/>';
            echo '<a href = "javascript:history.back()">Volver</a>'.'<br/>';
        }
    } else {
        echo 'Invalid file';
    }
}

// cargar el nombre de los ficheros en el array
$directorio = "upload/";
$imagenes = [];
foreach (scandir($directorio) as $key => $value) {
    if (@exif_imagetype(DIRUPLOAD.$value)) { //para que no salga los mensajes de noticias
        $imagenes[] = DIRUPLOAD.$value;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir imagenes</title>
</head>

<body>

    <h1>Subida de archivos</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="file">Filename:</label>
        <input type="file" name="file" id="file"><br />
        <input type="submit" name="submit" id="Submit"><br />
    </form>

    <!-- Mostrar las imágenes  -->
    <?php
    foreach ($imagenes as $key => $value) {
        echo "<img src=\"$value\"></img>";
    }
    ?>

</body>

</html>