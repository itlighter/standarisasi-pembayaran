<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'LoginController::index');

$routes->get('login', 'LoginController::index');
$routes->post('login', 'LoginController::login');

$routes->get('dashboard', 'Dashboard::index');
$routes->get('dashboard/petunjuk/sewa', 'Dashboard::petunjukSewa');
$routes->get('dashboard/sewa', 'Dashboard::sewa');
$routes->post('dashboard/sewa', 'Dashboard::sewaQuestion');

$routes->get('logout', 'Logout::index');
