<?php

require_once "Mercado.php";

$client = new Mercado();

$client->produto = "Batata";
$client->nProd = 3;

var_dump($client);