<?php

    $animals = [
        'goose dog',
        'turtle',
        'ant eaters',
        'horses',
        'snipes',
        'rabbits',
        'sloths',
        'tiger',
        'platypus',
    ];

    foreach($animals as $animal) {
        if (is_string($animal)) {
            `say "Old Mac Donald had a farm. EIEIEO. And on that farm she had some $animal."`;
        }
    }

 ?>
