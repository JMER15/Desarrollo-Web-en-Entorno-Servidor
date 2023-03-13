<?php
$country = '';

if (isset($_POST['country'])) {
    $country = $_POST['country'];
}

$msgSoap = '<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
  <soap:Body>
    <CountryFlag xmlns="http://www.oorsprong.org/websamples.countryinfo">
      <sCountryISOCode>' . $country . '</sCountryISOCode>
    </CountryFlag>
  </soap:Body>
</soap:Envelope>';
$ch = curl_init();

$configCurl = array(
    CURLOPT_URL => "http://www.oorsprong.org/websamples.countryinfo/countryinfoservice.wso?op=CountryFlag",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => $msgSoap,
    CURLOPT_HTTPHEADER => array(
        "Content-Type: text/xml",
        "charset: utf-8"
    )
);

curl_setopt_array($ch, $configCurl);

$response = curl_exec($ch);
curl_close($ch);

// echo $response;

preg_match("/<m:CountryFlagResult>(.*)<\/m:CountryFlagResult>/", $response, $matches);
// var_dump($matches);
// // var_dump($response);
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
    <h1>Países y banderas</h1>

    <form action="" method="post">
        <select name="country" id="">
            <option value="">Elija una opción</option>
            <option value="ES">España</option>
            <option value="FR">Francia</option>
            <option value="IT">Italia</option>
            <option value="DE">Alemania</option>
            <option value="GB">Reino Unido</option>
            <option value="US">Estados Unidos</option>
            <option value="CN">China</option>
            <option value="JP">Japón</option>
            <option value="RU">Rusia</option>
            <option value="IN">India</option>
            <option value="BR">Brasil</option>
            <option value="CA">Canadá</option>
            <option value="AU">Australia</option>
            <option value="AR">Argentina</option>
        </select>
        <input type="submit" name="enviar" id="enviar" value="Enviar">
    </form>
    <br>
    <br>
    <?php
    echo "<img src='" . $matches[1] . "'>";
    ?>

</body>

</html>