<?php

function binarySearch(array $list, $item)
{
    $i = 0;
    $low = 0;
    $high = count($list) - 1;
    
    while ($low <= $high) {
        echo ++$i . "\n";
        $mid = (int) (($low + $high)/2);
        $guess = $list[$mid];
        if ($guess === $item) {
            return $mid;
        }
        if ($guess > $item) {
            $high = $mid - 1;
        } else {
            $low = $mid + 1;
        }
    }
    
    return null;
}

$range = range(0, 1000000);

var_dump(binarySearch($range, 54103));