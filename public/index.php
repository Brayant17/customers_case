<?php

session_start();

require_once __DIR__ . '/../vendor/autoload.php';

use App\MiniRouter;
use App\Middlewares\AuthMiddleware;

$router = new MiniRouter('/miapp');

$router->add('GET', '/', 'HomeController@index');
$router->add('GET', '/user/{id}', 'UserController@show', [
    AuthMiddleware::class
]);

$router->dispatch();
