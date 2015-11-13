<?php

function parseContacts($filename)
{
    $contactsArray = array();

    $handle = fopen($filename, 'r');
    $contents = fread($handle, filesize($filename));
    fclose($handle);
    $contentsArray = explode("\n", trim($contents));

    foreach($contentsArray as $person) {
        $personArray = explode("|", $person);
        $name = $personArray[0];
        $number = $personArray[1];

        $contactsArray[] = [
            'name' => $name,
            'number' => $number
        ];

    }

   return $contactsArray;
}

var_dump(parseContacts('contacts.txt'));
