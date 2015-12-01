<?php

class Person
{
    public $handle;
    public $filename;
    public $firstName;
    public $lastName;

    public function __construct($prefix = 'log')
    {
        $this->firstName = $first;
        $this->lastName = $last;
        $this->sayHello();
    }

    public function sayHello()
    {
        return 'Hi, ' . $this->firstName . '!';
    }
}

$pinnochio = new Person('Pinnochio', 'Calvini');
// 'Hi, Pinnochio!'
