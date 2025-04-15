<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// View routes
$routes->get('/', 'HomeController::index');
$routes->get('about', 'AboutController::index');
$routes->get('services', 'ServicesController::index');
$routes->get('services/(:num)', 'ServicesController::details/$1');
$routes->get('pricing', 'PricingController::index');
$routes->get('subscribe/(:num)', 'SubscribeController::index/$1');
$routes->get('subscribe/cancel', 'SubscribeController::cancel');
$routes->get('testimonials', 'TestimonialsController::index');
$routes->get('user/dashboard', 'UserController::dashboard');
$routes->get('user/transactions', 'UserController::transactions');
$routes->get('user/subscription/(:num)', 'UserController::subscription/$1');

// Controller logic routes
$routes->post('login', 'Auth::login');
$routes->post('register', 'Auth::register');
$routes->get('logout', 'Auth::logout');
$routes->post('subscribe/process/(:num)', 'SubscribeController::process/$1');
