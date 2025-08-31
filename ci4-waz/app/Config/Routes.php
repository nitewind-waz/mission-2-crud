<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/listmahasiswa', 'Pages::listMahasiswaDB');
$routes->get('/list', 'Pages::paramahasiswa');
$routes->get('/table', 'Pages::tabelMahasiswa');
$routes->get('/detail/(:segment)', 'Pages::detailMahasiswa/$1');
$routes->get('/edit/(:segment)', 'Pages::editMahasiswa/$1');
$routes->post('/update/(:segment)', 'Pages::updateMahasiswa/$1');
$routes->get('/delete/(:segment)', 'Pages::deleteMahasiswa/$1');
$routes->get('/addMahasiswa', 'Pages::addMahasiswa');
$routes->post('/saveMahasiswa', 'Pages::saveMahasiswa');
