<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Auth::index');
$routes->post('/login', 'Auth::login');
$routes->get('/logout', 'Auth::logout');
$routes->get('/peliculas', 'Peliculas::index');
$routes->get('/peliculas/crear', 'Peliculas::crear');
$routes->post('/peliculas/guardar', 'Peliculas::guardar');
$routes->get('/peliculas/editar/(:num)', 'Peliculas::editar/$1');
$routes->post('/peliculas/actualizar/(:num)', 'Peliculas::actualizar/$1');
$routes->get('/peliculas/eliminar/(:num)', 'Peliculas::eliminar/$1');
