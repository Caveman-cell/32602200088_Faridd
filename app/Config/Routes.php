<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/', 'HomeController::index');
$routes->get('/profile', 'ProfileController::index');
$routes->get('/experience', 'ExperienceController::index');
