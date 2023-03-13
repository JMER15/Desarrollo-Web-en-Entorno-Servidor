<?php
/**
 * 
 * @author josemi 
 */

//soapClient banderas of country
$soap = new SoapClient("http://www.oorsprong.org/websamples.countryinfo/CountryInfoService.wso?WSDL");

$country = "ES";

$countryFlag = $soap->CountryFlag(["sCountryISOCode" => $country]);

$result = $countryFlag->CountryFlagResult;


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
    <h1>Banderas</h1>
    <img src="<?php echo $result?>" alt="">
</body>
</html>