<?php
namespace Controllers;

use Model\Customer;
use MVC\Router;

class PagesController {
    public static function index(Router $router) {
        $router->render('pages/index', [
            'titulo' => 'Inicio'
        ]);
    }
    public static function menu(Router $router) {
        $router->render('pages/menu', [
            'titulo' => 'menu'
        ]);
    }
    public static function experiences(Router $router) {
        $router->render('pages/experiences', [
            'titulo' => 'experiences'
        ]);
    }
    public static function faqs(Router $router) {
        $router->render('pages/faqs', [
            'titulo' => 'faqs'
        ]);
    }
    public static function contact(Router $router) {
        $router->render('pages/contact', [
            'titulo' => 'contact'
        ]);
    }

    public static function reservation(Router $router) {

        $alerts = [];
        //$reservation = new Reservation;
        
        $router->render('pages/reservation', [
            'titulo' => 'Reservation'
        ]);
    }
}