<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->group('clientes', static function ($routes) {
    $routes->get('/', 'ClienteController::listado'); // Obtener todos los clientes
    $routes->delete('delete/(:num)', 'ClienteController::delete/$1');// Borrar
    $routes->get('nuevo', 'ClienteController::crear');// Crear
    $routes->post('guardar', 'ClienteController::guardar');
    $routes->get('editar/(:num)', 'ClienteController::editar/$1');// Editar
    $routes->post('actualizar/(:num)', 'ClienteController::actualizar/$1');
    $routes->get('buscar', 'ClienteController::buscar');
});

$routes->group('dispositivos', static function ($routes) {
    $routes->get('nuevo', 'DispositivoController::crear');
});