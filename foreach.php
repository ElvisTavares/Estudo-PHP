<?php
/**
 * Created by PhpStorm.
 * User: elvis
 * Date: 10/11/18
 * Time: 16:27
 */

$meses = array(
    "Janeiro", "Fevereiro","Março",
    "Abril", "Maio","Junho",
    "Julho", "Agosto","Setembro",
    "Outubro", "Novembro","Dezembro"
);

foreach($meses as $mes){
    echo "Mês: ".$mes."<br>";
}

echo "<br>";

//indice do array

foreach($meses as $index => $mes){
    echo "Mês: ".$index."<br>";
}


