<?php

$mouse =

$monitor =

$keyboard =

$printer

$printer->format()











class DB {
    function read() {}
    function write() {}
}

class Text {
    function read() {}
    function write() {}
}

class PDF {
    function read() {

    }
    function write($value) {}
}


$input = 'something from the user';

$db = new DB();
$input = $db->read("SELECT * from USERS where user_id = $currentId");

$pdf = new PDF();
$pdf->write($input);













function readFromDataBase() {}
function writeToTheDataBase() {}


function readFromTheTestDataBase() {}
function writeToTheTestDataBase() {}

function readString() {}
function writeString() {}

function readArray() {}
function writeArray() {}

function readPDF() {}
function readDOCFile() {}

function readFromDataBase() {}
function writeToTheDataBase() {}



$validString = htmlspecialchars(strip_tags($string));


echo 5*5;
echo 5*5;
echo 5*5;
echo 5*5;
echo 5*5;
echo 5*5;
echo 5*5;

function square($num)
{
    return $square * $square;
}
echo square(5);


class Shape
{
    public $value;

    public function __construct($value)
    {
        $this->value = $value;
    }

    public function square()
    {
        return $this->value * $this->value;
    }

}

$shape = new Shape(5);
echo $shape->square();
