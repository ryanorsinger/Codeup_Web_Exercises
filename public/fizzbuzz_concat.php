<?php

$message = '';

for($i = 1; $i <= 100; $i+=1) {

    if ($i % 3 == 0) {
        $message .= "Fizz";
    }

    if ($i % 5 == 0) {
        $message .= "Buzz";
    }

    if ($i % 3 != 0 && $i % 5 != 0) {
        $message .= $i;
    }

    $message .= PHP_EOL;
}

echo $message;
