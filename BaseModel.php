<?php

require_once 'Input.php';
require_once 'utils.php';

class BaseModel {

    protected static $dbc;
    protected static $table;
    protected static $errors = [];

    // $attributes holds unassigned properties for use by __get and __set magic methods.
    public $attributes;

    // holds the columns belonging to the instance's table.
    // public static $columns;

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
        // If the static property $dbc has not been set, then assign it.
        if (!self::$dbc)
        {
            self::$dbc = new PDO(
                'mysql:host='.DB_HOST.';
                dbname='.DB_NAME,
                DB_USER,
                DB_PASS
                );

            // Tell PDO to throw exceptions on error
            self::$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
    }

    /*
     * Get a value from attributes based on name
     */
    public function __get($name)
    {
        if (array_key_exists($name, $this->attributes)) {
            return $this->attributes[$name];
        }

        return null;
    }

    /*
     * Set a new attribute for the object
     */
    public function __set($name, $value)
    {
        // Set the $name key to hold $value in $attributes
        $this->attributes[$name] = $value;
    }

    /*
     * Persist the object to the database
     */
    public function save()
    {
        // @TODO: Perform the proper action - if the `id` is set, this is an update, if not it is a insert

        if(!empty($this->attributes['id'])) {
            $this->update();
        } else {
            $this->insert();
        }
    }

    protected function insert()
    {

        $table = static::$table;

        $stmt = self::$dbc->query("SELECT * FROM $table");
        $columns = array_keys($stmt->fetch(PDO::FETCH_ASSOC));

        $query = "INSERT INTO $table (";

        // foreach($columns as $column) {
        //     $query .= "{$column},";
        // }
        // chop of the comma

        // $query .= ') VALUES

        // $query .= (first_name, last_name, username, password)
        //             VALUES (':first_name', ':last_name', ':username', ':password');";

        // $stmt = self::$dbc->prepare($query);
        // $stmt->bindValue(':first_name', $this->first_name,  PDO::PARAM_STR);
        // $stmt->bindValue(':last_name',  $this->last_name,   PDO::PARAM_STR);
        // $stmt->bindValue(':username',   $this->username,    PDO::PARAM_STR);
        // $stmt->bindValue(':password',   $this->password,    PDO::PARAM_STR);
        // $stmt->execute();

        // @TODO: After insert, add the id back to the attributes array so the object can properly reflect the id

    }

    protected function update()
    {
        $table = static::$table;

        // @TODO: Ensure that update is properly handled with the id key
        $query = "UPDATE $table SET
                    first_name = :first_name,
                    last_name = :last_name,
                    email = :email,
                    username = :username,
                    password = :password
                    WHERE id = :id";

        // @TODO: Use prepared statements to ensure data security
        $stmt = self::$dbc->prepare($query);
        $stmt->bindValue(':first_name', $this->first_name,  PDO::PARAM_STR);
        $stmt->bindValue(':last_name',  $this->last_name,   PDO::PARAM_STR);
        $stmt->bindValue(':username',   $this->username,    PDO::PARAM_STR);
        $stmt->bindValue(':email',      $this->email,       PDO::PARAM_STR);
        $stmt->bindValue(':password',   $this->password,    PDO::PARAM_STR);
        $stmt->bindValue(':id',         $this->id,          PDO::PARAM_INT);
        $stmt->execute();
    }



    /*
     * Find a record based on an id
     */
    public static function find($id)
    {
        // Get connection to the database
        self::dbConnect();

        $table = static::$table;

        // @TODO: Create select statement using prepared statements
        $query = "SELECT * from $table where id = :id";
        $stmt = self::$dbc->prepare($query);
        $stmt->bindValue(':id', $id, PDO::PARAM_STR);
        $stmt->execute();

        // @TODO: Store the resultset in a variable named $result
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

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

        $table = static::$table;

        $result = self::$dbc->query("SELECT * FROM $table")->fetchAll(PDO::FETCH_UNIQUE | PDO::FETCH_ASSOC);

        $instance = null;
        if ($result)
        {
            $instance = new static;
            $instance->attributes = $result;
        }
        return $instance;
    }

    public function delete()
    {
        $table = static::$table;

        $id = $this->attributes['id'];

        $query = "DELETE FROM $table WHERE id = :id";
        $stmt = self::$dbc->prepare($query);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

    }

    public static function getColumns()
    {
        // Get connection to the database
        self::dbConnect();

        $table = static::$table;

        $columns = array_keys(self::$dbc->query("SELECT * from $table")->fetch(PDO::FETCH_ASSOC));

        return $columns;
    }
}
