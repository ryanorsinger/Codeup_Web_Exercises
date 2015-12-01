<?php

    $studentDetails = [
        'villain'  => false,
        'employed' => false,
        'age' => 42,
        'name' => 'Jane Doe',
        'occupation' => 'Wonder Woman'
    ];

    foreach($studentDetails as $key => $studentDetail) {
        echo "The value for the key $key is $studentDetail" . PHP_EOL;
    }
 ?>
