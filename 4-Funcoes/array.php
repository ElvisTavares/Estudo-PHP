<?php

	//retorna um array com as chaves 

	$array = array(
		"nome"=> "Bruce",
		"idade"=>"40",
		"cidade"=>"Gothan"
	);

	$array1 = array_keys($array);

	print_r($array1);

	echo "<br><br>-----------------------------------------------------------------------<br><br>";


	// retorna os valores das chaves

	$array2 = array_values($array);
	print_r($array2);

	echo "<br><br>-----------------------------------------------------------------------<br><br>";

	// remove ultimo elemento

	array_pop($array);

	print_r($array);

	echo "<br><br>-----------------------------------------------------------------------<br><br>";

	//remove o primeiro elemento

	$array3 = $array;

	array_shift($array);

	print_r($array);


	echo "<br><br>-----------------------------------------------------------------------<br><br>";

	//ordena mantendo associação entre indices e valores - lafabetica

	asort($array);

	print_r($array);

	//decrescente

		arsort($array);

	// numero total de registros no array

	count($array);
	print_r($array);

	echo "<br><br>-----------------------------------------------------------------------<br><br>";
	//

	$array4 = array(
		"Batmam",
		"Supermam",
		"Lanterna verde",
		"Flash"
	);

	if (in_array("Batmam", $array4)) {
		# code...

		echo "Ola, seja bem vindo ";
	}else{
		echo "STOP";
	}