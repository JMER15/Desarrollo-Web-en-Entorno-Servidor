<?php

require_once(__DIR__ . "/../vendor/autoload.php");
use Dotenv\Dotenv;
use App\Controllers\indexController;
use App\Core\Router;

$dotenv = Dotenv::createImmutable(__DIR__."./..");
$dotenv->load();
define("DBHOST", $_ENV["DBHOST"]);
define("DBUSER", $_ENV["DBUSER"]);
define("DBPASS", $_ENV["DBPASS"]);
define("DBNAME", $_ENV["DBNAME"]);
define("DBPORT", $_ENV["DBPORT"]);

//implementar la sesion
session_start();
if (!isset($_SESSION['perfil'])) {

    $_SESSION['perfil'] = 'invitado';

}

$router = new Router();
$router->add(array(
    'name' => 'home',
    'path' => '/^\/$/',
    'action' => [IndexController::class, 'indexAction']
));

$router->add(array(
    'name' => 'search',
    'path' => '/^\/search$/',
    'action' => [IndexController::class, 'searchAllSuperheroesAction']
));

$router->add(array(
    'name' => 'add',
    'path' => '/^\/superheroes\/add$/',
    'action' => [IndexController::class, 'setSuperheroesAction']
));

$router->add(array(
    'name' => 'delete',
    'path' => '/^\/superheroes\/delete\/\d{0,3}$/', //regex para que solo acepte numeros
    'action' => [IndexController::class, 'deleteSuperheroesAction']
));

$router->add(array(
    'name' => 'edit',
    'path' => '/^\/superheroes\/edit\/\d{0,3}$/', //regex para que solo acepte numeros
    'action' => [IndexController::class, 'editSuperheroesAction']
));

$request = $_SERVER['REQUEST_URI'];
$route = $router->match($request);{}
if ($route) {
    $controllerName = $route['action'][0];
    $actionName = $route['action'][1];
    $controller = new $controllerName;
    $controller->$actionName($request);
} else {
    echo "No route";
}
