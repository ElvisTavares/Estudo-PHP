<?php

function twoSum($nums, $target)
{
    $numToIndex = array();

for ($i=0; $i < count($nums); $i++) { 
    $complement = $target - $nums[$i]; //Calcula a diferença entre o alvo e o numero atual
var_dump($numToIndex);
    //verifica se o complemento ja existe no mapa
    if(isset($numToIndex[$complement])) {
        return array($numToIndex[$complement], $i);
    }

    //insere o numero atual no mapa com sua posiçao
    $numToIndex[$nums[$i]] = $i;

}
    return null;
}

//$nums = [2,7,11,15];
$nums = [7,11,15,2];
$target = 9;

$result = twoSum($nums, $target);

echo "[" . $result[0] .",". $result[1] . "]";


