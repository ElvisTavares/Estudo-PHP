<?php

function climbStairs($n){
    $combination = [];

    function findClimb($n, $currentCombination, &$combination) {
        $sumCurrent = array_sum($currentCombination);
     
        if ($sumCurrent === $n) {
            $combination[] = $currentCombination;
        }elseif($sumCurrent < $n) {
            findClimb($n, array_merge($currentCombination, [1]), $combination);

            findClimb($n, array_merge($currentCombination, [2]), $combination);
        }
    }

    findClimb($n, [], $combination);

    return count($combination);
}

$num = 9;

$combination = climbStairs($num);

echo $combination;

