<?php

session_start();

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/src/helpers.php'; // 
require_once __DIR__ . '/src/config.php';

use App\MiniRouter;
use App\Middlewares\AuthMiddleware;
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__ . '/');
$dotenv->load();


$router = new MiniRouter(BASE_PATH);


// Rutas de Web
$router->add('GET', '/', 'HomeController@index', [AuthMiddleware::class]);
$router->add('GET', '/user/{id}', 'UserController@show', [AuthMiddleware::class]);
$router->add('GET', '/login', 'AuthController@showLoginForm');
$router->add('POST', '/login', 'AuthController@login');
$router->add('GET', '/logout', 'AuthController@logout');


// Rutas de Api
$router->add('GET', '/api/user/{id}', 'UserController@getById');

$router->dispatch();
