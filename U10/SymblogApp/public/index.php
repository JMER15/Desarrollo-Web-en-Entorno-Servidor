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

use App\Core\Bootstrap;
use Illuminate\Database\Capsule\Manager as Capsule;
use Laminas\Diactoros\ServerRequestFactory;
use Aura\Router\RouterContainer;

Bootstrap::init();

$capsule = new Capsule;

$capsule->addConnection([
    'driver' => 'mysql',
    'host' => DBHOST,
    'database' => DBNAME,
    'username' => DBUSER,
    'password' => DBPASS,
    'charset' => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix' => '',
]);

// MAKE THIS CAPSULE INSTANCE AVAILABLE GLOBALLY VIA STATIC METHODS... (optional)
$capsule->setAsGlobal();

// Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
$capsule->bootEloquent();

$request = ServerRequestFactory::fromGlobals(
    $_SERVER,
    $_GET,
    $_POST,
    $_COOKIE,
    $_FILES
);


// implementar las rutas con aura/router
$routerContainer = new RouterContainer();
$map = $routerContainer->getMap();

$map->get('showBlog', '/', [
    'controller' => 'App\Controllers\BlogController',
    'action' => 'showBlogsAction'
]);

$map->get('addBlog', '/blogs/add', [
    'controller' => 'App\Controllers\BlogController',
    'action' => 'addBlogAction'
]);

$map->post('saveBlog', '/blogs/add', [
    'controller' => 'App\Controllers\BlogController',
    'action' => 'addBlogAction'
]);

$map->get('showBlogId', '/blog/{id}', [
    'controller' => 'App\Controllers\BlogController',
    'action' => 'showBlogAction'
]);

$map->get('about', '/about', [
    'controller' => 'App\Controllers\PageController',
    'action' => 'aboutAction'
]);

$map->get('contact', '/contact', [
    'controller' => 'App\Controllers\PageController',
    'action' => 'contactAction'
]);

$map->post('contactSend', '/contact', [
    'controller' => 'App\Controllers\PageController',
    'action' => 'contactActionSend'
]);

$map->get('login', '/login', [
    'controller' => 'App\Controllers\AuthController',
    'action' => 'getLogin'
]);

$matcher = $routerContainer->getMatcher();
$route = $matcher->match($request);

if (!$route) {
    echo "No route";
} else {
    $handlerData = $route->handler;
    $controllerName = $handlerData['controller'];
    $actionName = $handlerData['action'];

    $needsAuth = $handlerData['auth'] ?? false;
    $sessionUserId = $_SESSION['userId'] ?? null;
    if ($needsAuth && !$sessionUserId) {
        header('Location: /login');
    } else {
        $controller = new $controllerName;
        $response = $controller->$actionName($request);
        foreach ($response->getHeaders() as $name => $values) {
            foreach ($values as $value) {
                header(sprintf('%s: %s', $name, $value), false);
            }
        }
        http_response_code($response->getStatusCode());
        echo $response->getBody();
    }
}
