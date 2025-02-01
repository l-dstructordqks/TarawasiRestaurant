<?php
namespace Model;

class Reservation extends ActiveRecord {
    // DATA BASE
    public static $table = 'reservations';
    public static $columnsDB = ['id', 'people', 'date', 'service'];

    public $id;
    public $people;
    public $date;
    public $service;

    public function __construct($args=[]) {
        $this->id = $args['id'] ?? null;
        $this->people = $args['people'] ?? 1;
        $this->date = $args['date'] ?? '';
        $this->service = $args['service'] ?? '';
    }
}