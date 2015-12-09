<?php

class Model
{

    protected static $dbc;
    protected static $table;

    public $attributes = array();

    /*
     * Constructor
     */
    public function __construct()
    {
        self::dbConnect();
    }

    /*
     * Connect to the DB
     */
    private static function dbConnect()
    {
        if (!self::$dbc)
        {
            require_once 'logins.php';
            require_once 'db_connect.php';

            self::$dbc = $dbc;
        }
    }

    /*
     * Get a value from attributes based on name
     */
    public function __get($name)
    {
        // @TODO: Return the value from attributes with a matching $name, if it exists
    }

    /*
     * Set a new attribute for the object
     */
    public function __set($name, $value)
    {
        // @TODO: Store name/value pair in attributes array
    }

    /*
     * Persist the object to the database
     */
    public function save()
    {
        if(!empty($this->attributes)) {
            if(isset($this->attributes['id']) {
                $this->update($this->attributes['id']);
            } else {
                $this->insert();
            }
        }
    }

    protected function insert() {}

    protected function update($id) {}

    /*
     * Find a record based on an id
     */
    public static function find($id)
    {
        // Get connection to the database
        self::dbConnect();

        // @TODO: Create select statement using prepared statements
        $query = "SELECT * FROM static::$table where id = :id";
        $stmt = self::$dbc->query($query);

        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        // @TODO: Store the resultset in a variable named $result

        // The following code will set the attributes on the calling object based on the result variable's contents

        $instance = null;
        if ($result)
        {
            $instance = new static;
            $instance->attributes = $result;
        }
        return $instance;
    }

    /*
     * Find all records in a table
     */
    public static function all()
    {
        self::dbConnect();
        $query = "SELECT * FROM static::$table";

        // @TODO: Learning from the previous method, return all the matching records
    }

}
