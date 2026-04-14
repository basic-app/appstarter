<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//$routes->get('/', 'Home::index');

$routes->add('/', '\BasicApp\Site\Controllers\Home::index');
$routes->add('admin', '\BasicApp\Page\Controllers\Admin\Dashboard::index');