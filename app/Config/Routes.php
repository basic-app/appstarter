<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');
$routes->get('admin', '\BasicApp\Admin\Controllers\AdminSettingsController::index');
$routes->get('admin/credits', static function () {
    return view('admin/credits');
});
$routes->get('admin/support', static function () {
    return view('admin/support');
});
