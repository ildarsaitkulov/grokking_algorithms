<?php


function findSmallest(array $array)
{
    $smallestIndex = array_key_first($array);
    $smallest = $array[$smallestIndex];
    foreach($array as $index => $item) {
        if ($item < $smallest) {
            $smallest = $item;
            $smallestIndex = $index;
        }
    }
    
    return $smallestIndex;
}

function selectionSort(array $array): array
{
    $newArray = [];
    while (count($array)) {
        $smallestIndex = findSmallest($array);
        $newArray[] = $array[$smallestIndex];
        unset($array[$smallestIndex]);
    }
    
    return $newArray;
}


var_dump(selectionSort([3,5,54,22,-1]));