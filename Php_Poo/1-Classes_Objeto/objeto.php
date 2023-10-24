<?php

//insere a classe
include_once 'Produto.php';

//cria o objeto
$produto1 = new Produto;
$produto2 = new Produto;

//atribui valores
$produto1->codigo = 40;
$produto1->descricao = 'oi';

$produto2->codigo = 32;
$produto2->descricao = 'io';

$produto1->ImprimeEtiqueta();
echo "<br>";
$produto2->ImprimeEtiqueta();
