<?php 
namespace Model;

class Customer extends ActiveRecord {
    //DATA BASE
    protected static $table = 'customers';
    protected static $columnsDB = ['id', 'name', 'surname', 'email','phone', 'description', 'confirmed', 'reservation_id', 'token'];

    public $id;
    public $name;
    public $surname;
    public $email;
    public $phone;
    public $description;
    public $confirmed;
    public $reservation_id;
    public $token;

    public function __construct($args=[]) {
        $this->id = $args['id'] ?? null;
        $this->name = $args['name'] ?? '';
        $this->surname = $args['surname'] ?? '';
        $this->email = $args['email'] ?? '';
        $this->phone = $args['phone'] ?? '';
        $this->description = $args['description'] ?? '';
        $this->confirmed = $args['confirmed'] ?? '0';
        $this->reservation_id = $args['reservation_id'] ?? '';
        $this->token = $args['token'] ?? '';
    }

    public function validateNewCustomer() {
        if(!$this->name) {
            self::$alerts['error'] [] = 'The Name is obligatory';
        }
        if(!$this->surname) {
            self::$alerts['error'] [] = 'The Surname is obligatory';
        }
        if(!$this->email) {
            self::$alerts['error'] [] = 'The email is obligatory';
        }
        if(!$this->phone) {
            self::$alerts['error'] [] = 'The phone is obligatory';
        }
        return self::$alerts;
    }
    public function createToken() {
        $this->token = uniqid();
    }
    
}