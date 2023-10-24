<?php

function removeDuplicates($num)
{
    $uniqueNumbers = array_unique($num);

    $quantityUniqueNumbers = count($uniqueNumbers);

    $quantityDuplicate = count($num) - count($uniqueNumbers);

    for ($i=0; $i < $quantityDuplicate; $i++) { 
        # code...
        array_push($uniqueNumbers, '_');
    }

    return $quantityUniqueNumbers . ' nums = ' . $uniqueNumbers;
    // print_r($quantityUniqueNumbers . ' nums =' . $uniqueNumbers);
}

$num = ['1','2','3', '3', '4'];
$num2 =[0,0,1,1,1,2,2,3,3,4];
echo removeDuplicates($num2);

