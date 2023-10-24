<?php

function addBinary($a, $b)
{
    $intA = intval($a);
    $intB = intval($b);

    $decA = bindec($intA);
    $decB = bindec($intB);

    $sumDec = $decA + $decB;

    $sumBinaryConverter = decbin($sumDec);
    $sumBinaryConverterInString = strval($sumBinaryConverter);

    return $sumBinaryConverterInString;
}

$a = "101010";
$b = "110101";
$result = addBinary($a, $b);

echo $result;