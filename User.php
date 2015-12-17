<?php

require_once 'Model.php';

class User extends Model
{
    protected static $table = 'users';

    protected static function findUserByUsername($username)
    {
        // Get connection to the database
        self::dbConnect();

        // @TODO: Create select statement using prepared statements
        $query = "SELECT * FROM static::$table where username = :username";
        $stmt = self::$dbc->prepare($query);
        $stmt->bindValue(':username', $username, PDO::PARAM_STR);
        $stmt->execute();

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
}
