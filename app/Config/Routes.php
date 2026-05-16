<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/pontos', 'Home::pontos');

$routes->get('/indicar-ponto', 'Home::indicar');

$routes->get('/ponto',         'Ponto::index');
$routes->post('/ponto/salvar', 'Ponto::salvar');

// Auth
$routes->get('/admin/login',  'Auth::login');
$routes->post('/admin/login', 'Auth::autenticar');
$routes->get('/admin/logout', 'Auth::logout');

// Painel admin
$routes->get('/admin',                'Admin::index');
$routes->get('/admin/editar/(:num)',  'Admin::editar/$1');
$routes->post('/admin/atualizar/(:num)', 'Admin::atualizar/$1');
$routes->get('/admin/aprovar/(:num)', 'Admin::aprovar/$1');