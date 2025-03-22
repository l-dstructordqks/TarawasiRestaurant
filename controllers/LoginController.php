<?php

namespace Controllers;

use Classes\Email;
use Model\User;
use MVC\Router;


class LoginController {
    public static function login(Router $router) {
        
        $router->render('auth/login');

    }

    public static function logout() {
        echo "Desde Logout";
    }

    public static function forgot(Router $router) {

        $router->render('auth/forgot');
    }

    public static function recover(Router $router) {

        $router->render('auth/recover');
    }
    public static function create(Router $router) {

        $user = new User($_POST);
        $alerts = [];

        if($_SERVER['REQUEST_METHOD'] === 'POST') {

            $user->sincronize($_POST);
            $alerts = $user->validateNewUser();

            if(empty($alerts)) {
                // Veriry if user hasn't been registred
                $result = $user->existUser();

                if($result->num_rows) {
                    $alerts = User::getAlerts();
                } else {
                    // hash pasword
                    $user->hashPassword();
                    //generate an unique token
                    $user->createToken();

                    // Send email
                    $email = new Email($user->name, $user->email, $user->token);
                    $email->sendUserConfirmation();
                    //debug($email);
                    //Create the user
                    $result = $user->save();

                }
            }
            //debug($alerts);
            //debug($user);
            //echo "send the form";
            //console.log('se envio prra');
        }
        $router->render('auth/create', [
            'user' => $user,
            'alerts' => $alerts
        ]);
    }

    public static function confirm(Router $router) {
        
        $alerts = [];
        $token = s($_GET['token']);
        //debug($token);
        $user = User::where('token', $token);

        if(empty($user)) {
            User::setAlert('error', 'Invalid token');
        } else {
            $user->confirmed = "1";
            $user->token = null;
            $user->save();
            User::setAlert('success', 'account verified correctly');
        }
        //Display alerts
        $alerts = User::getAlerts();

        $router->render('auth/confirm', [
            'alerts' => $alerts
        ]);
    }
}












