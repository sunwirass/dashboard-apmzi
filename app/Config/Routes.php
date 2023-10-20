<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Pages::index');
$routes->get('/apm', 'Pages::pageapm');
$routes->get('/zi', 'Pages::pagezi');

// APM
$routes->get('/apm/kepemimpinan', 'ApmController::kepemimpinan');
$routes->get('/apm/manpro', 'ApmController::manpro');
$routes->get('/apm/renstra', 'ApmController::renstra');
$routes->get('/apm/msdm', 'ApmController::msdm');
$routes->get('/apm/kinerja', 'ApmController::kinerja');
$routes->get('/apm/kwlayanan', 'ApmController::kwlayanan');
$routes->get('/apm/dokumentasi', 'ApmController::dokumentasi');

// ZI
$routes->get('/zi', 'Pages::pagezi');
