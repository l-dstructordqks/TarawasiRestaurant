<?php
//require 'vendor/autoload.php';
namespace Classes;

use benhall14\phpCalendar\Calendar as Calendar;

$calendar = new Calendar();

/*$month = date('m');
$year = date('Y');

$days = $calendar->getMonth($month, $year);

$currentDate = new DateTime();

foreach($days as $day) {
	$dayDate = new DateTime($day['date']);

	if ($dayDate < $currentDate) {
		$day['class'] = 'reserverd';
	}
}*/
$calendar->addTableClasses('class-1 class-2 class-3');
$today = date('Y-m-d');
//debug($today);

//debug($today);

$events = array();
    $reserved = '';
    $totalPeople = 0;
    $date = [];



	$events[] = array(
		'start' => '2025-03-29',
		'end' => '2025-03-29',
		'summary' => 'Reserved',
		//'mask' => true,
        'people' => 1,
		'classes' => ['myclass', 'abc', $reserved],
        'event_box_classes' => ['event-box-1']
	);

	$events[] = array(
		'start' => '2024-10-29',
		'end' => '2024-10-29',
		'summary' => 'Christmas',
		// 'mask' => true,
        'people' => 2,
        'service' => 'first',
	);

    $events[] = array(
		'start' => '2024-10-31',
		'end' => '2024-10-31',
        'summary' => 'Hallowen',
		'classes' => ['selected'],
		// 'mask' => true,
        'people' => 2,
        'service' => 'first',
	);


	$calendar->addEvents($events);
	$vacalola = $calendar->display(['date' => date('Y-m-d')]); 

echo $vacalola; // Muestra el calendario mensual

/*foreach ($events as $event) {
    $date[] = $event['start'];
    $totalPeople += $event['people'];
}*/

?>