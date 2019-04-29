<?php

	$nome1 = "Hulk";
	$nome2 = md5($nome1);

	echo "Original: ".$nome1;
	echo "<br>";
	echo "Criptografado: ".$nome2;

	echo "<br>           <=============================>             <br><br>";

	$nome3 = "Thor";
	$n = base64_encode($nome3);
	echo "Base 64: ".$n;

