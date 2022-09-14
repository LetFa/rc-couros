<?php

namespace App\Routes;

use CoffeeCode\Router\Router;

$router = new Router(SITE['url']);
$router->namespace("App\Controllers");

/* INICIAR AS ROTAS */
$router->group(null);
$router->get('/', 'Home:home', 'home.home');

/* Inicializa o roteamento */
$router->dispatch();