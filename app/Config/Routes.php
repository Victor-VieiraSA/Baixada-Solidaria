<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/pontos', 'Home::pontos');

$routes->get('/indicar-ponto', 'Home::indicar');
