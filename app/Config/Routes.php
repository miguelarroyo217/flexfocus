<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'HomeController::index');
$routes->get('/inicio', 'HomeController::home');
$routes->get('/servicios', 'ServiciosController::index');
$routes->get('/reservas', 'ReservaController::index');
$routes->post('/reservar', 'ReservaController::reservar');
$routes->get('/about', 'PagesController::about');
$routes->get('/menu', 'PagesController::menu');
$routes->get('/contact', 'PagesController::contact');