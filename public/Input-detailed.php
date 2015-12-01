<?php

require_once 'Auth.php';
require_once 'Log.php';

/**
 * Input Class
 */
class Input
{

    public static function old($key)
    {
        $value = static::get($key);

        if(!empty($value)) {
            return $value;
        }
    }
    public static function getString($key, $min = 1, $max = 256)
    {
        if(!is_string($key)) {
            throw new InvalidArgumentException('Key provided to getString method must be a string.');
        }

        if(!is_numeric($min) || !is_numeric($max)) {
            throw new InvalidArgumentException('Min and Max values must be numeric.');
        }

        if(!isset($key)) {
            throw new OutOfRangeException('Key provided must not be null.');
        }

        $value = static::get($key);

        if(is_numeric($value) || !is_string($value)) {
            throw new DomainException("The value provided must be a string.");
        }

        if(strlen($value) < $min) {
            throw new LengthException("The string length of the value provided must be longer than the min.");
        }

        if (strlen($value) > $max) {
            // throw new
        }

        return $value;
    }

    public static function getNumber($key, $min = 1, $max = 256)
    {
        $value = static::get($key);

        $value = (float) $value;

        if(!is_float($value) || $value == 0) {
            throw new Exception("The value for $key is not a valid number.");
        }


        return $value;
    }

    public static function getDate($key)
    {
        $value = static::get($key);

        $date = date_create($value);

        if(!$date) {
            throw new Exception("The value for $key is not a proper date.");
        }

        return $date->format('Y-m-d');
    }

    /**
     * Check if a given value was passed in the request
     *
     * @param string $key index to look for in request
     * @return boolean whether value exists in $_POST or $_GET
     */
    public static function has($key)
    {
        return isset($_REQUEST[$key]) ? true : false;
    }

    /**
     * Get a requested value from either $_POST or $_GET
     *
     * @param string $key index to look for in index
     * @param mixed $default default value to return if key not found
     * @return mixed value passed in request
     */
    public static function get($key, $default = null)
    {
        return self::has($key) ? $_REQUEST[$key] : $default;
    }

    ///////////////////////////////////////////////////////////////////////////
    //                      DO NOT EDIT ANYTHING BELOW!!                     //
    // The Input class should not ever be instantiated, so we prevent the    //
    // constructor method from being called. We will be covering private     //
    // later in the curriculum.                                              //
    ///////////////////////////////////////////////////////////////////////////
    private function __construct() {}
}
