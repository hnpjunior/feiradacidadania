<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Feira::index');
$routes->get('inserir','Feira::inserir');
$routes->post('inserir','Feira::inserir');
$routes->get('admin','Feira::admin');
