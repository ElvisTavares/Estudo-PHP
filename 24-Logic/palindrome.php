<?php

function palindrome($num): bool
{
    $numStr = strval($num); //converte o valor do numero em uma string
    $length = strlen($numStr);

    for ($i = 0; $i < $length / 2; $i++) {
        if ($numStr[$i] !== $numStr[$length - $i - 1]) {
            return false; // Se os dígitos não coincidem, não é um palíndromo
        }
    }

    return true;
}

$pal = palindrome(-101);
echo $pal;