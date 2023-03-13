<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Models\Contactos;
use App\Core\Bootstrap;

Bootstrap::init();

$contactos = Contactos::getInstancia();

$prueba = $contactos->set(['nombre' => 'josemi22', 'telefono' => '123456782', 'email' =>'prueba22@gmail.com']);

var_dump($prueba);


?>