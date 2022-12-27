<?php
/**
 * 
 * 
 */

 session_start();
 echo session_id();
 if (isset($_SESSION['mensaje'])) {
    echo "<br/>".$_SESSION['mensaje'];
 }else{
    $_SESSION['mensaje'] = 'hola mundo';
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
    <?php
    ?>
</body>
</html>