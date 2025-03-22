<?php

namespace Classes;
use PHPMailer\PHPMailer\PHPMailer;

class Email {
    public $name;
    public $email;
    public $token;

    public function __construct($name, $email, $token)
    {
        $this->name = $name;
        $this->email = $email;
        $this->token = $token;
    }

    public function sendUserConfirmation() {
        //debug('gaaaaaaaaaaa');
        // Create the email object
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'sandbox.smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Port = 2525;
        $mail->Username = '9e79dd1a3cadd7';
        $mail->Password = '778181b7e9fbc4';

        $mail->setFrom('tarawasiaccount@mail.com');
        $mail->addAddress('tarawasiaccount@mail.com', 'Tarawasi.com');
        $mail->Subject = 'Confirm your account';

        // Set HTML
        $mail->isHTML(TRUE);
        $mail->CharSet = 'UTF-8';

        $content = "<html>";
        $content .= "<p><strong>Hola " . $this->name . "</strong> You have created your account in Tarawasi, please confirm it pressing the next link</p>";
        $content .= "<p>Press here: <a href='http://localhost:3008/confirm-account?token=" . $this->token . "'>Confirm Account</a> </p>";
        $content .= "<p>If you dont solicitate this account, you can ignore this message</p>";
        $content .= '</html>';

        $mail->Body = $content;

        //Send Email
        $mail->send();
    }

    public function sendReservationConfirmation($diners, $date) {
        // Looking to send emails in production? Check out our Email API/SMTP product!
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'sandbox.smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Port = 2525;
        $mail->Username = '9e79dd1a3cadd7';
        $mail->Password = '778181b7e9fbc4';

        $mail->setFrom('tarawasiaccount@mail.com');
        $mail->addAddress('tarawasiaccount@mail.com', 'Tarawasi.com');
        $mail->Subject = 'Confirm your reservation';
        

        // Set HTML
        $mail->isHTML(TRUE);
        $mail->CharSet = 'UTF-8';

        $content = "<html>";
        $content .= "<p><strong>Hi " . $this->name . "</strong> You have booked an experience at the Tarawasi restaurant, for " . $diners . " diners  on " . $date . ", please confirm your reservation pressing the next link</p>";
        $content .= "<p>Press here: <a href='http://localhost:3008/confirm-reservation?token=" . $this->token . "'>Confirm Reservation</a> </p>";
        $content .= "<p>We are going to contat you 72h before your reservation date for confirm your assitence</p>";
        $content .= "<p>If you dont solicitate this reservation, you can ignore this message</p>";
        $content .= '</html>';

        $mail->Body = $content;

        //Send Email
        $mail->send();
        //$mail->send();
    }
}