<?php
namespace Model;
class ActiveRecord {

    // DATABASE
    protected static $db;
    protected static $table = '';
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
    public static function getAlerts() {
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
            $array[] = static::createObject($register);
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


    // Sincronize Db with memory's Objects
    public function sincronize($args=[]) {
        foreach($args as $key => $value) {
            if(property_exists($this, $key) && !is_null($value)) {
                $this->$key = $value;
            }
        }
    }

    

    // Identify and link the DB attributes
    public function attributes() {
        $attributes = [];
        //debug($this);
        foreach(static::$columnsDB as $column) {
            
            if($column === 'id') continue;
            $attributes[$column] = $this->$column;//line 85
        }
        //debug($attributes);
        return $attributes;
    }

    //Sanitize the dta before saving in the DB
    public function sanitizeAttributes() {
        $attributes = $this->attributes();
        //debug($attributes);
        $sanitized = [];
        foreach($attributes as $key => $value) {
            $sanitized[$key] = self::$db->escape_string($value);
        }
        //debug($this);
        return $sanitized;
    }

    //LOOKING FOR a register by an attribute
    public static function where($column, $value) {
        $query = "SELECT * FROM " . static::$table ." WHERE ${column} = '${value}'";
        //debug($query);
        $result = self::consultSQL($query);
        return array_shift($result);
    }

    //CRUD
    public function save() {
        $result = '';
        if(!is_null($this->id)) {
            //UPDATE
            $result = $this->update();
        } else {
            //CREATE
            $result = $this->create();
        }
        return $result;
    }

    // CREATE a new register
    public function create() {
        //Sanitize the data
        $attributes = $this->sanitizeAttributes();
        //debug($attributes);
        // Insert into the DB
        $query = " INSERT INTO " . static::$table . " ( ";
        $query .= join(', ', array_keys($attributes));
        $query .= " ) VALUES (' ";
        $query .= join("', '", array_values($attributes));
        $query .= " ') ";

        //debug($query);

        // console result
        $result = self::$db->query($query);
        return [
            'result' => $result,
            'id' => self::$db->insert_id
        ];
    }

    //UPDATE a register
    public function update() {
        // Sanitize the data
        $attributes = $this->sanitizeAttributes();

        //Iterate to adding each field into the DB
        $values = [];
        foreach($attributes as $key => $value) {
            $values[] = "{$key}='{$value}'";
        }

        // SQL Consult 
        $query = "UPDATE " . static::$table ." SET ";
        $query .= join(', ', $values);
        $query .= " WHERE id = '" . self::$db->escape_string($this->id) . "' ";
        $query .= " LIMIT 1 ";

        // Update DB
        $result = self::$db->query($query);
        return $result;
    }

    // get all reggisters
    public static function all() {
        $query = "SELECT * FROM " . static::$table;
        //debug($query);
        $result = self::consultSQL($query);
        return $result;
    }
    /* GET SPECIFIC COLUMNS
    public static function all() {
        $query = "SELECT * FROM " . static::$table;
        $result = self::consultSQL($query);
        return $result;
    }*/

    public static function whereColumn($column1, $column2) {
        $query = "SELECT ${column1}, ${column2} FROM " . static::$table;
        //debug($query);
        $result = self::consultSQL($query);
        //debug($result);
        //$dateReservations = $result->fetch_array();
        return $result;
    }

}