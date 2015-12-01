<?php

require_once '9.2.1.inheritance-exercise.php';

class Square extends Rectangle
{
    public function __construct($height)
    {
       parent::__construct($height, $height);
    }

    public function area()
    {
        return $this->height * $this->height;
    }

}













class Superhero extends Person
{
    public $pseudonym;
    public $capeColor;

    public function __construct($firstName, $lastName, $pseudonym)
    {
        parent::__construct($firstName, $lastName);
        $this->pseudonym = $pseudonym;
    }

    public function fullName()
    {
        return $this->pseudonym;
    }

    public function alterEgo()
    {
        return $this->firstName . ' ' . $this->lastName;
    }

    public function hasCape()
    {
        return !empty($this->capeColor);
    }
}

$superman = new Superhero('Clark', 'Kent', 'Superman');
