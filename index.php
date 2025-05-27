<?php

session_start();

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/src/helpers.php'; // 


use App\MiniRouter;
use App\Middlewares\AuthMiddleware;

$router = new MiniRouter('/customers_case');

$router->add('GET', '/', 'HomeController@index');
$router->add('GET', '/user/{id}', 'UserController@show', [
    AuthMiddleware::class
]);
$router->add('GET', '/api/user/{id}', 'UserController@getById');


$router->dispatch();
