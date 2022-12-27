<?php
/**
 * 
 * @author josemi
 */


session_start();
require_once('vendor/autoload.php');
use App\Models\Equipo;
include('config/config.php');

$equipo = new Equipo();
$db = $equipo->conectaDB();

if (!isset($_SESSION['perfil'])) {
    $_SESSION['perfil'] =
}
?>