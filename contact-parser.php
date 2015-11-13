<?php

function parseContacts($filename)
{
    $contactsArray = array();
    $handle = fopen($filename, 'r');
    $contentString = trim(fread($handle, filesize($filename)));

    $arrayOfStrings = explode("\n", $contentString);

    foreach($arrayOfStrings as $personContactInfoString) {
        $personInfoArray = explode('|', $personContactInfoString);
        $name = $personInfoArray[0];
        $phoneNumber = addDashesToPhoneNumber($personInfoArray[1]);

        $contactsArray[] = [
            "name" => $name,
            "number" => $phoneNumber
        ];
    }

    fclose($handle);
    return $contactsArray;
}

function addDashesToPhoneNumber($phoneNumber)
{
    $areaCode = substr($phoneNumber, 0, 3);
    $middle = substr($phoneNumber, 3, 3);
    $lastFour = substr($phoneNumber, -4);
    return $areaCode . "-" . $middle . "-" . $lastFour;
}

var_dump(parseContacts('contacts.txt'));
