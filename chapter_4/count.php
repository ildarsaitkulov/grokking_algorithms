<?php

$list = [1, 4, 5, 6];

function countElements(array $list): int
{
    if (empty($list)) {
        return 0;
    }
    array_shift($list);
    
    return 1 + countElements($list);
}

var_dump(countElements($list));