<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');

// ini router authcontroller
$routes->get('/', 'AuthController::login');
$routes->post('login', 'AuthController::loginPost');
$routes->get('logout', 'AuthController::logout');


// ini router dashboardcontroller
// $routes->get('admin', 'DashboardController::admin'); // pembetulan ini typo tadi dibagian nama controllernya
// $routes->get('user', 'DashboardController::user');

$routes->get('admin', 'DashboardController::admin', ['filter' => 'auth']);
$routes->get('kakak', 'DashboardController::kakak', ['filter' => 'auth']);
$routes->get('adik', 'DashboardController::adik',   ['filter' => 'auth']);

