<?php

require_once __DIR__ . '/../includes/app.php';

use MVC\Router;
use Controllers\PagesController;
use Controllers\LoginController;
use Controllers\AdminController;
use Controllers\APIController;

$router = new Router();

//auth Area
$router->get('/login', [LoginController::class, 'login']);
$router->post('/login', [LoginController::class, 'login']);
$router->get('/logout', [LoginController::class, 'logout']);
//recover password
$router->get('/forgot', [LoginController::class, 'forgot']);
$router->post('/forgot', [LoginController::class, 'forgot']);
$router->get('/recover', [LoginController::class, 'recover']);
$router->post('/recover', [LoginController::class, 'recover']);
//create account
$router->get('/create-account', [LoginController::class, 'create']);
$router->post('/create-account', [LoginController::class, 'create']);
//confirm account
$router->get('/confirm-account', [LoginController::class, 'confirm']);

//Admin Area
$router->get('/admin', [AdminController::class, 'index']);
$router->get('/admin/reservations', [AdminController::class, 'index']);


//RESERVATION API
$router->get('/api/reservations', [APIController::class, 'index']);
//Public Area
$router->get('/', [PagesController::class, 'index']);
$router->get('/reservation', [PagesController::class, 'reservation']);
$router->post('/reservation', [PagesController::class, 'reservation']);
$router->get('/confirm-reservation', [PagesController::class, 'confirmreservation']);
//$router->get('/calendar', [PagesController::class, 'calendar']);

$router->get('/menu', [PagesController::class, 'menu']);
$router->get('/experiences', [PagesController::class, 'experiences']);
$router->get('/faqs', [PagesController::class, 'faqs']);
$router->get('/contact', [PagesController::class, 'contact']);

$router->checkRoutes();