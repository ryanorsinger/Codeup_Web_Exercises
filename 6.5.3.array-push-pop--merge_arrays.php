<?php
// Create a function that returns TRUE or FALSE if an array value is found. Search for Tina and Bob in $names. Make sure it works as expected.

// Create a function to compare 2 arrays that returns the number of values in common between the arrays. Use the 2 example arrays and make sure your solution uses array_search().

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

function combineArrays($firstArray, $secondArray)
{
    // Declare new array
    $newArray = [];

    foreach($firstArray as $key => $value) {
        //If the arrays have the same value at the same index, then it should only be added once.
        if($firstArray[$key] == $secondArray[$key]) {
            $newArray[] = $secondArray[$key];

        } else {
            //If the values differ, the value from the first array should be added and then the second.
            $newArray[] = $firstArray[$key];
            $newArray[] = $secondArray[$key];
        }
    }
    return $newArray;

}

var_dump(combineArrays($names, $compare));
