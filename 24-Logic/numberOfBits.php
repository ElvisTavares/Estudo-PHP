<?php

function hammingWeight($numero) {
    //converter p/ array
    $contagemDeUns = 0;

    while ($numero > 0) {
        if ($numero % 2 === 1) {
            $contagemDeUns++;
        }
        $numero = (int) ($numero / 2);
    }

    return $contagemDeUns;
}

echo hammingWeight(11100);