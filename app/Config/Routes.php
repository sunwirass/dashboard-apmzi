<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Pages::index');
$routes->get('/apm', 'ApmController::index');
$routes->get('/zi', 'ZIController::index');
$routes->get('/sk', 'Pages::underConstruction');

// APM
$routes->get('/apm/(:segment)', 'ApmController::indikatorByKriteria/$1');
$routes->get('/apm/(:segment)/(:segment)', 'ApmController::itemByIndikator/$1/$2');

// ZI
$routes->get('/zi/(:segment)', 'ZIController::pengungkitByArea/$1');
$routes->get('/zi/(:segment)/(:segment)', 'ZIController::itemByAreaPengungkit/$1/$2');

//Handling Error
$routes->get('/error', 'Pages::underConstruction');
