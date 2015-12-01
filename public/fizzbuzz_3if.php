<?php

for($i = 1; $i <= 30; $i+=1) {
    if ($i % 3 != 0 && $i % 5 != 0) {
        echo $i;
    }
    if ($i % 3 == 0) {
        echo "Fizz";
    }
    if ($i % 5 == 0) {
        echo "Buzz";
    }
    echo PHP_EOL;
}
