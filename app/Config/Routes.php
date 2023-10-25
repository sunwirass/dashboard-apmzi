<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Pages::index');
$routes->get('/apm', 'ApmController::index');
$routes->get('/zi', 'Pages::mainZI');

// APM
$routes->get('/apm/(:segment)', 'ApmController::kriteria/$1');
$routes->get('/apm/(:segment)/(:segment)', 'ApmController::kriteria/$1/$2');

// ZI
$routes->get('/zi', 'Pages::pagezi');
