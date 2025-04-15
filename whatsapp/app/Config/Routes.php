<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'HomeController::index');

// Auth routes
$routes->post('login', 'Auth::login');
$routes->post('register', 'Auth::register');
$routes->get('logout', 'Auth::logout');

// Service routes
$routes->get('services', 'ServicesController::index');
$routes->get('services/(:num)', 'ServicesController::details/$1');

// About route
$routes->get('about', 'AboutController::index');

// Pricing routes
$routes->get('pricing', 'PricingController::index');

// Testimonials route
$routes->get('testimonials', 'TestimonialsController::index');