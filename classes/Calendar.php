<?php
//require 'vendor/autoload.php';
namespace Classes;

use benhall14\phpCalendar\Calendar as Calendar;

$calendar = new Calendar();
$calendar->addTableClasses('class-1 class-2 class-3');
$events = array();
    $reserved = 'reserved';
    $totalPeople = 0;
    $date = [];



	$events[] = array(
		'start' => '2024-10-29',
		'end' => '2024-10-29',
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
echo $calendar->display();  // Muestra el calendario mensual

foreach ($events as $event) {
    $date[] = $event['start'];
    $totalPeople += $event['people'];
}

?>