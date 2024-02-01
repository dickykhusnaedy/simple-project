<?php

use App\Controllers\Admin\Dashboard;
use App\Controllers\Auth;
use App\Controllers\Home;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', [Auth::class, 'login']);
$routes->get('auth/register', [Auth::class, 'register']);

$routes->get('/admin', [Dashboard::class, 'index']);
