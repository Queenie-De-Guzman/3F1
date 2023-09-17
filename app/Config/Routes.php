<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/index', 'Home::index');
$routes->get('/test', 'Home::test');
$routes->get('/main', 'MainController::index');
$routes->post('/save', 'MainController::save');
$routes->get('/delete/(:any)', 'MainController::delete/$1/$2/$');
$routes->get('/edit/(:any)', 'MainController::edit/$1/$2/$');