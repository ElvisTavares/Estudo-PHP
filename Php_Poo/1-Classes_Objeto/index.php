<?php

require_once("Caneta.php");

$c1 = new Caneta();

$c1->cor = "Azul";
$c1->ponta = "0.4";

//var_dump($c1);

//$c1->tampada = true;

$c1->tampar();
$c1->rabiscar();

