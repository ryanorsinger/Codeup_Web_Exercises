<?php

class BakeryItem
{
    public $nameOfBakery;
}

// Classes
class Pastry extends BakeryItem
{

    protected $secretIngredients = ['flour', 'sugar', 'eggs'];
    private $whereWeHidTheBodies;
    public $typeOfPastry;

    public function __construct($typeOfPastry)
    {
        $this->typeOfPastry = $typeOfPastry;
        $this->bake();
    }

    protected function bake()
    {
        // accesses the oven API
    }

    public function serve()
    {
        $this->washHands();
        $this->getCleanServingDish();
        return $pastries;
    }

    protected function washHands()
    {

    }

    protected function getCleanServingDish()
    {

    }
}

// child class of Pastry class
class Doughnut extends Pastry
{
    public $typeOfPastry = 'doughnut';


    public function glaze($glazeFlavor)
    {
        // add glaze to top of doughnut
    }
}

require_once 'helper_functions.php';

class Person
{
    protected $firstName;
    protected $lastName;

    public function __construct($firstName, $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName  = $lastName;
    }

    public function fullName()
    {
        return $this->firstName . ' ' . $this->lastName;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }
}

class Superhero extends Person
{

    public $pseudonym;
    public $capeColor;

    public function alterEgo()
    {
        return 'Top Secret Alternate Ego: ' . $this->fullName();
    }

    public function hasCape()
    {
        return !empty($this->capeColor);
}
