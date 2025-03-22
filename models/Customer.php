<?php 
namespace Model;

class Customer extends ActiveRecord {
    //DATA BASE
    protected static $table = 'customers';
    protected static $columnsDB = ['id', 'name', 'email','phone', 'extrainfo'];

    //ALERTS
    public static $alerts = [];

    public $id;
    public $name;
    public $email;
    public $phone;
    public $extrainfo;

    public function __construct($args=[]) {
        $this->id = $args['id'] ?? null;
        $this->name = $args['name'] ?? '';
        $this->email = $args['email'] ?? '';
        $this->phone = $args['phone'] ?? '';
        $this->extrainfo = $args['extrainfo'] ?? '';
    }

    public function validateNewCustomer() {
        if(!$this->name) {
            self::$alerts['error'] [] = 'The Name is required';
        }
        if(!$this->email) {
            self::$alerts['error'] [] = 'The email is required';
        }
        if(!$this->phone) {
            self::$alerts['error'] [] = 'The phone is required';
        }
        return self::$alerts;
    }
    public function createToken() {
        $this->token = uniqid();
    }
    
}