<?php
/**
 * 
 */
// require_once 'app/models/Perro.php';
// require_once 'app/models/Persona.php';

require_once 'vendor/autoload.php';

use App\Models\Perro;
use App\Models\Persona;

$perro = new Perro('tana','negro');
echo "dame la pata";
$perro -> darPata();
$perro -> entrenar();
$perro -> entrenar();
$perro -> entrenar();
$perro -> entrenar();
$perro -> entrenar();
$perro -> darPata();

?>