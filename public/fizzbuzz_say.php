<?php

for($i = 1; $i <= 30; $i+=1) {
    if ($i % 3 != 0 && $i % 5 != 0) {
        echo `say "$i"`;
    }
    if ($i % 3 == 0) {
        echo `say "Fizz"`;
    }
    if ($i % 5 == 0) {
        echo `say "Buzz"`;
    }
}
