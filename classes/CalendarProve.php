<?php
namespace Classes;
use benhall14\phpCalendar\Calendar;

class CalendarProve
{   
    public $date;
	public $reservation;

	public function __construct($date, $reservation)
	{
		$this->date = $dateReservation;
		$this->reservation = $reservation;
	}

	public function displayReservations($date, $reservation, $class="") {
		$calendar = new Calendar;

		$class = '';
		if($reservation = 40) {
			$class = "reserved";
		}

		//adding event
		//foreach($array)
		$dateReservations = array();
		$dateReservations[] = array(
			'start' => $date,
			'end' => $date,
			'diners' => $diners,
			'classes' => $class,
		);

		$calendar->addEvents($events);
	}

    
    /*
    
    public function generateCalendar($date)
    {
        $calendar = new Calendar;

        $calendar->addEvent(
            '2025-06-09',
            '2025-06-09',
            'example event',
            true
        );

        $calendar->useMondayStartingDate();

        return $calendar->draw($date);
    }

    public function addReservationCalendar($tart, $end, $summary)
    {
        $calendar = new Calendar;
        $calendar->addEvent($start, $end, $summary, true);

        return [
            'start' => $start,
            'end' => $end,
            'summary' => $summary
        ]; 
    }*/
}
/*
//require 'vendor/autoload.php';
namespace Classes;

use benhall14\phpCalendar\Calendar as Calendar;

class Caledar {
	public $date;
	public $reservation;

	public function __construct($date, $reservation)
	{
		$this->date = $date;
		$this->reservation = $reservation;
	}

	public function displayReservations($date, $reservation, $class="") {
		$calendar = new Calendar

		//$class = '';
		if($reservation = 40) {
			$class = "reserved";
		}

		//adding event
		//foreach($array)
		$dateReservations = array();
		$dateReservations[] = array(
			'start' => $date,
			'end' => $date,
			'diners' => $diners,
			'classes' => $class,
		);

		$calendar->addEvents($events);
	}
}
//$calendar = new Calendar();
//$calendar->addTableClasses('class-1 class-2 class-3');

echo $calendar->display(array(date('Y-m-d')));  // Muestra el calendario mensual


*/
?>;