<?php

require_once '9.2.1.inheritance-exercise.php';
require_once 'square.php';

$rectangle1 = new Rectangle(2, 3);
echo $rectangle1->area();

$rectangle2 = new Rectangle(4,9);
echo $rectangle2->area();


$square1 = new Square(4);
echo "Perimeter is " . $square1->perimeter();
echo "Area is " . $square1->area();


$square2 = new Square(5);
$square3 = new Square(11.32);



$cookie = new Pastry('cookie');
echo $cookie->secretIngredients;

$cookie->bake();
