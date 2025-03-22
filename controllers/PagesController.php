<?php
namespace Controllers;

use Classes\Email;
use Model\Customer;
use Model\Reservation;
use Classes\CalendarProve;

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

        $customer = new Customer($_POST);
        $reservation = new reservation($_POST);
        $alerts = [];
        
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            if(isset($_POST['prefix']) && isset($_POST['phone'])) {
                $prefix = $_POST['prefix'];
                $phone = $_POST['phone'];

                $fullPhone = $prefix . $phone;
                $_POST['phone'] = $fullPhone;
                //$customer->phone = $fullPhone;
            }
            $customer->sincronize($_POST);
            $reservation->sincronize($_POST);
            $alertsReservation = $reservation->validateNewReservation();
            //debug($alertsReservation);
            //$alerts = array_merge($alertsCustomer, $alertsReservation);
            if(empty($alertsReservation)) {
                $alerts = $customer->validateNewCustomer();
            } else {
                $alerts = $alertsReservation;
            }

            //$alerts["error"] = array_merge($alertsCustomer["error"], $alertsReservation["error"]);

            //debug($alerts);
            
            if(empty($alerts)) {
                //debug('puta');
                $customer->createToken();
                $email = new Email($customer->name, $customer->email, $customer->token);
                $email->sendReservationConfirmation($reservation->diners, $reservation->date);
                //debug($email);
                    //Create the user
                //$result = $user->save();
            }
            //debug($reservation);
            /*
            $customer->sincronize($_POST);
            $alerts = $customer->validateNewCustomer();
            //debug($_POST);
            //debug($customer);
            if(empty($alerts)) {
                $reservation->createToken();

                // Send email
                $email = new Email($customer->name, $customer->email, $reservation->token);
                $email->sendReservationConfirmation($reservation);

                //$result = $customer->save();

            }*/
        }
        //$reservation = new Reservation;
        
        $router->render('pages/reservation', [
            'titulo' => 'Reservation',
            'customer' => $customer,
            'reservation' => $reservation,
            'alerts' => $alerts
        ]);
    }

    public static function confirmreservation(Router $router) {
        $router->render('pages/confirm-reservation', [
            'titulo' => 'Confirm reservation'
        ]);
    }
    /*public static function calendar(Router $router) {
        $model = new CalendarProve();

        
        $event = $model->addReservationCalendar('2025-03-10', '2025-03-10', 'vacalola');

        // Devolver una respuesta en formato JSON (útil para API)
        $calendarHtml = $model->generateCalendar($date);
        //echo json_encode($event);


        $router->render('pages/calendar', [
            //'titulo' => 'Reservation',
            'calendarHtml' => $calendarHtml,
            //'alerts' => $alerts
        ]);
    }*/
}