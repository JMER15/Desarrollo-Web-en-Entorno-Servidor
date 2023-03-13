<?php
/**
 * 
 * crear un contacto: post /contactos
 * listar contactos: get /contactos
 * leer un contacto: get /contactos/{id}
 * modificar un contacto: put /contactos/{id}
 * borrar un contacto: delete /contactos/{id}
 * 
 * @author josemi
 */

require_once(__DIR__ . "/../vendor/autoload.php");
require_once("../app/Config/config.php");

use App\Core\Router;
use App\Controllers\ContactosController;
use App\Core\Bootstrap;
use App\Controllers\AuthController;

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: OPTIONS,GET,POST,PUT,DELETE");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

$method = $_SERVER['REQUEST_METHOD'];
if ($method == "OPTIONS") {
    exit();
}

// $request = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// if ($request == '/login') {
//     $auth = new AuthController();
//     echo json_encode($auth->handleRequest());
//     http_response_code(401);
//     exit();
// }


// echo $_SERVER['HTTP_AUTHORIZATION'];

Bootstrap::init();
$router = new Router();

$router->add(array(
    'name' => 'home',
    'path' => '/^\/contactos(\/[0-9]+)?$/',
    'action' => [ContactosController::class, 'handleRequest'],
));

// $router->add(array(
//     'name' => 'home',
//     'path' => '/^\/login$/',
//     'action' => [ContactosController::class, 'handleRequest'],
// ));

$request = $_SERVER['REQUEST_URI'];
$route = $router->match($request);
if ($route) {
    $controllerName = $route['action'][0];
    $actionName = $route['action'][1];
    $controller = new $controllerName;
    // $controller->$actionName($request);
    // comentar una sino lo mete 2 veces
    print_r($controller->$actionName($request)); 
} else {
    echo "No route";
}

