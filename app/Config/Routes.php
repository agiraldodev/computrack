<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/clientes', 'ClienteController::listado');

$routes->post('/clientes/delete/(:num)', 'ClienteController::delete/$1');

$routes->get('/clientes/nuevo', 'ClienteController::crear');

$routes->post('clientes/guardar', 'ClienteController::guardar');