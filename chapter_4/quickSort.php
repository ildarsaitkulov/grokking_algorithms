<?php

function quickSort(array $list): array
{
    if (count($list) <= 1) {
        return $list;
    }
    
    $pivot = $list[0];
    unset($list[0]);
    
    $greater = [];
    $less = [];
    foreach ($list as $item) {
        if ($item > $pivot) {
            $greater[] = $item;
        } else {
            $less[] = $item;
        }
    }
    
    
    return array_merge(quickSort($less), [$pivot], quickSort($greater));
}

var_dump(quickSort([10, 5, 5, 5, 2, 3]));