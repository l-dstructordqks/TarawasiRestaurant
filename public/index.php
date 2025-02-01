<?php

require_once __DIR__ . '/../includes/app.php';

use MVC\Router;
use Controllers\PagesController;

$router = new Router();

//Public Area
$router->get('/', [PagesController::class, 'index']);
$router->get('/reservation', [PagesController::class, 'reservation']);
$router->get('/menu', [PagesController::class, 'menu']);
$router->get('/experiences', [PagesController::class, 'experiences']);
$router->get('/faqs', [PagesController::class, 'faqs']);
$router->get('/contact', [PagesController::class, 'contact']);

$router->checkRoutes();