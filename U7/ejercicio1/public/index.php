<?php

require_once('../app/Config/parametros.php');
require_once('../vendor/autoload.php');

use App\Core\Router;
use App\Controllers\indexController;

$router = new Router();

$router->add(array(
    'name' => 'home',
    'path' => '/^\/$/',
    'action' => [IndexController::class, 'IndexAction']
));

$router->add(array(
    'name' => 'home',
    'path' => '/^\/saludo\/[A-z]*$/',
    'action' => [IndexController::class, 'SaludaAction']
));

$request = str_replace(DIRBASEURL, '', $_SERVER['REQUEST_URI']);
$route = $router->match($request);

// echo $request;

if ($route) {
    $controllerName = $route['action'][0];
    $actionName = $route['action'][1];
    $controller = new $controllerName;
    $controller->$actionName($request);
} else {
    echo "No route";
}

