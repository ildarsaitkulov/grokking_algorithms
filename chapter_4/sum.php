<?php

function sum(array $nums): int
{
    if (empty($nums)) {
        return 0;
    }
    
    return array_shift($nums) + sum($nums);
}

$nums = [2, 4, 6];
$result = sum($nums);

var_dump($result);