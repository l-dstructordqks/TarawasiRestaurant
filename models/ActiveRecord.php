<?php
namespace Model;
class ActiveRecord {

    // DATABASE
    protected static $db;
    protected static $tabla = '';
    protected static $columnsDB = [];

    // Alerts and messanges
    protected static $alertas = [];

    // Define the conection to the DB 
    public static function setDB($database) {
        self::$db = $database;
    }

    // Configure diferent alerts
    public static function setAlert($kind, $message) {
        static::$alerts[$kind][] = $message;
    }

    // Get the alerts
    public static function getAlertas() {
        return static::$alerts;
    }

    // Validation that inherit into models
    public function validate() {
        static::$alerts = [];
        return static::$alerts;
    }

    // Consult to SQL to create an object into memory
    public static function consultSQL($query) {
        // Consult to DB
        $result = self::$db->query($query);

        // Iterate the results
        $array = [];
        while($register = $result->fetch_assoc()) {
            $array[] = static::createObjet($register);
        }

        //liberate the memory
        $result->free();

        // return the results
        return $array;
    }

    // Create the object in memory that is the same to the DB
    protected static function createObject($register) {
        $object = new static;

        foreach($register as $key => $value) {
            if(property_exists( $object, $key )) {
                $object->$key = $value;
            }
        }
        return $object;
    }
    //Identificar y unir los datos antes de guardarlos
    //$result = self::$db->query($query);

}