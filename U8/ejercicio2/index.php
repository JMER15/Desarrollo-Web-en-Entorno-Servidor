<?php

$country = 'ES';

$mensaje = '<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
  <soap:Body>
    <CountryFlag xmlns="http://www.oorsprong.org/websamples.countryinfo">
      <sCountryISOCode>' . $country . '</sCountryISOCode>
    </CountryFlag>
  </soap:Body>
</soap:Envelope>';

// echo $mensaje;
// exit;

$curl = curl_init();

$opciones = array(
  CURLOPT_URL => 'http://webservices.oorsprong.org/websamples.countryinfo/CountryInfoService.wso',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_HTTP_VERSION => 1.1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => $mensaje,
  CURLOPT_HTTPHEADER => array(
    'Content-Type: text/xml; charset=utf-8',
  )
);

//ejecuta y cierra curl
curl_setopt_array($curl, $opciones);
$respuesta = curl_exec($curl);
curl_close($curl);
//utiliza preg_match para localizar el resultado en la respuesta
preg_match("/<m:CountryFlagResult>(.*)<\/m:CountryFlagResult>/", $respuesta, $resultado);

//muestra el resultado
// echo $respuesta;

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
  <h1>Paises</h1>
  <?php
  // echo $resultado[0];
  // echo $resultado[1];
  ?>
  <img src="<?php echo $resultado[1] ?>" alt="españita">
  <!-- Hay que poner la segunda ruta[1], porque en la primera ruta[0] hay xml y no lo carga el navegador en el img -->
</body>

</html>