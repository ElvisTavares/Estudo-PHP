<?php

$contador = 0;

while($contador < 20){
	echo $contador."<br>";

	$contador ++;

}


echo "<hr>";

$vet = array(1, 2,3 ,4 ,5 ,6);

foreach($vet as $vettt){
	echo $vettt;
}

echo "<hr>";

$myArray = array(
	'1'=> 'Um',
	'2'=> 'dois',
	'3'=> 'tres',

);

print_r($myArray);

echo "<hr>";


$myArray1 = array();

$myArray1[] = 'Goku';
$myArray1[] = 'Vegeta';

$myArray1['GO'] = 'Gohan';
$myArray1['CR'] = 'Curirin';

print_r($myArray1);

echo "<hr>";


$numerico = array(
	100,
	new DateTime(),
	'String',
	89,
	22
);

var_dump($numerico);


