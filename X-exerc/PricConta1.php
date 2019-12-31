<?php

require_once "Conta1.php";

$c1 = new Conta1("Elvis", 5);

echo $c1->getNome() . " - ". $c1->getBalance();
