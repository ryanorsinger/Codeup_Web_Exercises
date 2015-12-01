<?php

$random = mt_rand(1, 100);

do {
    // Write the output
    // Notice the space after the ?
    fwrite(STDOUT, 'What is your first name? ');

    // Get the input from user
    $firstName = trim(fgets(STDIN));

} while (empty($firstName));

   // Output the user's name
    fwrite(STDOUT, "Hello $firstName\n");

exit(0);

?>
