<?php

namespace Model;

class User extends ActiveRecord {
    // Data Base
    protected static $table = 'users';
    protected static $columnsDB = ['id', 'name', 'email', 'phone', 'admin', 'password', 'token', 'confirmed', 'surname'];

    // Alerts
    public static $alerts = [];

    public $id;
    public $name;
    public $email;
    public $phone;
    public $admin;
    public $password;
    public $token;
    public $confirmed;
    public $surname;

    public function __construct($args = []) {
        $this->id = $args['id'] ?? null;
        $this->name = $args['name'] ?? '';
        $this->email = $args['email'] ?? '';
        $this->phone = $args['phone'] ?? '';
        $this->admin = $args['admin'] ?? '0';
        $this->password = $args['password'] ?? '';
        $this->token = $args['token'] ?? '';
        $this->confirmed = $args['confirmed'] ?? '0';
        $this->surname = $args['surname'] ?? '';
    }

    public function validateNewUser() {
        if(!$this->name) {
            self::$alerts['error'][] = 'Username is required'; 
        }
        if(!$this->surname) {
            self::$alerts['error'][] = 'Surname is required'; 
        }
        if(!$this->email) {
            self::$alerts['error'][] = 'email is required'; 
        }
        if(!$this->phone) {
            self::$alerts['error'][] = 'phone is required'; 
        }
        if(!$this->password) {
            self::$alerts['error'][] = 'password is required'; 
        } else {
            if(strlen($this->password) < 6) {
                self::$alerts['error'][] = 'password needs at least 6 characters'; 
            }
        }
        
        
        return self::$alerts;
    }

    // Prov if the user already exists
    public function existUser() {
        $query = " SELECT * FROM " . self::$table . " WHERE email = '" . $this->email . "' LIMIT 1";
        $result = self::$db->query($query);

        if($result->num_rows) {
            self::$alerts['error'][] = 'The user is añready registred';
        }
        return $result;
        //debug($result);
    }
    public function hashPassword() {
        $this->password = password_hash($this->password, PASSWORD_BCRYPT);
    }
    public function createToken() {
        $this->token = uniqid();
    }
}