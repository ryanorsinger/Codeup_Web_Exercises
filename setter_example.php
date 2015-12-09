<?php

class Datastore
{
    public $tableName;
    protected $attributes = [];

    public function __set($name, $value)
    {
        // Set the $name key to hold $value in $attributes
        $this->attributes[$name] = $value;
    }

    public function __get($name)
    {
        if(array_key_exists($name, $this->attributes)) {
            return $this->attributes[$name];
        }

        return null;
    }
}

// submitted form
if(!empty($_POST)) {
    $data = new Datastore();
    $data->tableName = 'users';

    foreach($_POST as $key => $value) {
        $data->$key = $value;
    }
}

?>
<html>
<body>
    <form action="#" method="POST">
        <input name="full_name" placeholder="Input your full name">
        <input name="social_security" placeholder="Enter your social">
        <input name="dragon" placeholder="Enter the dragon, what kinda dragon">
    </form>
</body>
