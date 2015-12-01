<?php

// Create a do-while loop that will count by 2's starting with 0 and ending at 100. Follow each number with a newline.

$a = 0;

do {
    echo "\$a is equal to {$a}" . PHP_EOL;
    $a += 2;
} while ($a <= 100);

echo PHP_EOL . "========================" . PHP_EOL;

// Alter your loop to count backwards by 5's from 100 to -10.
$a = 100;
do {
    echo "\$a is equal to {$a}" . PHP_EOL;
    $a -= 5;
} while ($a >= -10);

echo PHP_EOL . "========================" . PHP_EOL;

// do-loop where $a starts at 2, outputs $a * $a, then ends when $a == 1,000,000
$a = 2;
do {
    echo "\$a is {$a}" . PHP_EOL;
    $a *= $a;
} while ($a < 1000000);
