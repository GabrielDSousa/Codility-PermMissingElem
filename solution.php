<?php

/**
 * @param array $A
 * @return int
 */
function solution($A) : int
{
    sort($A);
    $len = count($A)-1;
    $N = $A[$len];

    if($N === 1){
        return 2;
    }elseif($len === 0){
        return 1;
    }

    $full_array = range(1, $N);
    $sumA = array_sum($A);
    $sumFull = array_sum($full_array);

    $diff = $sumFull - $sumA;
    if($diff == 0){
        return $N+1;
    }

    return $diff;

}
