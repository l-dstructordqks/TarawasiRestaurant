<?php
namespace Controllers;

//use Model\Customer;
use MVC\Router;

class AdminController {
    public static function index(Router $router) {
        $router->render('admin/index', [
            'titulo' => 'Inicio'
        ]);
    }

    public static function reservations(Router $router) {
        $router->render('admin/reservations', [
            'titulo' => 'Inicio'
        ]);
    }
}