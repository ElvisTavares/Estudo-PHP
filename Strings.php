<?php
/**
 * Created by PhpStorm.
 * User: elvis
 * Date: 06/11/18
 * Time: 22:28
 */

$nome = "Son Goku";

//MAIUSCULO
$nome = strtoupper($nome);
echo $nome;

echo "<br>";

//MINUSCULO
$nome = strtolower($nome);
echo $nome;

 echo "<br>";
//primeiro caracter em maiusculo
 echo ucfirst($nome);

echo "<br>";
//primeiro caracter de cada palavara em maiusculo
echo ucwords($nome);


echo "<br>";
//SUBSTITUIR UM CARACTER POR OUTRO
$nome1 = "Gohan";
$nome1 = str_replace("o","0", $nome1);
echo $nome1;

///
echo "<br>";
echo "--------------";
echo "<br><br>";
//busca de palavras em string
$frase = "Os limites só existem se você os deixar existir";

$palavra = "você";

$q = strpos($frase, $palavra);
echo "<br>";

$texto = substr($frase, 0, $q);

var_dump($texto);


$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));

echo "<br>";

var_dump($texto2);