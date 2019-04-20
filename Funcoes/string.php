<?php

//divide strings em outras

$nome = "Rick and Morty";

$x = explode(" ", $nome);

print_r($x);


echo "<br><br>----------------------------------<br><br>";
// Juntar em uma string

$nome = array("Rick","Morty");


$nomeCompleto = implode(" and ", $nome);

echo $nomeCompleto;

echo "<br><br>----------------------------------<br><br>";

//formatar numeros grandes depois da virgula

$x = number_format(3.434345454654654656,2);

$y = number_format(3434545.4654654656,2, ",",".");

echo $x;


echo "<br><br>----------------------------------<br><br>";


// Trocar strings

$texto = "Rick esta muito louco";

$string = str_replace("esta", "nao esta", $texto);

echo $string;


echo "<br><br>----------------------------------<br><br>";

//transforma em minusculos

echo strtolower("MORTY");


echo "<br><br>----------------------------------<br><br>";

//maiusculo

echo strtoupper("rick");


echo "<br><br>----------------------------------<br><br>";

//pega apenas caracteres especificos

$texto = "batmam";

$x = substr($texto, 0,3);

echo $x;

echo "<br><br>----------------------------------<br><br>";

//Converte 1° caracter p/ maiuscula

$nome =  "supermam";

echo ucfirst($nome);

echo "<br><br>----------------------------------<br><br>";


//maiucula 1° caracter de cada palavra

$nome = "supermam da silva";

echo ucwords($nome);








