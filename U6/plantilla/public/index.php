<?php
require_once('../app/Config/constantes.php');
require_once('../vendor/autoload.php');

use App\Models\User;

$processForm = false;


$u = User::getInstancia();
var_dump($u->get());
