<?php

function romanToInt($s)
{
    $romanValues = ['I' => 1, 'V' => 5, 'X' => 10, 'L' => 50, 'C' => 100, 'D' => 500,  'M' => 1000];
    $result = 0;
    $prevValue = 0;

    $length = strlen($s);

    for ($i= $length - 1; $i >=0 ; $i--) { 
        # code...
        $char = $s[$i];
        $value = $romanValues[$char];

            if($value < $prevValue) {
                $result -= $value;
            }else {
                $result += $value;
                $prevValue = $value;
            }

            
    }
    return $result;
}


$resultado = romanToInt('LVIII');
echo $resultado;