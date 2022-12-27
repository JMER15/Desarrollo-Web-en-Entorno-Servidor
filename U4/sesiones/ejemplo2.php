<?php

// crear sesion con contador

session_start();
if (!isset($_SESSION['count'])) { // si la sesion no esta creada, la crea con el contador a 0
    echo $_SESSION['count'] = 0;
} else {
    if ($_POST['2']) {
        echo $_SESSION['count']++;
    }
}

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
    <form action="" method="POST">
        <input type="submit" name= "2" value="contador">
    </form>
</body>

</html>