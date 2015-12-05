<?php

class Input
{
    // checks if an input is empty string or not
    public static function setAndNotEmpty($key)
    {
        if(isset($_REQUEST[$key]) && $_REQUEST[$key] != '') {
            return true;
        }
    }

    /**
     * @param $key as a string
     * @return boolean
     */
    public static function has($key)
    {
        if(isset($_REQUEST[$key])) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * @return value at $_SESSION[$key] if set, else return null
     */
    public static function get($key)
    {
        if(isset($_REQUEST[$key])) {
            return $_REQUEST[$key];
        } else {
            return null;
        }
    }
}
