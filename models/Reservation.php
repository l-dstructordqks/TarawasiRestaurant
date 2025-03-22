<?php
namespace Model;

class Reservation extends ActiveRecord {
    // DATA BASE
    public static $table = 'reservations';
    public static $columnsDB = ['id', 'date', 'diners', 'reserved', 'confirmed', 'token', 'customerId'];

    // Alerts
    public static $alerts = [];

    public $id;
    public $date;
    public $diners;
    public $reserved;
    public $confirmed;
    public $token;
    public $customerId;

    public function __construct($args=[]) {
        $this->id = $args['id'] ?? null;
        $this->date = $args['date'] ?? '';
        $this->diners = $args['diners'] ?? '';
        $this->reserved = $args['reserved'] ?? '';
        $this->confirmed = $args['confirmed'] ?? '';
        $this->token = $args['token'] ?? '';
        $this->customerId = $args['customerId'] ?? '';
    }
    public function createToken() {
        $this->token = uniqid();
    }

    public function validateNewReservation() {
        if(!$this->date) {
            self::$alerts['error'][] = 'Select a date for your reservation';
        }
        if(!$this->diners) {
            self::$alerts['error'][] = 'To continue with the reservation, please select at least one diner';
        }
        return self::$alerts;
    }
    /*public function dateReservations() {
        $query = "SELECT ${column} FROM " . static::$table;
        $result = self::$db->query($query);
        $dateReservations = $result->fetch_array();
        return $dateReservations;
        
    }*/
}