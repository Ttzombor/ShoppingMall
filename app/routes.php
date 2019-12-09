<?php

use Core\Routing\Router;

/**
 * Liste des routes
 */

$router = Router::getInstance();

$router->add('home', 'Home@show');
$router->add('', 'Article@index');
