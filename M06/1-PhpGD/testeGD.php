<?php

//Teste para ver se o php GD esta instalado

$testGD = get_extension_funcs("gd"); // Grab function list 

if (!$testGD){ 
	echo "GD not even installed.";
	exit; 
}

echo"<pre>".print_r($testGD,true)."</pre>";