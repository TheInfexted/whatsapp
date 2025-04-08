<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'HomeControl::index');

// Auth routes
$routes->post('login', 'Auth::login');
$routes->post('register', 'Auth::register');
$routes->get('logout', 'Auth::logout');

// Newsletter route
$routes->post('subscribe', 'Newsletter::subscribe');
