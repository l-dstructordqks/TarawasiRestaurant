<?php

namespace Controllers;

use Model\Reservation;
use Classes\Calendar;

class APIController {
    public static function index() {
        $reservations = Reservation::all();
        //$caledar = 
        $date = 'date';
        $diners = 'diners';
        $gaaa = [];
        $dateReservations = Reservation::whereColumn($date, $diners);
        //debug($dateReservations);
        $dateTotal = [];
        foreach($dateReservations as $dateReservation) {
            //debug($prueba->diners);
            //$dateTotal->date = $dateReservation->date
            //echo $dateTotal->date;
            //echo "diners: " . $dateReservation->diners . "y date: " . $dateReservation->date;
            if(isset($dateTotal[$dateReservation->date])) {
                //$dateTotal[$dateReservation->date][0] += $dateReservation->diners;
                $dateTotal[$dateReservation->date][0] += $dateReservation->diners;
    
            } else {
                $dateTotal[$dateReservation->date] = [$dateReservation->diners];
            }
            //echo "diners: " . $dateTotal[$dateReservation];
            //echo $date
            //echo $dateTotal;
        }
        $reservationsJson = json_encode($dateTotal);
        echo $reservationsJson;

        /*foreach( $dateTotal as $date => $diners) {
            $extracted_date = $date;
            $extracted_diners = $diners[0];
            echo "Fecha: $extracted_date, Comensales: $extracted_diners\n";
        }*/
        
        //debug($dateTotal);
        //$dateTotal = [];
        
        //echo $dateTotal[$reservation->date][0];
    // Convertir el resultado a JSON
    
    //$reservationsJson = json_encode($dateTotal);
    
    //debug($dateSums);
    // Devolver el JSON
    //echo $reservationsJson;
    }

}