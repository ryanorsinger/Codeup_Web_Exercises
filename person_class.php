<?php

class Person
{
    public $firstName;
    public $lastName;
    public $fruit = array();

    public function roamCountryside()
    {
        $distance = mt_rand(1, 10);

        return $this->firstName . " walks {$distance} miles west.";
    }

    public function addFruit($fruit)
    {
        $this->fruit[] = $fruit;
    }
}

$tarzan = new Person();
$tarzan->addFruit('banana');

var_dump($tarzan->fruit);
