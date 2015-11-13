<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

function getUniqueValuesInBothArrays($firstArray, $secondArray)
{
    return array_values(array_unique(array_merge($firstArray, $secondArray)));
}

$together = getUniqueValuesInBothArrays($names, $compare);
print_r($together);

echo "=================\n";

function combineArrays($array1, $array2)
{
    $combined = [];

    foreach($array1 as $value) {
        if($array1[0] == $array2[0]) {
            $combined[] = array_shift($array1);
            array_shift($array2);
        } else {
            $combined[] = array_shift($array1);
            $combined[] = array_shift($array2);
        }
    }

    return $combined;
}




print_r(combineArrays($names, $compare));
