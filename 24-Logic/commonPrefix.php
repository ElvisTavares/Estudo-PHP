<?php

function longestCommonPrefix($strs) {

    $prefix = $strs[0];

    foreach($strs as $string) {
        while(strpos($string, $prefix) !== 0) {
            $prefix = substr($prefix, 0, -1);

            if($prefix === '') {
                return '""';
            }
        }
    }
    return $prefix;
}



$array = ['flower','flow','flight'];
$array1 = ['dog','racecar','car'];
echo longestCommonPrefix($array1);

