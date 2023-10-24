<?php

function mergeTwoLists($list1, $list2) {
    $result = [];

    $cont1 = 0;
    $cont2 = 0;

    while ($cont1 < count($list1) || $cont2 < count($list2)) {
        if(isset($list1[$cont1])) {
            $result[] = $list1[$cont1];
            $cont1 ++;
        }

        if (isset($list2[$cont2])) {
            $result[] = $list2[$cont2];
            $cont2 ++;
        }
    }

    return $result;
}


$list1 = [1,2,4];
$list2 = [1,3,4];

$merge =  mergeTwoLists($list1, $list2);
echo json_encode($merge);