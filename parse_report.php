<?php

/**
 * Reads file contents to a single string.
 * @return string
 */
function slurp($filename)
{
    $handle = fopen($filename, 'r');
    $contentString = trim(fread($handle, filesize($filename)));
    return $contentString;
}

function getArrayOfStringsFromFile($filename, $delimeter)
{
    $contentString = slurp($filename);
    $contentsArray = explode($delimeter, $contentString);
    return $contentsArray;
}

function isEmployeeRecord($string)
{
    $firstCharacter = substr($string, 0, 1);
    if(is_numeric($firstCharacter)) {
        return true;
    } else {
        return false;
    }
}

function getEmployeesFromArray($array)
{
    $employeesOnlyArray = [];

    foreach($array as $value) {
        if(isEmployeeRecord($value)) {
            $employeesOnlyArray[] = $value;
        }
    }
    return $employeesOnlyArray;
}


$filename = "report.txt";
$arrayOfStrings = getArrayOfStringsFromFile($filename);

$headerInfo = [
    'report_name'       => array_shift($arrayOfStrings),
    'report_date'       => array_shift($arrayOfStrings),
    'report_office'     => array_shift($arrayOfStrings),
];

$employees = getEmployeesFromArray($arrayOfStrings);








// Kruft
function lineStartsWithCharacter($string, $character)
{
    if(substr($string, 0, 2) == $character) {
        return true;
    } else {
        return false;
    }
}

function isKruft($string)
{
    if(lineStartsWithCharacter($string, "/") {
        return true;
    } else if (lineStartsWithCharacter($string, "*")) {
        return true;
    } else if (lineStartsWithCharacter($string, "=")) {
        return true;
    } else {
        return false;
    }
}

function removeKruftFromArray($array)
{
    foreach($array as $value) {
        if(isKruft($value)) {

        }
    }
}
